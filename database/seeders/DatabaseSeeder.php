<?php

namespace Database\Seeders;

use Aaran\Common\Models\City;
use Aaran\Common\Models\Hsncode;
use Aaran\Common\Models\Pincode;
use Aaran\Common\Models\Size;
use Aaran\Common\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'sundar',
            'email' => 'sundar@sundar.com',
            'password' => bcrypt('kalarani'),
            'email_verified_at'=> now(),
            'remember_token' => Str::random(10)
        ]);
        State::create([
            'vname' => 'Tamilnadu',
            'state_code'=>'01',
            'active_id' => '1'
        ]);
        Size::create([
            'vname' => 'S',
            'active_id' => '1'
        ]);

        Size::create([
            'vname' => 'M',
            'active_id' => '1'
        ]);

        Size::create([
            'vname' => 'L',
            'active_id' => '1'
        ]);

        Size::create([
            'vname' => 'XL',
            'active_id' => '1'
        ]);
        Pincode::create([
            'vname' => '641602',
            'active_id' => '1'
        ]);
        Hsncode::create([
            'vname' => 'Hsncode',
            'active_id' => '1'
        ]);
        City::create([
            'vname' => 'Tiruppur',
            'active_id' => '1'
        ]);

        City::create([
            'vname' => 'Coimbatore',
            'active_id' => '1'
        ]);

        City::create([
            'vname' => 'Erode',
            'active_id' => '1'
        ]);

        City::create([
            'vname' => 'Chennai',
            'active_id' => '1'
        ]);

        City::create([
            'vname' => 'Madurai',
            'active_id' => '1'
        ]);

    }
}
