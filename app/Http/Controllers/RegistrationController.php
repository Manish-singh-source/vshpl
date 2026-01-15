<?php

namespace App\Http\Controllers;

use Laravolt\Avatar\Avatar;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Log, Validator};
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'full_name' => 'required|string|max:255',
            'house_number' => 'required|string|max:255',
            'wing' => 'required|string|max:255',
            'contact_number' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'nullable|email|max:255|unique:registrations,email',
            'team_category' => 'required|string|in:Men,Women',
            'player_roles' => 'required|string|min:1',
            'tshirt_size' => 'required|string|in:XS,S,M,L,XL,XXL',
            'agreement' => 'required|in:0,1',
            'sponsor' => 'required|in:0,1',
            'sponsor_pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        try {
            $profilePath = null;
            if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
                $file = $request->file('profile_image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/profile_images'), $filename);
                $profilePath = 'uploads/profile_images/' . $filename;
            }

            $sponsorPdfPath = null;
            if ($request->hasFile('sponsor_pdf') && $request->file('sponsor_pdf')->isValid()) {
                $file = $request->file('sponsor_pdf');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/sponsor_pdfs'), $filename);
                $sponsorPdfPath = 'uploads/sponsor_pdfs/' . $filename;
            }

            $registration = Registration::create([
                'customer_code' => 'VSH' . str_pad(Registration::count() + 1, 4, '0', STR_PAD_LEFT),
                'profile_image' => $profilePath ?? null,
                'full_name' => $request->full_name,
                'house_number' => $request->house_number,
                'wing' => $request->wing,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'team_category' => $request->team_category,
                'player_roles' => $request->player_roles,
                'tshirt_size' => $request->tshirt_size,
                'agreement' => $request->agreement,
                'sponsor_pdf' => $sponsorPdfPath,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Thank you for registering!',
                'data' => $registration,
                'customer_code' => $registration->customer_code
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Registration Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'payment' => 'sometimes|required|in:pending,done',
            'tshirt_size' => 'sometimes|required|string|in:XS,S,M,L,XL,XXL',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $registration = Registration::findOrFail($id);

            $validatedData = $validator->validated();

            if (empty($validatedData)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No valid data provided for update.'
                ], 422);
            }

            $registration->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Registration details updated successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Update Registration Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error updating registration details'
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $registration = Registration::findOrFail($id);
            $registration->delete();

            return response()->json([
                'success' => true,
                'message' => 'Registration deleted successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Delete Registration Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error deleting registration'
            ], 500);
        }
    }

    public function export()
    {
        $registrations = Registration::all();
        $fileName = "registrations.csv";
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Reservation Code', 'Full Name', 'Flat No', 'Wing', 'Contact No', 'Email', 'Team Category', 'Player Roles', 'T-Shirt Size', 'Agreement', 'Payment Status');

        $callback = function () use ($registrations, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($registrations as $registration) {
                $row['Reservation Code']  = $registration->customer_code;
                $row['Full Name']    = $registration->full_name;
                $row['Flat No']  = $registration->house_number;
                $row['Wing']  = $registration->wing;
                $row['Contact No']  = $registration->contact_number;
                $row['Email']  = $registration->email;
                $row['Team Category']  = $registration->team_category;
                $row['Player Roles']  = $registration->player_roles;
                $row['T-Shirt Size']  = $registration->tshirt_size;
                $row['Agreement']  = $registration->agreement ? 'Yes' : 'No';
                $row['Payment Status']  = ucfirst($registration->payment);

                fputcsv($file, array($row['Reservation Code'], $row['Full Name'], $row['Flat No'], $row['Wing'], $row['Contact No'], $row['Email'], $row['Team Category'], $row['Player Roles'], $row['T-Shirt Size'], $row['Agreement'], $row['Payment Status']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }


    public function editPlayerDetails(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'wing' => 'required|string|max:255',
            'house_number' => 'required|string|max:255',
        ]);

        $registration = Registration::where('wing', $request->wing)
            ->where('house_number', $request->house_number)
            ->first();

        if ($registration) {
            return view('update-player-details', compact('registration'));
        } else {
            return redirect()->back()->with('error', 'Invalid wing or house number');
        }
    }

    public function updatePlayerDetails(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'full_name' => 'required|string|max:255',
            'tshirt_size' => 'required|string|in:XS,S,M,L,XL,XXL',
            'wing' => 'required|string|max:255',
            'house_number' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $registration = Registration::find($id);

            $validatedData = $validator->validated();

            if (empty($validatedData)) {
                return response()->json([
                    'success' => false,
                    'message' => 'No valid data provided for update.'
                ], 422);
            }

            $profilePath = null;
            if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
                $file = $request->file('profile_image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/profile_images'), $filename);
                $profilePath = 'uploads/profile_images/' . $filename;
                $registration->profile_image = $profilePath;
            }

            $registration->tshirt_size = $validatedData['tshirt_size'];
            $registration->save();

            return redirect()->route('register.form')->with('success', 'Player details updated successfully');
        } catch (\Exception $e) {
            Log::error('Update Registration Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error updating player details'
            ], 500);
        }
    }
}
