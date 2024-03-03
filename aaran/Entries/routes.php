<?php

use Illuminate\Support\Facades\Route;

//Entries
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/sales', App\Livewire\Entries\Sales\Index::class)->name('sales');
    Route::get('/sales/{id}/upsert', App\Livewire\Entries\Sales\Upsert::class)->name('sales.upsert');

    Route::get('/purchases', App\Livewire\Entries\Sales\Index::class)->name('purchases');
    Route::get('/purchases/{id}/upsert', App\Livewire\Entries\Sales\Upsert::class)->name('purchases.upsert');

    Route::get('/receipts', App\Livewire\Entries\Sales\Index::class)->name('receipts');
    Route::get('/receipts/{id}/upsert', App\Livewire\Entries\Sales\Upsert::class)->name('receipts.upsert');

    Route::get('/payments', App\Livewire\Entries\Sales\Index::class)->name('payments');
    Route::get('/payments/{id}/upsert', App\Livewire\Entries\Sales\Upsert::class)->name('payments.upsert');

});
