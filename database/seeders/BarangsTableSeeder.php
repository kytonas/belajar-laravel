<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $barangs = [
            ['nama_barang' => 'Acer Aspire 3', 'jumlah' => 25],
            ['nama_barang' => 'Asus Zenbook Duo', 'jumlah' => 30],
            ['nama_barang' => 'Axioo Pongo', 'jumlah' => 35]
    ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
