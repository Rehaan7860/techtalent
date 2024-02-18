<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All Jobs
Route::get('/', [JobController::class, 'index']);

// Show Create Form
Route::get('job/create', [JobController::class, 'create'])->middleware('auth');

// Single Job
Route::post('/job', [JobController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

// Edit Submit to Update
Route::put('/job/{job}', [JobController::class, 'update'])->middleware('auth');

// Delete Job
Route::delete('/job/{job}', [JobController::class, 'destroy'])->middleware('auth');

// Single Job
Route::get('job/{job}', [JobController::class, 'show'] );

// Show Register Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Manage Job Posts
Route::get('/jobs/manage', [JobController::class, 'manage'])->middleware('auth');
