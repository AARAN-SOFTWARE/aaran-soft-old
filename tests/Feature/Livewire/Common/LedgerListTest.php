<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\LedgerList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LedgerListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(LedgerList::class)
            ->assertStatus(200);
    }
}
