<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BaranggsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baranggs = [
            ['nama_barang' => 'Indomie Ayam Bawang', 'harga' => 3000, 'stok' => 54],
            ['nama_barang' => 'Ultra Milk', 'harga' => 6500, 'stok' => 61],
            ['nama_barang' => 'Le Minerale', 'harga' => 2500, 'stok' => 78]
    ];
        // masukkan data ke database
        DB::table('baranggs')->insert($baranggs);
    }
}
