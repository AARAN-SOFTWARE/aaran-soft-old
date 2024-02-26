<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\CountryList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CountryListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CountryList::class)
            ->assertStatus(200);
    }
}
