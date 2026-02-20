<?php

namespace App\Http\Controllers;

use App\Models\HoliCelebration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HoliCelebrationController extends Controller
{
    public function index()
    {
        $records = HoliCelebration::orderBy('created_at', 'desc')->get();

        return view('holicelebration.data', compact('records'));
    }

    public function store(Request $request)
    {
        $statusData = $request->validate([
            'participationStatus' => 'required|in:IN,OUT',
        ]);

        if (($statusData['participationStatus'] ?? 'OUT') === 'OUT') {
            return response()->json([
                'message' => 'Response submitted successfully.',
                'id' => null,
                'totalAmount' => 0,
            ]);
        }

        $validated = $request->validate([
            'wing' => 'required|string|max:20',
            'flatNumber' => 'required|string|max:100',
            'fullName' => 'required|string|max:255',
            'mobileNumber' => ['required', 'regex:/^[0-9]{10}$/'],
            'email' => 'nullable|email|max:255',
            'coupons' => 'required|integer|min:1|max:20',
            'paymentMode' => 'required|in:COD,ONLINE',
            'paymentDone' => 'required_if:paymentMode,ONLINE|nullable|accepted',
            'paymentScreenshot' => 'required_if:paymentMode,ONLINE|nullable|image|max:4096',
        ]);

        $normalizedWing = trim($validated['wing']);
        $normalizedName = trim($validated['fullName']);
        $normalizedFlat = trim($validated['flatNumber']);

        $alreadyRegistered = HoliCelebration::query()
            ->where('participation_status', 'IN')
            ->where('wing', $normalizedWing)
            ->whereRaw('LOWER(TRIM(full_name)) = ?', [mb_strtolower($normalizedName)])
            ->whereRaw('LOWER(TRIM(flat_number)) = ?', [mb_strtolower($normalizedFlat)])
            ->exists();

        if ($alreadyRegistered) {
            return response()->json([
                'message' => 'Already registered.',
                'errors' => [
                    'fullName' => ['Already registered.'],
                ],
            ], 422);
        }

        $coupons = (int) ($validated['coupons'] ?? 0);
        $isParticipating = true;

        $totalAmount = $coupons * 300;

        $paymentScreenshotPath = null;
        if ($request->hasFile('paymentScreenshot')) {
            $paymentScreenshotPath = $request->file('paymentScreenshot')->store('holi-celebration-payments', 'public');
        }

        $record = HoliCelebration::create([
            'participation_status' => $statusData['participationStatus'],
            'wing' => $isParticipating ? $normalizedWing : null,
            'flat_number' => $isParticipating ? $normalizedFlat : null,
            'full_name' => $isParticipating ? $normalizedName : null,
            'mobile_number' => $isParticipating ? ($validated['mobileNumber'] ?? null) : null,
            'coupons' => $isParticipating ? $coupons : null,
            'total_amount' => $totalAmount,
            'payment_mode' => $isParticipating ? ($validated['paymentMode'] ?? null) : null,
            'payment_done' => $isParticipating ? $request->boolean('paymentDone') : false,
            'payment_screenshot' => $paymentScreenshotPath,
        ]);

        if (!empty($validated['email'])) {
            try {
                Mail::send('emails.holi-celebration-thank-you', [
                    'name' => $normalizedName,
                    'wing' => $normalizedWing,
                    'flatNumber' => $normalizedFlat,
                    'coupons' => $coupons,
                    'totalAmount' => $totalAmount,
                    'paymentMode' => $validated['paymentMode'],
                ], function ($message) use ($validated, $normalizedName) {
                    $message
                        ->to($validated['email'], $normalizedName)
                        ->subject('Thank You for Registering - Holi Celebration 2026');
                });
            } catch (\Throwable $exception) {
                Log::error('Holi celebration thank-you email failed', [
                    'email' => $validated['email'],
                    'error' => $exception->getMessage(),
                ]);
            }
        }

        return response()->json([
            'message' => 'Registration submitted successfully.',
            'id' => $record->id,
            'totalAmount' => $record->total_amount,
        ]);
    }

    public function screenshot(HoliCelebration $holiCelebration)
    {
        if (!$holiCelebration->payment_screenshot || !Storage::disk('public')->exists($holiCelebration->payment_screenshot)) {
            abort(404);
        }

        return response()->file(storage_path('app/public/' . $holiCelebration->payment_screenshot));
    }

    public function export()
    {
        $records = HoliCelebration::orderBy('created_at', 'desc')->get();
        $fileName = 'holi-celebration-data.csv';
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=$fileName",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $columns = [
            'ID',
            'Status',
            'Wing',
            'Flat Number',
            'Name',
            'Mobile',
            'Coupons',
            'Total Amount',
            'Payment Mode',
            'Payment Done',
            'Screenshot Path',
            'Created At',
        ];

        $callback = function () use ($records, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($records as $record) {
                fputcsv($file, [
                    $record->id,
                    $record->participation_status,
                    $record->wing ?? '',
                    $record->flat_number ?? '',
                    $record->full_name ?? '',
                    $record->mobile_number ?? '',
                    $record->coupons ?? '',
                    $record->total_amount,
                    $record->payment_mode ?? '',
                    $record->payment_done ? 'Yes' : 'No',
                    $record->payment_screenshot ?? '',
                    optional($record->created_at)->format('d-m-Y H:i'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function destroy(HoliCelebration $holiCelebration)
    {
        $holiCelebration->delete();

        return redirect()->route('holicelebration.data')->with('success', 'Record deleted successfully.');
    }
}
