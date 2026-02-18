<?php

namespace App\Http\Controllers;

use App\Models\VehicleService;
use Illuminate\Http\Request;

class VehicleServiceController extends Controller
{
    /**
     * Display the vehicle services admin dashboard.
     */
    public function index()
    {
        $vehicleServices = VehicleService::all();
        return view('vehicle-services.admin', compact('vehicleServices'));
    }

    /**
     * Store a newly created vehicle service registration in database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'wing' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'flatNumber' => 'required|string|max:255',
            'mobileNumber' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'vehicleType' => 'required|string|max:255',
            'vehicleNumber' => 'required|string|max:255',
        ]);

        VehicleService::create([
            'wing' => $request->wing,
            'full_name' => $request->fullName,
            'flat_number' => $request->flatNumber,
            'mobile_number' => $request->mobileNumber,
            'email' => $request->email,
            'vehicle_type' => $request->vehicleType,
            'vehicle_number' => $request->vehicleNumber,
        ]);

        return redirect()->route('vehicle.services')->with('success', 'Vehicle service registration submitted successfully!');
    }

    /**
     * Remove the specified vehicle service registration from database.
     */
    public function destroy(VehicleService $vehicleService)
    {
        $vehicleService->delete();
        return redirect()->route('vehicle.services.admin')->with('success', 'Vehicle service registration deleted successfully!');
    }
}
