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



        // DB::table('products')->insert([
        //     ['name' => 'Kopi Kapal Api',    'price' => 10000, 'stock'=> 1 , 'created_at'=> now(), 'updated_at'=> now()],
        //     ['name' => 'Kopi Creamy Latte', 'price' => 20000, 'stock' => 1, 'created_at'=> now(), 'updated_at'=> now()],
        //     ['name' => 'Kopi Gula Aren',    'price' => 50000, 'stock' => 1, 'created_at'=> now(), 'updated_at'=> now()],
        //     ['name' => 'Kopi Good Day',     'price' => 30000, 'stock' => 1, 'created_at'=> now(), 'updated_at'=> now()],
        //     ['name' => 'Kopi Indocafe',     'price' => 40000, 'stock'=> 1 , 'created_at'=> now(), 'updated_at'=> now()],
        // ]);




        $this->call([RoleSeeder::class, UserSeeder::class ]);
    }
}
