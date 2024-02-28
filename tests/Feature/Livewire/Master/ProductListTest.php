<?php

namespace Tests\Feature\Livewire\Master;

use App\Livewire\Master\ProductList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProductListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ProductList::class)
            ->assertStatus(200);
    }
}
