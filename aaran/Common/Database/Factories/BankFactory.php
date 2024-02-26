<?php

namespace Aaran\Common\Database\Factories;

use Aaran\Common\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankFactory extends Factory
{
    protected $model = Bank::class;
    public function definition(): array
    {
        return [
            'vname' => 'STATE BANK OF INDIA',
            'active_id' => 1
        ];
    }
}
