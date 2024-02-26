<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\HsncodeList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class HsncodeListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(HsncodeList::class)
            ->assertStatus(200);
    }
}
