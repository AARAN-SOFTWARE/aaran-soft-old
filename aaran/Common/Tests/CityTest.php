<?php

namespace Aaran\Common\Tests;

use Aaran\Common\Models\City;
use App\Livewire\Common\CityList;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CityTest extends TestCase
{
    use DatabaseMigrations;

    public function test_city_table(): void
    {
        $city = City::factory()->create();

        $this->assertEquals('City', actual: $city->vname);
        $this->assertEquals('1', actual: $city->active_id);
    }

    public function test_Create()
    {
        \Livewire::test(CityList::class)
            ->set(['vname' => 'sundar city', 'active_id' => '1'])
            ->call('save');

        $obj = City::find(1);

        $this->assertEquals('Sundar city', $obj->vname);
    }
}
