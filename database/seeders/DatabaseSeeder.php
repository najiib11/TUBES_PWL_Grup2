<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        DB::table('products')->insert([
            ['name' => 'Kopi Kapal Api',    'price' => 10000, 'stock'=> 1 , 'created_at'=> now(), 'updated_at'=> now()],
            ['name' => 'Kopi Creamy Latte', 'price' => 20000, 'stock' => 1, 'created_at'=> now(), 'updated_at'=> now()],
            ['name' => 'Kopi Gula Aren',    'price' => 50000, 'stock' => 1, 'created_at'=> now(), 'updated_at'=> now()],
            ['name' => 'Kopi Good Day',     'price' => 30000, 'stock' => 1, 'created_at'=> now(), 'updated_at'=> now()],
            ['name' => 'Kopi Indocafe',     'price' => 40000, 'stock'=> 1 , 'created_at'=> now(), 'updated_at'=> now()],
        ]);
        DB::table('users')->insert([
            ['name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin_pass'),
            'role' => 'admin'],



            ['name' => 'Manager Toko',
            'email' => 'manager@example.com',
            'password' => Hash::make('manager_pass'),
            'role' => 'manager'],



            ['name' => 'Supervisor',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('supervisor_pass'),
            'role' => 'supervisor'],



           [ 'name' => 'Pegawai Kasir',
            'email' => 'kasir@example.com',
            'password' => Hash::make('kasir_pass'),
            'role' => 'cashier'],



            ['name' => 'Pegawai Gudang',
            'email' => 'gudang@example.com',
            'password' => Hash::make('gudang_pass'),
            'role' => 'warehouse'],



            ['name' => 'Kepala Toko',
            'email' => 'kepala_toko@example.com',
            'password' => Hash::make('kepala_pass'),
            'role' => 'kepala_toko'],
        ]);
    }
}
