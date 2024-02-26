<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Webs\Home\Index::class)->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');

});

//Common
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('cities', App\Livewire\Common\CityList::class)->name('cities');
    Route::get('states', App\Livewire\Common\StateList::class)->name('states');

    Route::get('categories', App\Livewire\Common\CategoryList::class)->name('categories');

    Route::get('colours', App\Livewire\Common\ColourList::class)->name('colours');
    Route::get('sizes', App\Livewire\Common\SizeList::class)->name('sizes');

});
