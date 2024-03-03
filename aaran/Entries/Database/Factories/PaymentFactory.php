<?php

namespace Aaran\Entries\Database\Factories;

use Aaran\Entries\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'vname' => $this->faker->word(),
            'active_id' => $this->faker->word(),
        ];
    }
}
