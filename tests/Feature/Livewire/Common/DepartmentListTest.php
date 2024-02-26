<?php

namespace Tests\Feature\Livewire\Common;

use App\Livewire\Common\DepartmentList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DepartmentListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(DepartmentList::class)
            ->assertStatus(200);
    }
}
