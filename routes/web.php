<?php

use App\Http\Controllers\AddNewTodoController;
use App\Http\Controllers\AuthCotroller;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthCotroller::class,'index'])->name('auth');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [AuthCotroller::class,'dashboard'])->name('dashboard');
});

Route::controller(AddNewTodoController::class)
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function (){
        Route::get('/Add-Todo','create')->name('Todo');
    });
