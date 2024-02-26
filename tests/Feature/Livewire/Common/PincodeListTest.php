<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\PincodeList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PincodeListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(PincodeList::class)
            ->assertStatus(200);
    }
}
