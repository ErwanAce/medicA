<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

// Public
Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::get('/404-error', [ServiceController::class, 'error'])->name('404-error');
Route::get('/about', [ServiceController::class, 'about'])->name('about');
Route::get('/contact', [ServiceController::class, 'contact'])->name('contact');
Route::get('/doctor/appointment/{id}', [ServiceController::class, 'appointmentView'])->name('doctor.appointment');
Route::post('/appointment', [ServiceController::class, 'appointment'])->name('appointment');
Route::get('/list-doctors', [ServiceController::class, 'listDoctors'])->name('list-doctors');
Route::get('/doctor/agenda/{id}', [ServiceController::class, 'agenda'])->name('doctor.agenda');
Route::get('/doctor/info/{id}', [ServiceController::class, 'doctorInfo'])->name('doctor.info');

// Auth
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
Route::get('/doctor', [DoctorController::class, 'dashboard'])->name('doctor');
