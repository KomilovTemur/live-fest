<?php

use App\Http\Controllers\frontEndContoller;
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

Route::get('/', [frontEndContoller::class, 'index'])->name('index');
Route::get('/ticket', [frontEndContoller::class, 'ticket'])->name('ticket');
Route::post('/contact-form', [frontEndContoller::class, 'contactForm'])->name('contactForm');
Route::post('/buy-tickey', [frontEndContoller::class, 'buyTicket'])->name('buyTicket');
