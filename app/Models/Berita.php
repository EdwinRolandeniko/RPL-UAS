<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $fillable = ['id_user','nama_mitra','alamat_mitra','tgl_kirim','status','keterangan'];

    protected $dates = ['tgl_kirim'];

    public function users()
    {
    	return $this->hasMany('App\Models\User');
    }
}
