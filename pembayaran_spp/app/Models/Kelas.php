<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = ['id', 'kelas'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id', 'id_kelas');
    }
}
