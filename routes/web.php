<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Awal;
use App\Http\Controllers\Login;

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

Route::get('/about_laravel', function () {
    return view('welcome');
});

Route::get('/coba', function() {
    return 'Mulai Laravel';
});

Route::get('/', [Awal::class, 'fungsi']);

Route::get('/login', [Login::class, 'index']);