<?php

// database/seeders/RolesTableSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrator with full access'
        ]);
        
        Role::create([
            'name' => 'caregiver',
            'description' => 'Caregiver role'
        ]);
        
        Role::create([
            'name' => 'user',
            'description' => 'Regular user/client'
        ]);
    }
}
