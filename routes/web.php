<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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
});

Route::get('/cricket', function () {
        $teams = \App\Models\Team::all();
        return view('cricket', compact('teams'));
});
Route::post('/cricket/join', [RegistrationController::class, 'storeTeam'])->name('team.join');
Route::get('/cricket/team-members', [RegistrationController::class, 'getTeamMembers'])->name('team.members');
Route::get('/', function () {
    return view('home');
});
