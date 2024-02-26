<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\TransportList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TransportListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TransportList::class)
            ->assertStatus(200);
    }
}
