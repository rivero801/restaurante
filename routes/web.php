<?php

use App\Http\Controllers\direccionesController;
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

Route::get('/',[direccionesController::class, 'inicio'])->name('index');
Route::get('/contacto',[direccionesController::class, 'contact'])->name('contact');
Route::get('/reservar',[direccionesController::class, 'reservation'])->name('reservation');
Route::get('/menu',[direccionesController::class, 'menu'])->name('menu');
Route::get('/reseñas',[direccionesController::class, 'reseñas'])->name('testimonial');

