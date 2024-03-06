<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Webs\Home\Index::class)->name('home');
Route::get('/service', App\Livewire\Webs\Home\Service::class)->name('service');
Route::get('/about', App\Livewire\Webs\Home\About::class)->name('about');
Route::get('/contact', App\Livewire\Webs\Home\Contact::class)->name('contact');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');

});
