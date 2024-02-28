<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/contacts', App\Livewire\Master\Contact\Index::class)->name('contacts');
    Route::get('/contacts/{id}/upsert', App\Livewire\Master\Contact\Upsert::class)->name('contacts.upsert');
    Route::get('/products', App\Livewire\Master\Product\Index::class)->name('products');
    Route::get('/companies', App\Livewire\Master\Product\Index::class)->name('companies');

});
