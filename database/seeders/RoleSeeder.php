<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'department_id' => 1,
                'name' => 'Super Admin',
                'description' => 'Super Admin Role'
            ],
            [
                'id' => 2,
                'department_id' => 1,
                'name' => 'Admin',
                'description' => 'Admin Role'
            ],
            [
                'id' => 3,
                'department_id' => 1,
                'name' => 'HR',
                'description' => 'HR Role'
            ],
            [
                'id' => 4,
                'department_id' => 1,
                'name' => 'IT',
                'description' => 'IT Role'
            ],                           
        ];
    }
}
