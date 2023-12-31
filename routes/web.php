<?php

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

Route::get('/', \App\Livewire\Guest\Home::class)->name('home');

Route::get('/chat/{chatUuid?}', \App\Livewire\Guest\Chat::class)
    ->middleware('chat.authorized')
    ->name('chat.show');
