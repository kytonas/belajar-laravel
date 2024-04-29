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
            ['nama' => 'Acer Aspire 3', 'jumlah' => 25],
            ['nama' => 'Asus Zenbook Duo', 'jumlah' => 30],
            ['nama' => 'Axioo Pongo', 'jumlah' => 35]
    ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
