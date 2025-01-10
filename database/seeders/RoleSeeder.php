<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(["name" => "admin"]);
        Role::create(["name" => "manager"]);
        Role::create(["name" => "supervisor"]);
        Role::create(["name" => "cashier"]);
        Role::create(["name" => "warehouse"]);
        Role::create(["name" => "owner"]);
<<<<<<< HEAD
=======

        
>>>>>>> f8ac8ce8e8f819d2b718d71ff03b81e67d16eb90
    }
}
