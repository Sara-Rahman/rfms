<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;

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
    return view('admin.master');
});

Route::get('/admin',[AdminController::class, 'Crisis']);
Route::get('/registration',[DonorController::class,'Donation']);
// Route::get('/registration',[DonorController::class,'Registration']);