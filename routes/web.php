<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Webs\Home\Index::class)->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');

});

//Common
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/cities', App\Livewire\Common\CityList::class)->name('cities');
    Route::get('/countries', App\Livewire\Common\CountryList::class)->name('countries');
    Route::get('pincodes', App\Livewire\Common\PincodeList::class)->name('pincodes');
    Route::get('hsncodes', App\Livewire\Common\HsncodeList::class)->name('hsncodes');
    Route::get('departments', App\Livewire\Common\DepartmentList::class)->name('departments');
    Route::get('ledgers', App\Livewire\Common\LedgerList::class)->name('ledgers');

});
