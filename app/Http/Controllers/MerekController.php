<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;

class MerekController extends Controller
{
    public function getMerek()
    {
        $merek = Merek::all();

        return view('mereks.index3', compact('merek'));

    }

    public function getMerekById($id){
        $merek = Merek::findOrFail($id);
        return view('mereks.show3', compact('merek'));
    }
}
