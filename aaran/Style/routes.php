<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/styles', App\Livewire\Style\Index::class)->name('Styles');

});
