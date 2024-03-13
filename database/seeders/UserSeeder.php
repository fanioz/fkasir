<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role'     => 'admin',
        ]);
        DB::table('users')->insert([
            'name'     => 'kasir',
            'email'    => 'kasir@example.com',
            'password' => Hash::make('kasir'),
            'role'     => 'kasir',
        ]);
    }
}
