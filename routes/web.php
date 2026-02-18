<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\VehicleServiceController;

Route::prefix('/vshpl')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('register.form');
    Route::post('/register', [RegistrationController::class, 'store'])->name('register.registration');

    Route::get('/edit-player-details', function () {
        return view('edit-player-details');
    })->name('edit-player-details');
    
    Route::post('/edit-registration', [RegistrationController::class, 'editPlayerDetails'])->name('edit.registration');
    Route::put('/update-user-registration/{id}', [RegistrationController::class, 'updatePlayerDetails'])->name('update.user.registration');
    
    Route::get('/admin', function () {
        $registrations = \App\Models\Registration::all();
        return view('dashboard', compact('registrations'));
    })->name('admin.dashboard');

    Route::get('/vendor-register', function () {
        return view('vendor-register');
    })->name('vendor.register.form');

    Route::get('/admin/export', [RegistrationController::class, 'export'])->name('export.registrations.list');
    Route::put('/update-registration/{id}', [RegistrationController::class, 'update'])->name('update.registration');
    Route::delete('/delete/{id}', [RegistrationController::class, 'destroy'])->name('delete.registration');
    
    Route::get('/vehicleregistration', function () {
        return view('vehicle-services');
    })->name('vshpl.vehicle.services');
});

Route::get('/cricket', function () {
        $teams = \App\Models\Team::all();
        return view('cricket', compact('teams'));
});
Route::post('/cricket/join', [RegistrationController::class, 'storeTeam'])->name('team.join');
Route::get('/cricket/team-members', [RegistrationController::class, 'getTeamMembers'])->name('team.members');
Route::get('/vehicleregistration', function () {
    return view('vehicle-services');
})->name('vehicle.services');
Route::post('/vehicleregistration', [VehicleServiceController::class, 'store'])->name('vehicle.services.store');
Route::get('/vehicleregistration/admin', [VehicleServiceController::class, 'index'])->name('vehicle.services.admin');
Route::delete('/vehicleregistration/{vehicleService}', [VehicleServiceController::class, 'destroy'])->name('vehicle.services.destroy');

Route::get('/vehicle-services', function () {
    return redirect()->route('vehicle.services');
});
Route::post('/vehicle-services', function () {
    return redirect()->route('vehicle.services');
});
Route::get('/vehicle-services/admin', function () {
    return redirect()->route('vehicle.services.admin');
});
Route::delete('/vehicle-services/{vehicleService}', function ($vehicleService) {
    return redirect()->route('vehicle.services.admin');
});
Route::get('/holiregistration', function () {
    return view('holi');
})->name('holi');
Route::post('/holiregistration', [App\Http\Controllers\HoliVehicleController::class, 'store'])->name('holi.store');
Route::get('/holiregistration/admin', [App\Http\Controllers\HoliVehicleController::class, 'admin'])->name('holi.admin');
Route::delete('/holiregistration/{holiVehicle}', [App\Http\Controllers\HoliVehicleController::class, 'destroy'])->name('holi.destroy');

Route::get('/holi', function () {
    return redirect()->route('holi');
});
Route::post('/holi', function () {
    return redirect()->route('holi');
});
Route::get('/holi/admin', function () {
    return redirect()->route('holi.admin');
});
Route::delete('/holi/{holiVehicle}', function ($holiVehicle) {
    return redirect()->route('holi.admin');
});
Route::get('/debug-holi', function () {
    return response()->json(App\Models\HoliVehicle::all(), 200, ['Content-Type' => 'application/json; charset=utf-8'], JSON_PRETTY_PRINT);
});

Route::get('/', function () {
    return view('home');
});
