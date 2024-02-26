<?php

namespace Aaran\Common\Tests;

use Aaran\Common\Models\Bank;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BankTest extends TestCase
{
    use DatabaseMigrations;

    public function test_bank_table(): void
    {
        $bank = Bank::factory()->create();

        $this->assertEquals('STATE BANK OF INDIA', actual: $bank->vname);
        $this->assertEquals('1', actual: $bank->active_id);


    }
}
