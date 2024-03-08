<?php

namespace Database\Seeders;

use Aaran\Common\Database\Seeders\CitySeeder;
use Aaran\Common\Database\Seeders\ColourSeeder;
use Aaran\Common\Database\Seeders\CountrySeeder;
use Aaran\Common\Database\Seeders\DepartmentSeeder;
use Aaran\Common\Database\Seeders\HsncodeSeeder;
use Aaran\Common\Database\Seeders\LedgerSeeder;
use Aaran\Common\Database\Seeders\PincodeSeeder;
use Aaran\Common\Database\Seeders\ReceipttypeSeeder;
use Aaran\Common\Database\Seeders\SizeSeeder;
use Aaran\Common\Database\Seeders\StateSeeder;
use Aaran\Master\Database\Seeders\CompanySeeder;
use Aaran\Master\Database\Seeders\ContactSeeder;
use Aaran\Master\Database\Seeders\ProductSeeder;
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

        User::create([
            'name' => 'divya',
            'email' => 'divya@aaran.org',
            'password' => bcrypt('123456789'),
            'email_verified_at'=> now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Jagadeesh',
            'email' => 'jagadeesh@aaran.org',
            'password' => bcrypt('123456789'),
            'email_verified_at'=> now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'kalaiarasan',
            'email' => 'kalai@aaran.org',
            'password' => bcrypt('123456789'),
            'email_verified_at'=> now(),
            'remember_token' => Str::random(10)
        ]);

        CitySeeder::run();
        StateSeeder::run();
        CountrySeeder::run();
        PincodeSeeder::run();

        HsncodeSeeder::run();
        ColourSeeder::run();
        SizeSeeder::run();

        LedgerSeeder::run();
        ReceipttypeSeeder::run();

        DepartmentSeeder::run();

        CompanySeeder::run();
        DefaultCompanySeeder::run();

        ContactSeeder::run();
        ProductSeeder::run();
    }
}
