<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

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


Route::get('/', [MessageController::class, 'index'])->name('form.index');
Route::get('/create-message', [MessageController::class, 'create'])->name('form.create');
Route::post('/create-message', [MessageController::class, 'store'])->name('form.store');
Route::get('/edit-message/{id}', [MessageController::class, 'edit'])->name('form.edit');
Route::post('/edit-message/{id}', [MessageController::class, 'update'])->name('form.update');
Route::get('/delete-message/{id}', [MessageController::class, 'destroy'])->name('form.destroy');
Route::get('/message/{id}', [MessageController::class, 'show'])->name('form.show');