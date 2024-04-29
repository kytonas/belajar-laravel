<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
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
