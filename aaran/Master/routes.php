<?php

use Illuminate\Support\Facades\Route;

//Common
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//    Route::get('cities', App\Livewire\Master\Contact\Index::class)->name('cities');
    Route::get('products', App\Livewire\Master\Product\Index::class)->name('products');
});
