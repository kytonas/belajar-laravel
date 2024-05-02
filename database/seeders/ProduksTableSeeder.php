<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $produks = [
            ['nama_produk' => 'Accord', 'jumlah' => '54', 'tanggal_produksi' => '1997-04-25', 'id_merek' => 1],
            ['nama_produk' => 'Corolla', 'jumlah' => '25', 'tanggal_produksi' => '1996-03-26', 'id_merek' => 2],
            ['nama_produk' => 'Eterna', 'jumlah' => '50', 'tanggal_produksi' => '1998-02-27', 'id_merek' => 3],
            ['nama_produk' => 'CR-V', 'jumlah' => '120', 'tanggal_produksi' => '2024-01-21', 'id_merek' => 1],
            ['nama_produk' => 'Fortuner', 'jumlah' => '150', 'tanggal_produksi' => '2023-06-01', 'id_merek' => 2],
            ['nama_produk' => 'Pajero Sport', 'jumlah' => '170', 'tanggal_produksi' => '2022-12-21', 'id_merek' => 3]
    ];
        // masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
