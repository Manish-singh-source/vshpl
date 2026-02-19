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

    /**
     * Export vehicle service registrations to CSV.
     */
    public function export()
    {
        $vehicleServices = VehicleService::all();
        $fileName = "vehicle-registration.csv";
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('ID', 'Wing', 'Full Name', 'Flat Number', 'Mobile Number', 'Email', 'Vehicle Type', 'Vehicle Number', 'Created At');

        $callback = function () use ($vehicleServices, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($vehicleServices as $vehicleService) {
                $row['ID']  = $vehicleService->id;
                $row['Wing']  = strtoupper($vehicleService->wing);
                $row['Full Name']  = $vehicleService->full_name;
                $row['Flat Number']  = $vehicleService->flat_number;
                $row['Mobile Number']  = $vehicleService->mobile_number;
                $row['Email']  = $vehicleService->email ?? 'N/A';
                $row['Vehicle Type']  = ucfirst($vehicleService->vehicle_type);
                $row['Vehicle Number']  = $vehicleService->vehicle_number;
                $row['Created At']  = $vehicleService->created_at->format('d-m-Y H:i');

                fputcsv($file, array($row['ID'], $row['Wing'], $row['Full Name'], $row['Flat Number'], $row['Mobile Number'], $row['Email'], $row['Vehicle Type'], $row['Vehicle Number'], $row['Created At']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
