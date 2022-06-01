<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'map'])->name('map');
Route::get('save-location/{lat}/{lng}', [HomeController::class, 'save'])->name('save-location');
Route::get('save-data', [HomeController::class, 'save_data'])->name('save-data');
Route::post('save-info', [HomeController::class, 'save_info'])->name('save-info');

Route::get('admin-login', [UserController::class, 'admin_login'])->name('admin-login');
Route::post('save-login', [UserController::class, 'save_login'])->name('save-login');
Route::get('list', [UserController::class, 'list'])->name('list');