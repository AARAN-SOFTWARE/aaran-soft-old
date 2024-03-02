<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/sales', App\Livewire\Entries\Sales\Index::class)->name('sales');
    Route::get('/sales/{id}/upsert', App\Livewire\Entries\Sales\Upsert::class)->name('sales.upsert');


});
