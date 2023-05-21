<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primarykey = 'id';
    protected $fillable = ['nis', 'gender', 'lahir', 'alamat', 'user_id', 'kelas_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    // public static function getSiswaData()
    // {
    // return self::join('users', 'users.id', '=', 'siswas.user_id')
    //         ->select('users.name', 'users.email')
    //         ->get();
    // }

}
