<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Log, Validator};
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {



        // Validate input
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'house_number' => 'required|string|max:255',
            'wing' => 'required|string|max:255',
            'contact_number' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'nullable|email|max:255',
            'team_category' => 'required|string|in:Men,Women',
            'player_roles' => 'required|string|min:1',
            'tshirt_size' => 'required|string|in:XS,S,M,L,XL,XXL',
            'agreement' => 'required|in:0,1',
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
            $registration = Registration::create([
                'customer_code' => 'VSH' . str_pad(Registration::count() + 1, 4, '0', STR_PAD_LEFT),
                'full_name' => $request->full_name,
                'house_number' => $request->house_number,
                'wing' => $request->wing,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'team_category' => $request->team_category,
                'player_roles' => $request->player_roles,
                'tshirt_size' => $request->tshirt_size,
                'agreement' => $request->agreement,
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

    public function updatePayment(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'payment' => 'required|in:pending,done',
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
            $registration->update(['payment' => $request->payment]);

            return response()->json([
                'success' => true,
                'message' => 'Payment status updated successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Update Payment Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error updating payment status'
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

        $callback = function() use($registrations, $columns) {
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
}
