<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek' => 'Honda'],
            ['nama_merek' => 'Toyota'],
            ['nama_merek' => 'Mitsubishi']
    ];
        // masukkan data ke database
        DB::table('mereks')->insert($mereks);
    }
}
