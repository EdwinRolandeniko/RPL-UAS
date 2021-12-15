<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeSuratTugasdos extends Model
{
    use HasFactory;

    protected $table = 'kode_surat_tugasdos';
    protected $fillable = ['id_surat','kode_surat'];
}
