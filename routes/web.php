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
Route::get('/vehicleregistration/data', [VehicleServiceController::class, 'index'])->name('vehicle.services.admin');
Route::delete('/vehicleregistration/{vehicleService}', [VehicleServiceController::class, 'destroy'])->name('vehicle.services.destroy');
Route::get('/vehicleregistration/export', [VehicleServiceController::class, 'export'])->name('export.vehicle.services');

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
Route::get('/vehicleregistration/admin', function () {
    return redirect()->route('vehicle.services.admin');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/holicelebration', function () {
    return view('holicelebration');
});
Route::post('/holicelebration', [App\Http\Controllers\HoliCelebrationController::class, 'store'])->name('holicelebration.store');
Route::get('/holicelebration/data', [App\Http\Controllers\HoliCelebrationController::class, 'index'])->name('holicelebration.data');
Route::delete('/holicelebration/{holiCelebration}', [App\Http\Controllers\HoliCelebrationController::class, 'destroy'])->name('holicelebration.destroy');
Route::get('/holicelebration/screenshot/{holiCelebration}', [App\Http\Controllers\HoliCelebrationController::class, 'screenshot'])->name('holicelebration.screenshot');
Route::get('/holicelebration/export', [App\Http\Controllers\HoliCelebrationController::class, 'export'])->name('holicelebration.export');
Route::get('/holicelebration1', function () {
    return view('holicelebration1');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/cricket/gallery', function () {
    return view('gallery');
});