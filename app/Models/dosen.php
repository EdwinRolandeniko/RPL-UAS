<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    
    protected $table = 'surat_tugas';
    protected $fillable = ['id_user','nama_mitra','alamat_mitra','tgl_kirim','keterangan'];
}
