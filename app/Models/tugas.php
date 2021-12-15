<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $fillable = ['id_user','nama_mitra','alamat_mitra','anggota','tgl_kirim','status','keterangan'];
    protected $dates = ['tgl_kirim'];

    public function users()
    {
    	return $this->hasMany('App\Models\User');
    }
}
