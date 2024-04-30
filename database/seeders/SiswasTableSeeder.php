<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $siswas = [
            ['nama' => 'Muhammad Alirizki', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'BMI', 'agama' => 'Islam', 'telepon' => '0827161514', 'email' => 'malirizki@gmail.com'],
            ['nama' => 'Alvin Purwo', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'rancamanyar', 'agama' => 'Islam', 'telepon' => '0890192814', 'email' => 'alvin@gmail.com'],
            ['nama' => 'Rafly Raditya Ray', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'permata kopo', 'agama' => 'Islam', 'telepon' => '0808261424', 'email' => 'rafly@gmail.com'],
            ['nama' => 'Ksatria Faikar Nasywaan', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'junti', 'agama' => 'Islam', 'telepon' => '0887625702', 'email' => 'ksatria@gmail.com'],
            ['nama' => 'Diki Darmawan', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'cibaduyut', 'agama' => 'Islam', 'telepon' => '0890816521', 'email' => 'diki@gmail.com'],
            ['nama' => 'Faiz N. Haq', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Sukamenak', 'agama' => 'Islam', 'telepon' => '0890865713', 'email' => 'faiz@gmail.com'],
            ['nama' => 'Robby Apriansyah', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'rancamanyar', 'agama' => 'Islam', 'telepon' => '0809845671', 'email' => 'robby@gmail.com'],
            ['nama' => 'Rasya Razaqa Setiawan', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'BMI', 'agama' => 'Islam', 'telepon' => '0809846713', 'email' => 'rasya@gmail.com'],
            ['nama' => 'Radin Al-khalifi', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'rancamanyar', 'agama' => 'Islam', 'telepon' => '0892824671', 'email' => 'radin@gmail.com'],
            ['nama' => 'Ghazwan Krisna Fauzan', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'rancamanyar', 'agama' => 'Islam', 'telepon' => '08091812731', 'email' => 'ghazwan@gmail.com']
    ];
        // masukkan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
