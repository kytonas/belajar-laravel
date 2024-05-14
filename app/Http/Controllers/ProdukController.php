<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    public function show()
    {
        $produk = Produk::all();

        return view('produks.index2', compact('produk'));

    }

    public function showById($id){
        $produk = Produk::findOrFail($id);
        return view('produks.show2', compact('produk'));
    }
}

