<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primarykey = 'id';
    protected $fillable = ['nama_kelas', 'guru_id'];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
