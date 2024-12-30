<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            [
                'id' => 1,
                'name' => 'Administration',
                'description' => 'Administration Department'
            ],
            [
                'id' => 2,
                'name' => 'Finance',
                'description' => 'Finance Department'
            ],
            [
                'id' => 3,
                'name' => 'HR',
                'description' => 'Human Resources Department'
            ],
            [
                'id' => 4,
                'name' => 'IT',
                'description' => 'Information Technology Department'
            ],
            [
                'id' => 5,
                'name' => 'Marketing',
                'description' => 'Marketing Department'
            ],
            [
                'id' => 6,
                'name' => 'Operations',
                'description' => 'Operations Department'
            ],
            [
                'id' => 7,
                'name' => 'Sales',
                'description' => 'Sales Department'
            ]
        ];

        $existingDepartments = Department::whereIn('id', array_column($departments, 'id'))->pluck('id')->toArray();

        foreach ($departments as $department) {
            if (!in_array($department['id'], $existingDepartments)) {
                Department::create([
                    'id' => $department['id'],
                    'name' => $department['name'],
                    'description' => $department['description'],
                ]);
            }
        }
    }
}
