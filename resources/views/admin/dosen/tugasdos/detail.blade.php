@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row">
        
            
        
            <div class="card col-md-12">
        <br>
        <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title text-center">Detail Surat Tugas</h3>
        </div>
        <hr>
            
                <div class="card-body">
                <table class="table">
            <thead>
                <tr>
       
                <th scope="col">Nama Dosen</th>
                <th scope="col">Kode Surat</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Lokasi Kegiatan</th>
                <th scope="col">Tanggal Pelaksanaan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                <td>{{ $det->id_user}}</td>    
               
                <td>
                    @foreach($kd as $data)
                        {{ $data->kode_surat }}/F/FTI/{{ $det->tgl_pelaksanaan->format('Y') }}
                    @endforeach
                </td>  
                
               <td>{{ $det->nama_mitra }}</td>
               <td>{{ $det->lokasi_kegiatan }}</td>
               <td>{{ $det->tgl_pelaksanaan->format('d-m-Y') }}</td>
               <td>{{ $det->keterangan }}</td>
               <td>
               
               @if($det->status == 0)
                <a href="/adm-surat-tugas-dsn/setuju/{{ $det->id }}" class="btn btn-success">Terima</a>
               <a href="/adm-surat-tugas-dsn/batal/{{ $det->id }}" class="btn btn-danger">Tolak</a>
               @elseif($det->status == 1)
                <a href="/adm-surat-tugas-dsn/buat/{{$det->id}}" class="btn btn-primary">Buat Surat</a>
                @elseif($det->status == 2)
                   <p class="text">No Action</p>
                @endif
                </td>
                </tr>
               
            </tbody>
            </table>
            <a href="/adm-surat-tugas-dsn" class="btn btn-secondary">Kembali</a>
            </div>
            </div>
            </div>
        

        
            
        
    </div>
    
</div>
@endsection
