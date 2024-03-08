<?php

namespace Aaran\Orders\Database\Factories;

use Aaran\Orders\Models\Style;
use Illuminate\Database\Eloquent\Factories\Factory;

class StyleFactory extends Factory
{
    protected $model = Style::class;
    public function definition(): array
    {
        return [
            'vname' => $this->faker->name(),
            'active_id' => '1',
        ];
    }
}
