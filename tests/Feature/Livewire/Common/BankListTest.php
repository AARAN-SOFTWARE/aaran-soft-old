<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\BankList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class BankListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(BankList::class)
            ->assertStatus(200);
    }
}
