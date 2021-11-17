<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\VolunteerController;

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

Route::get('/', function () {
//return view('pages.home');
 return view('admin.master');
    
});

Route::get('/crisis',[AdminController::class, 'Crisis']);
Route::get('/donor',[AdminController::class,'Donation']);
Route::get('/adminLogin',[AdminController::class,'AdminLogin']);
Route::get('/donorLogin',[DonorController::class,'DonorLogin']);
Route::get('/registration',[DonorController::class,'Registration']);
Route::get('/donation',[DonorController::class,'Donation']);
Route::get('/registration2',[VolunteerController::class,'VolunteerLogin']);
Route::get('/distribution',[VolunteerController::class,'Distribution']);
Route::get('/volunteerLogin',[VolunteerController::class,'VolunteerLogin']);
Route::get('/create/crisis',[AdminController::class,'CreateCrisis']);
Route::post('/crisis/store',[AdminController::class,'CrisisStore'])->name('crisis.store');
Route::get('/create/donation',[DonorController::class,'CreateDonation'])->name('create.donation');