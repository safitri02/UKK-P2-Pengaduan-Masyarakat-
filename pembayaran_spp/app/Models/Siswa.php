<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['id','nisn', 'nama', 'id_siswa', 'id_jurusan', 'alamat', 'kontak', 'id_spp'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id');
    }

    public function jurusan()
    {
       return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
}
