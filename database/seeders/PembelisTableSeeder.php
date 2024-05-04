<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $pembelis = [
            ['nama_pembeli' => 'M. Bisma Fazarahim', 'jenis_kelamin' => 'Laki-laki'],
            ['nama_pembeli' => 'Iyas Bagus Arya Putra', 'jenis_kelamin' => 'Laki-laki'],
            ['nama_pembeli' => 'M. Alirizki', 'jenis_kelamin' => 'Laki-laki']
    ];
        // masukkan data ke database
        DB::table('pembelis')->insert($pembelis);
    }
}
