<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/orders', App\Livewire\Order\Index::class)->name('orders');

});
