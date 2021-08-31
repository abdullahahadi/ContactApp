<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('layouts.app');
});

Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/create-contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
Route::get('/contact/{id}', [ContactController::class,'edit'])->name('contact.edit');
Route::post('/contact/{id}', [ContactController::class,'update'])->name('contact.update');
Route::get('/contact-delete/{id}', [ContactController::class,'destroy'])->name('contact.delete');
Route::get('/contact-show/{id}', [ContactController::class,'show'])->name('contact.show');
Route::get('/contact-history/{id}', [ContactController::class,'history'])->name('contact.history');