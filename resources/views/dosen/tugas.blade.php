@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">Tambah Surat Tugas Fakultas</div>

                <div class="card-body">
                <form action="#" method="post">
                    {{ csrf_field() }}

        

                <!-- <div class="mb-3">
                <label for="nama_mitra" class="form-label">Nama Pengirim</label>
                <input type="text" class="form-control" id="nama_mitra" required >
                </div> -->

                <div class="mb-3">
                <label for="nama_mitra" class="form-label">Nama Mitra</label>
                <input type="text" class="form-control" name="nama_mitra" id="nama_mitra"  >
                </div>

                <div class="mb-3">
                <label for="alamat_mitra" class="form-label">Alamat Mitra</label>
                <input type="text" class="form-control" name="alamat_mitra" id="alamat_mitra" >
                </div>

                <div class="mb-3">
                <label for="tgl_kirim" class="form-label">Tanggal Kirim</label>
                <input type="date" class="form-control" name="tgl_kirim" id="tgl_kirim"  >
                </div>

                <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" >
                </div>

                <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                <a href="/home" class="btn btn-secondary">Kembali</a>
                </form>
                
            </div>
        
        </div>
    </div>
</div>
@endsection
