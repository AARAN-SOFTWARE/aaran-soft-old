<?php

namespace Tests\Feature\Livewire\Entries\Sales;

use App\Livewire\Entries\Sales\Upsert;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class UpsertTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Upsert::class)
            ->assertStatus(200);
    }
}
