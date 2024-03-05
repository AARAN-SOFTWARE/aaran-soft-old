<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\Colour;
use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    public static function run(): void
    {
        Colour::create([]);

    }
}
