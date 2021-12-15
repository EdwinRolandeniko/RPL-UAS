<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugasdos extends Model
{
    use HasFactory;

    protected $table = 'tugasdos';
    protected $fillable = ['id_user','nama_mitra','lokasi_kegiatan','tgl_pelaksanaan','status','keterangan'];
    protected $dates = ['tgl_pelaksanaan'];

    public function users()
    {
    	return $this->hasMany('App\Models\User');
    }
}
