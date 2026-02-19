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
            'vehicleNumber' => 'required|string|max:255|unique:holi_vehicles,vehicle_number',
        ], [
            'vehicleNumber.unique' => 'This vehicle number is already registered. Please enter a unique vehicle number.',
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

    /**
     * Export Holi vehicle registrations to CSV.
     */
    public function export()
    {
        $holiVehicles = HoliVehicle::all();
        $fileName = "holi-vehicle-registrations.csv";
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('ID', 'Wing', 'Full Name', 'Flat Number', 'Mobile Number', 'Email', 'Vehicle Type', 'Vehicle Number', 'Created At');

        $callback = function () use ($holiVehicles, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($holiVehicles as $holiVehicle) {
                $row['ID']  = $holiVehicle->id;
                $row['Wing']  = strtoupper($holiVehicle->wing);
                $row['Full Name']  = $holiVehicle->full_name;
                $row['Flat Number']  = $holiVehicle->flat_number;
                $row['Mobile Number']  = $holiVehicle->mobile_number;
                $row['Email']  = $holiVehicle->email ?? 'N/A';
                $row['Vehicle Type']  = ucfirst($holiVehicle->vehicle_type);
                $row['Vehicle Number']  = $holiVehicle->vehicle_number;
                $row['Created At']  = $holiVehicle->created_at->format('d-m-Y H:i');

                fputcsv($file, array($row['ID'], $row['Wing'], $row['Full Name'], $row['Flat Number'], $row['Mobile Number'], $row['Email'], $row['Vehicle Type'], $row['Vehicle Number'], $row['Created At']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
