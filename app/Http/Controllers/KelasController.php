<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();
        $walikelas = Guru::all();
        return view('admin.kelas.data', compact('kelas', 'walikelas'));
    }

    public function tambah(Request $request){
        Kelas::create($request->all());
        return redirect('/Kelas');
    }
}
