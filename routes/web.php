<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Webs\Home\Index::class)->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');

});

//Common
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/cities', App\Livewire\Common\CityList::class)->name('cities');

});
