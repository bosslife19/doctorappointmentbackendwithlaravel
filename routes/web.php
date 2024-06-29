<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/doctor/dashboard', [DoctorController::class, 'loadDoctorDashboard'])
->name('doctor-dashboard')->middleware('doctor');



Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin/dashboard', [AdminController::class, 'loadAdminDashboard'])
->name('admin-dashboard');

Route::get('/admin/doctors', [AdminController::class, 'loadDoctorListing'])
->name('admin-doctors');

Route::get('/admin/create/doctor', [AdminController::class, 'loadDoctorForm']);
Route::get('/admin/create/specialty', [AdminController::class, 'loadSpecialtyForm']);
Route::get('/admin/specialties', [AdminController::class, 'loadAllSpecialties'])->name('admin-specialties');
Route::get('/edit/specialty/{id}', [AdminController::class, 'loadEditSpecialtyForm']);
});



Route::get('/patient/dashboard', [PatientController::class, 'loadPatientDashboard'])
->name('patient-dashboard')->middleware('patient');

require __DIR__ . '/auth.php';
