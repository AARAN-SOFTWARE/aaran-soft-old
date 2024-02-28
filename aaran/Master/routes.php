<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/contacts', App\Livewire\Master\Product\Index::class)->name('contacts');
    Route::get('/products', App\Livewire\Master\Product\Index::class)->name('products');
    Route::get('products/{id}/upsert', App\Livewire\Master\Product\Upsert::class)->name('products.upsert');
    Route::get('/companies', App\Livewire\Master\Product\Index::class)->name('companies');

});
