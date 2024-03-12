<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\ReceipttypeList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ReceipttypeListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ReceipttypeList::class)
            ->assertStatus(200);
    }
}
