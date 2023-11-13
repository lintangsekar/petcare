<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;

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

Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/service',serviceController::class);
Route::get('/service', [serviceController::class, 'index'])->name('service.index');
Route::get('/service/create', [serviceController::class, 'create'])->name('service.create');
Route::post('/service', [serviceController::class, 'store'])->name('service.store');
Route::get('/service/{id}/edit', [serviceController::class, 'edit'])->name('service.edit');
Route::put('/service/{id}', [serviceController::class, 'update'])->name('service.update');
Route::delete('/service/{id}', [serviceController::class, 'destroy'])->name('service.destroy');