<?php

use BaconQrCode\Encoder\QrCode;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facade;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('qr_code',[App\Http\Controllers\HomeController::class,'save_qr'])->name('qr_code');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
