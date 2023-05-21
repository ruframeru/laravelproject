<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class siswaController extends Controller
{
    public function index(){
        // $siswa = Siswa::all();
        // $users = User::where('role', 'siswa')->get(); 
        // return view('siswa.index', compact('siswa', 'users'));
        $datasiswa = User::where('role', 'siswa')->get();
        return view('admin.siswa.data', compact('datasiswa'));
    }

    public function edit($id){
        $siswa = Auth::user()->siswa;

        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Auth::user()->siswa;

        // Validasi dan perbarui data siswa
        $request->validate([
            'kelas' => 'required',
            'nis' => 'required',
        // Tambahkan validasi lain sesuai kebutuhan
        ]);

        $siswa->kelas = $request->kelas;
        $siswa->nis = $request->nis;
        // Update kolom lain yang diinginkan

        $siswa->save();

        return redirect()->route('siswa.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
