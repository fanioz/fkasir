<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //seed user
        $this->call([
            UserSeeder::class,
            //PelangganSeeder::class,
        ]);



        //seed jenis barang
        DB::table('tbl_jenis_barang')->insert([
            'nama_jenis'     => 'makanan',
        ]);
        DB::table('tbl_jenis_barang')->insert([
            'nama_jenis'     => 'minuman',
        ]);

        //seed data barang
        DB::table('tbl_barang')->insert([
            'id_jenis'       => 1,
            'nama_barang'    => 'rawon',
            'harga'          => 30000,
            'stok'           => 10,
        ]);
        DB::table('tbl_barang')->insert([
            'id_jenis'       => 1,
            'nama_barang'    => 'gulai',
            'harga'          => 40000,
            'stok'           => 10,
        ]);
        DB::table('tbl_barang')->insert([
            'id_jenis'       => 2,
            'nama_barang'    => 'kopi',
            'harga'          => 10000,
            'stok'           => 100,
        ]);
        DB::table('tbl_barang')->insert([
            'id_jenis'       => 2,
            'nama_barang'    => 'teh',
            'harga'          => 5000,
            'stok'           => 100,
        ]);

        //seed diskon
        DB::table('tbl_diskon')->insert([
            'diskon'         => 10,
        ]);

        //seed transaksi
        DB::table('tbl_transaksi')->insert([
            'id_diskon'      => 1,
            'id_user'        => 1,
            'id_barang'      => 1,
            'qty'            => 1,
            'total_harga'    => 30000,
            'status'         => 'lunas',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);
    }
}
