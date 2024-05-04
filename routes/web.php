<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Siswa;
use App\Models\Barang;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Barangg;
use App\Models\Transaksi;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di webapp saya<br>'
        . 'Laravel, emang keren';
});

// buat route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>Biodata</h1><hr>'
        . 'Nama : Ksatria Faikar Nasywaan<br>'
        . 'Tanggal & tempat lahir : 26 April 2007<br>'
        . 'Sekolah : SMK Assalaam Bandung<br>'
        . 'Kelas : XI RPL 1<br>'
        . 'Telepon : 085724568172<br>'
        . 'Agama : Islam<br>'
        . 'E-mail : faikarksatria@gmail.com';
});

// buat route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "lion", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

// route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

// tugas route parameter
Route::get('spekbadan/{nama}/{beratbadan}/{tinggibadan}', function ($a, $bb, $tb) {
    echo '<h2>BMI Calculator</h2><hr>';
    $tinggi_m = $tb / 100;
    $bmi = $bb / ($tinggi_m ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }

    return "Nama : $a<br>"
        . "Berat Badan : $bb KG<br>"
        . "Tinggi Badan : $tb CM<br>"
        . "Nlai BMI : $bmi<br>"
        . "Keterangan : $ket";
});


// Route optional parameter (ditandai dengan tanda tanya)
Route::get('/user/{nama?}', function($nama = "Waltuh") {
    echo '<h2>Route Optional Parameter</h2><hr>';
    return "Nama Pengguna : $nama";
}); 

// menampilkan data dari database
Route::get('/testmodel', function() {
    $data = Post::all();
    return $data;

});

Route::get('/barang', function () {
    $value = Barang::all();
    return $value;

});

Route::get('/siswa', function () {
    $siswa = Siswa::all();

    // $siswa = new Siswa;
    // $siswa ->nama = 'Mohammad Bisma Fazarahim';
    // $siswa ->jenis_kelamin = 'Mohammad Bisma Fazarahim';
    // $siswa->alamat = 'inhoftank';
    // $siswa->agama = 'Islam';
    // $siswa->telepon = '08183718291';
    // $siswa->email = 'bisma@gmail.com';
    // $siswa -> save();

    return view('tampil_siswa', compact('siswa'));
});

Route::get('/barang', function () {
    $barang = Barang::all();

    return view('tampil_barang', compact('barang'));
});

Route::get('/pengguna', function () {
    $pengguna = Pengguna::all();

    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/telepon', function () {
    $telepon = Telepon::all();

    return view('tampil_telepon', compact('telepon'));
});

Route::get('/merek', function () {
    $merek = Merek::all();

    return view('tampil_merek', compact('merek'));
});

Route::get('/produk', function () {
    $produk = Produk::all();

    return view('tampil_produk', compact('produk'));
});

Route::get('/pembeli', function () {
    $pembeli = Pembeli::all();

    return view('tampil_pembeli', compact('pembeli'));
});

Route::get('/barang2', function () {
    $barangg = Barangg::all();

    return view('tampil_barangg', compact('barangg'));
});

Route::get('/transaksi', function () {
    $transaksi = Transaksi::all();

    return view('tampil_transaksi', compact('transaksi'));
});


