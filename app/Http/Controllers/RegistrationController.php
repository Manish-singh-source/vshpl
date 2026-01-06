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
            'contact_number' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'team_category' => 'required|string|in:Men,Women',
            'player_roles' => 'required|string',
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
                'full_name' => $request->full_name,
                'house_number' => $request->house_number,
                'wing' => $request->wing,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'team_category' => $request->team_category,
                'player_roles' => $request->player_roles,
                'agreement' => $request->agreement,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Thank you for registering!',
                'data' => $registration
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
}
