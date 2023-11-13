<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\roleController;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('Service');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/detail', function () {
    return view('detail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/role',roleController::class);
Route::get('/role', [roleController::class, 'index'])->name('role.index');
Route::get('/role/create', [roleController::class, 'create'])->name('role.create');
Route::post('/role', [roleController::class, 'store'])->name('role.store');
Route::get('/role/{id}/edit', [roleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id}', [roleController::class, 'update'])->name('role.update');
Route::delete('/role/{id}', [roleController::class, 'destroy'])->name('role.destroy');