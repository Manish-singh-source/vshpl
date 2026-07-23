<?php

namespace App\Http\Controllers;

use App\Models\GaneshUtsavRegistration;
use App\Models\Registration;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GaneshUtsavController extends Controller
{
    public function index(): View
    {
        $registrations = GaneshUtsavRegistration::latest()->get();

        return view('ganesh-utsav.data', compact('registrations'));
    }

    public function export()
    {
        $fileName = 'ganesh-utsav-contributions-' . now()->format('Y-m-d') . '.csv';

        return response()->streamDownload(function (): void {
            $file = fopen('php://output', 'w');
            fwrite($file, "\xEF\xBB\xBF");

            fputcsv($file, [
                'ID',
                'Resident Type',
                'Wing',
                'Flat Number',
                'Full Name',
                'Mobile Number',
                'Contribution Amount',
                'Has Extra Coupon',
                'Extra Coupon Quantity',
                'Extra Coupon Unit Amount',
                'Extra Coupon Total',
                'Is Sponsor',
                'Sponsor Description',
                'Sponsor About',
                'Sponsor Amount',
                'Payment Method',
                'Payment Proof URL',
                'Payment Collected',
                'Accepted At',
                'Grand Total',
                'Submitted At',
                'Updated At',
            ]);

            $excelSafe = static function ($value): string {
                $value = (string) ($value ?? '');

                return preg_match('/^[=\-+@\t\r]/u', $value) ? "'" . $value : $value;
            };

            foreach (GaneshUtsavRegistration::latest()->cursor() as $registration) {
                fputcsv($file, array_map($excelSafe, [
                    $registration->id,
                    $registration->resident_type,
                    $registration->wing,
                    $registration->flat_number,
                    $registration->full_name,
                    $registration->mobile_number,
                    $registration->contribution_amount,
                    $registration->has_extra_coupon ? 'Yes' : 'No',
                    $registration->extra_coupon_quantity,
                    $registration->extra_coupon_unit_amount,
                    $registration->extra_coupon_total,
                    $registration->is_sponsor ? 'Yes' : 'No',
                    $registration->sponsor_description,
                    $registration->sponsor_about,
                    $registration->sponsor_amount,
                    $registration->sponsor_payment_method
                        ? ucwords(str_replace('_', ' ', $registration->sponsor_payment_method))
                        : '',
                    $registration->sponsor_payment_screenshot
                        ? asset($registration->sponsor_payment_screenshot)
                        : '',
                    $registration->is_accepted ? 'Yes' : 'No',
                    $registration->accepted_at?->format('d-m-Y H:i:s'),
                    $registration->grand_total,
                    $registration->created_at?->format('d-m-Y H:i:s'),
                    $registration->updated_at?->format('d-m-Y H:i:s'),
                ]));
            }

            fclose($file);
        }, $fileName, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Cache-Control' => 'no-store, no-cache',
        ]);
    }

    public function lookup(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'wing' => ['required', 'string', 'max:20'],
            'flat_number' => ['required', 'string', 'max:50'],
        ]);

        $wing = trim($validated['wing']);
        $flatNumber = trim($validated['flat_number']);

        $resident = Registration::query()
            ->where('wing', $wing)
            ->where('house_number', $flatNumber)
            ->first();

        $latestGaneshRegistration = GaneshUtsavRegistration::query()
            ->where('wing', $wing)
            ->where('flat_number', $flatNumber)
            ->latest()
            ->first();

        $acceptedRegistrations = GaneshUtsavRegistration::query()
            ->where('wing', $wing)
            ->where('flat_number', $flatNumber)
            ->where('is_accepted', true);

        $acceptedContributionTotal = (int) (clone $acceptedRegistrations)->sum('contribution_amount');
        $acceptedExtraCouponQuantity = (int) (clone $acceptedRegistrations)->sum('extra_coupon_quantity');
        $acceptedExtraCouponTotal = (int) (clone $acceptedRegistrations)->sum('extra_coupon_total');
        $acceptedSponsorAmount = (int) (clone $acceptedRegistrations)->sum('sponsor_amount');
        $acceptedGrandTotal = (int) (clone $acceptedRegistrations)->sum('grand_total');

        return response()->json([
            'found' => $resident !== null || $latestGaneshRegistration !== null,
            'full_name' => $resident?->full_name ?? $latestGaneshRegistration?->full_name,
            'mobile_number' => $resident?->contact_number ?? $latestGaneshRegistration?->mobile_number,
            'has_paid_main_contribution' => $acceptedContributionTotal > 0,
            'paid_contribution_amount' => $acceptedContributionTotal,
            'paid_extra_coupon_quantity' => $acceptedExtraCouponQuantity,
            'paid_extra_coupon_total' => $acceptedExtraCouponTotal,
            'paid_sponsor_amount' => $acceptedSponsorAmount,
            'paid_grand_total' => $acceptedGrandTotal,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'resident_type' => ['required', 'in:owner,tenant'],
            'wing' => ['required', 'string', 'max:20'],
            'flat_number' => ['required', 'string', 'max:50'],
            'full_name' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:20'],
            'has_extra_coupon' => ['nullable', 'boolean'],
            'extra_coupon_quantity' => ['nullable', 'integer', 'min:1', 'max:20'],
            'is_sponsor' => ['nullable', 'boolean'],
            'sponsor_about' => ['nullable', 'string'],
            'sponsor_amount' => ['nullable', 'integer', 'min:0'],
            'sponsor_payment_method' => ['required', 'in:cash,online,already_paid'],
            'sponsor_payment_screenshot' => ['nullable', 'image', 'max:4096'],
        ]);

        $hasExtraCoupon = $request->boolean('has_extra_coupon');
        $extraCouponQuantity = $hasExtraCoupon ? (int) $request->input('extra_coupon_quantity', 1) : 0;
        $extraCouponUnitAmount = 250;
        $extraCouponTotal = $extraCouponQuantity * $extraCouponUnitAmount;
        $wing = trim($validated['wing']);
        $flatNumber = trim($validated['flat_number']);
        $hasPaidMainContribution = GaneshUtsavRegistration::query()
            ->where('wing', $wing)
            ->where('flat_number', $flatNumber)
            ->where('is_accepted', true)
            ->where('contribution_amount', '>', 0)
            ->exists();
        $contributionAmount = $hasPaidMainContribution ? 0 : 1000;

        $isSponsor = $request->boolean('is_sponsor');
        $sponsorAmount = $isSponsor ? (int) $request->input('sponsor_amount', 0) : 0;
        $sponsorPaymentMethod = $validated['sponsor_payment_method'];
        $grandTotal = $contributionAmount + $extraCouponTotal + $sponsorAmount;

        if ($grandTotal > 0 && in_array($sponsorPaymentMethod, ['online', 'already_paid'], true)) {
            $request->validate([
                'sponsor_payment_screenshot' => ['required', 'image', 'max:4096'],
            ]);
        }

        $screenshotPath = null;

        if ($request->hasFile('sponsor_payment_screenshot')) {
            $file = $request->file('sponsor_payment_screenshot');
            $fileName = 'sponsor-payment-' . time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/ganesh-utsav');

            if (! is_dir($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $fileName);
            $screenshotPath = 'uploads/ganesh-utsav/' . $fileName;
        }

        GaneshUtsavRegistration::create([
            'resident_type' => $validated['resident_type'],
            'wing' => $wing,
            'flat_number' => $flatNumber,
            'full_name' => $validated['full_name'],
            'mobile_number' => $validated['mobile_number'],
            'contribution_amount' => $contributionAmount,
            'has_extra_coupon' => $hasExtraCoupon,
            'extra_coupon_quantity' => $extraCouponQuantity,
            'extra_coupon_unit_amount' => $extraCouponUnitAmount,
            'extra_coupon_total' => $extraCouponTotal,
            'is_sponsor' => $isSponsor,
            'sponsor_description' => null,
            'sponsor_about' => $isSponsor ? $request->input('sponsor_about') : null,
            'sponsor_amount' => $sponsorAmount,
            'sponsor_payment_method' => $sponsorPaymentMethod,
            'sponsor_payment_screenshot' => $screenshotPath,
            'grand_total' => $grandTotal,
            'is_accepted' => false,
        ]);

        return back()->with('success', 'Ganesh Utsav contribution submitted successfully.');
    }

    public function accept(GaneshUtsavRegistration $ganeshUtsavRegistration): RedirectResponse
    {
        if (! $ganeshUtsavRegistration->is_accepted) {
            $ganeshUtsavRegistration->update([
                'is_accepted' => true,
                'accepted_at' => now(),
            ]);
        }

        return back()->with('success', 'Payment accepted successfully.');
    }

    public function destroy(GaneshUtsavRegistration $ganeshUtsavRegistration): RedirectResponse
    {
        $ganeshUtsavRegistration->delete();

        return back()->with('success', 'Contribution record deleted successfully.');
    }
}

