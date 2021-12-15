<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengajuan extends Model
{
    use HasFactory;

    protected $table = 'surat_pengajuan';
    protected $fillable = ['id_user','nama_mitra','alamat_mitra','jenis_surat','tujuan_surat','tgl_kirim','keterangan'];

}
