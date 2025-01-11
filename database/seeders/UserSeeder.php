<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Traits\Role;
// use Spatie\Permission\\Role;


class UserSeeder extends Seeder
{
    public function run()
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('admin_pass'),
        //     'role' => 'admin'
        // ])->assignRole("admin");

        // User::create([
        //     'name' => 'Manager Toko',
        //     'email' => 'manager@example.com',
        //     'password' => Hash::make('manager_pass'),
        //     'role' => 'manager'
        // ])->assignRole("manager");

        // User::create([
        //     'name' => 'Supervisor',
        //     'email' => 'supervisor@example.com',
        //     'password' => Hash::make('supervisor_pass'),
        //     'role' => 'supervisor'
        // ])->assignRole("supervisor");

        // User::create([
        //     'name' => 'Pegawai Kasir',
        //     'email' => 'kasir@example.com',
        //     'password' => Hash::make('kasir_pass'),
        //     'role' => 'kasir'
        // ])->assignRole("cashier");

        // User::create([
        //     'name' => 'Pegawai Gudang',
        //     'email' => 'gudang@example.com',
        //     'password' => Hash::make('gudang_pass'),
        //     'role' => 'warehouse'
        // ])->assignRole("warehouse");

        // User::create([
        //     'name' => 'Owner',
        //     'email' => 'owner@example.com',
        //     'password' => Hash::make('owner_pass'),
        //     'role' => 'owner'
        // ])->assignRole("owner");
        User::create([
            'name' => 'pembeli',
            'email' => 'pembeli@example.com',
            'password' => Hash::make('pembeli_pass'),
            'role' => 'pembeli'
        ])->assignRole("pembeli");
    }
}
