<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::all();
        return view('admin.guru.data', compact('guru'));
    }

    public function tambah(){
        return view('admin.guru.tambah');
    }

    public function inputtambah(Request $request){
        $request->validate([
            'nama_guru' => 'required',
            'jenkel' => 'required',
            'alamat_guru' => 'required',
        ]);
        Guru::create($request->all());
        return redirect('/Guru');
    }
}
