<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoliVehicle;

class HoliVehicleController extends Controller
{
    /**
     * Display the admin view with all Holi vehicle registrations.
     */
    public function admin()
    {
        $holiVehicles = HoliVehicle::orderBy('created_at', 'desc')->get();
        return response()->view('holi.admin', compact('holiVehicles'))->header('Cache-Control', 'no-cache, no-store, must-revalidate');
    }

    /**
     * Store a newly created Holi vehicle registration in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'wing' => 'required',
            'vehicleType' => 'required',
            'fullName' => 'required|string|max:255',
            'flatNumber' => 'required|string|max:255',
            'mobileNumber' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'vehicleNumber' => 'required|string|max:255',
        ]);

        HoliVehicle::create([
            'wing' => $request->wing,
            'vehicle_type' => $request->vehicleType,
            'full_name' => $request->fullName,
            'flat_number' => $request->flatNumber,
            'mobile_number' => $request->mobileNumber,
            'email' => $request->email,
            'vehicle_number' => $request->vehicleNumber,
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }

    /**
     * Remove the specified Holi vehicle registration from storage.
     */
    public function destroy(HoliVehicle $holiVehicle)
    {
        $holiVehicle->delete();

        return redirect()->route('holi.admin')->with('success', 'Registration deleted successfully!');
    }
}
