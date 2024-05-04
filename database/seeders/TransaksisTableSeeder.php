<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => '3', 'tanggal' => '2024-01-31'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => '5', 'tanggal' => '2024-03-25'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => '9', 'tanggal' => '2024-04-26'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => '10', 'tanggal' => '2024-05-26'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => '8', 'tanggal' => '2024-03-04'],
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => '13', 'tanggal' => '2024-02-28']
    ];
        // masukkan data ke database
        DB::table('transaksis')->insert($transaksis);
    }
}
