<?php

namespace Aaran\Common\Database\Factories;

use Aaran\Common\Models\Ledger;
use Illuminate\Database\Eloquent\Factories\Factory;

class LedgerFactory extends Factory
{
    protected $model = Ledger::class;
    public function definition(): array
    {
        return [
            'vname' => 'Ledger',
            'active_id' => 1
        ];
    }
}
