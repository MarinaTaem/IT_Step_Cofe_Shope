<?php

// database/seeders/RoleSeeder.php
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['role' => 'admin']);
        Role::create(['role' => 'user']);
    }
}
