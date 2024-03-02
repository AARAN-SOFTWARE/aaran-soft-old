<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

//    Route::get('/sales', App\Livewire\Master\Contact\Index::class)->name('sales');
//    Route::get('/sales/{id}/upsert', App\Livewire\Master\Contact\Upsert::class)->name('sales.upsert');


});
