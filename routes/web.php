<?php

use App\Http\Controllers\SuratJalanController;
use App\Models\suratJalan;
use Illuminate\Support\Facades\Route;

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



Route::resource('suratJalan', SuratJalanController::class );

Route::get('/', function () {
    return view('home.index', [
        "title" => "Home"
    ]);
});
