<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Webs\Home\Index::class)->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');

});

//common
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/cities', App\Livewire\Common\CityList::class)->name('cities');
    Route::get('/states', App\Livewire\Common\StateList::class)->name('states');
    Route::get('/pincodes', App\Livewire\Common\PincodeList::class)->name('pincodes');
    Route::get('/countries', App\Livewire\Common\CountryList::class)->name('countries');
    Route::get('/hsncodes', App\Livewire\Common\HsncodeList::class)->name('hsncodes');
    Route::get('/categories', App\Livewire\Common\CategoryList::class)->name('categories');
    Route::get('/transports', App\Livewire\Common\TransportList::class)->name('transports');
    Route::get('/departments', App\Livewire\Common\DepartmentList::class)->name('departments');
    Route::get('/ledgers', App\Livewire\Common\LedgerList::class)->name('ledgers');
    Route::get('/sizes', App\Livewire\Common\SizeList::class)->name('sizes');
    Route::get('/colours', App\Livewire\Common\ColourList::class)->name('colours');
});


//Master
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/contacts', App\Livewire\Common\CityList::class)->name('contacts');
    Route::get('/products', App\Livewire\Master\Product\Index::class)->name('products');
    Route::get('/companies', App\Livewire\Common\PincodeList::class)->name('companies');
    Route::get('products/{id}/upsert', App\Livewire\Master\Product\Upsert::class)->name('products.upsert');
});
