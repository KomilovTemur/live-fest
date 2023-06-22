<?php

use App\Http\Controllers\admin\adminContoller;
use App\Http\Controllers\frontEndContoller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FestDate;

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

Route::get('/', [frontEndContoller::class, 'index'])->name('index');
Route::get('/ticket', [frontEndContoller::class, 'ticket'])->name('ticket');
Route::post('/contact-form', [frontEndContoller::class, 'contactForm'])->name('contactForm');
Route::post('/buy-tickey', [frontEndContoller::class, 'buyTicket'])->name('buyTicket');

// ->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [adminContoller::class, 'index'])->name('dashboard');
    Route::resource('festDate', FestDate::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
