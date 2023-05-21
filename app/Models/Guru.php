<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $primarykey = 'id';
    protected $fillable = ['nama_guru', 'jenkel', 'alamat_guru'];

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
    
}
