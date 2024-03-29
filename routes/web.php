<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SesiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'login'])->name('login');
    Route::post('/login', [SesiController::class, 'reqLogin'])->name('app.login');
    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register', [SesiController::class, 'reqRegister'])->name('app.register');
});


Route::get('/products', [ProductController::class, 'getProducts'])->name('getProducts');
