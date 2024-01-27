<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UC1Controller;
use App\Http\Controllers\UC2Controller;
use App\Http\Controllers\UC3Controller;
use App\Http\Controllers\UC4Controller;
use App\Http\Controllers\UC5Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin', [MainController::class, 'index']);
Route::get('/', [MainController::class, 'web']);
Route::get('/doctors', [DoctorsController::class, 'index']);
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/Under-Construction-2', [UC1Controller::class, 'index']);
Route::get('/medicine', [UC2Controller::class, 'index']);
Route::get('/lab', [UC3Controller::class, 'index']);
Route::get('/Under-Construction-5', [UC4Controller::class, 'index']);
Route::get('/Under-Construction-6', [UC5Controller::class, 'index']);
