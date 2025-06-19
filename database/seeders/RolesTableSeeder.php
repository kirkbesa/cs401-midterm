<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'Teacher', 'description' => 'Handles courses and students'],
            ['role_name' => 'Student', 'description' => 'Attends courses and takes exams'],
            ['role_name' => 'Admin', 'description' => 'Manages the system'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
