<?php

namespace Aaran\Common\Database\Factories;

use Aaran\Common\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;
    public function definition(): array
    {
        return [
            'vname' => 'Department',
            'active_id' => 1
        ];
    }
}
