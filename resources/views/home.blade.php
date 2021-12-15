@extends('layouts.navbar')

@section('content')


                

<div class="container">
<div class="row">

        <!-- DASHBOARD MAHASISWA -->
        @if(auth()->user()->role == 'Mahasiswa')

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-primary">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT PERMOHONAN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$permohonan->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                  <a href="/surat-permohonan">
                  <p class="text-light mt-3 mb-0">
                  <i class="mdi mdi-chart-arc mr-1" aria-hidden="true"></i>KLIK UNTUK BUAT SURAT
                  </p>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-danger">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT KEGIATAN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$kegiatan->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                  <a href="/surat-kegiatan">
                  <p class="text-light mt-3 mb-0">
                  <i class="mdi mdi-chart-arc mr-1" aria-hidden="true"></i>KLIK UNTUK BUAT SURAT
                  </p>
                  </a>       
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-success">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT UNDANGAN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$undangan->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                  <a href="/surat-undangan">
                  <p class="text-light mt-3 mb-0">
                  <i class="mdi mdi-chart-arc mr-1" aria-hidden="true"></i>KLIK UNTUK BUAT SURAT
                  </p>
                  </a>       
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-secondary">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT TUGAS</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$tugas->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                  <a href="/surat-tugas">
                  <p class="text-light mt-3 mb-0">
                  <i class="mdi mdi-chart-arc mr-1" aria-hidden="true"></i>KLIK UNTUK BUAT SURAT
                  </p>
                  </a>       
                </div>
              </div>
            </div>

            <br><br><br><br><br><br><br>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-dark">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT BERITA ACARA</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$berita->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                  <a href="/surat-berita-acara">
                  <p class="text-light mt-3 mb-0">
                  <i class="mdi mdi-chart-arc mr-1" aria-hidden="true"></i>KLIK UNTUK BUAT SURAT
                  </p>
                  </a>       
                </div>
              </div>
            </div>

            @endif

            <!-- DASHBOARD DOSEN -->
            @if(auth()->user()->role == 'Dosen')

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-primary">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT TUGAS FAKULTAS</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$tugasdos->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                  <a href="/surat-tugas-dsn">
                  <p class="text-light mt-3 mb-0">
                  <i class="mdi mdi-chart-arc mr-1" aria-hidden="true"></i>KLIK UNTUK BUAT SURAT
                  </p>
                  </a>
                </div>
              </div>
            </div>

            @endif

            <!-- DASHBOARD ADMIN -->
            @if(auth()->user()->role == 'Admin')

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-primary">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT PERMOHONAN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$admpermohonan->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-danger">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT KEGIATAN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$admkegiatan->count()}}</b></h1>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-success">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT UNDANGAN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$admundangan->count()}}</b></h1>
                      </div>
                    </div>
                  </div>       
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-secondary">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT TUGAS</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$admtugas->count()}}</b></h1>
                      </div>
                    </div>
                  </div>   
                </div>
              </div>
            </div>

            <br><br><br><br><br><br>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-dark">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-light icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-light">SURAT BERITA ACARA</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-light mb-0"> <b>{{$admberita->count()}}</b></h1>
                      </div>
                    </div>
                  </div>   
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 grid-margin stretch-card">
            <div class="card card-statistics bg-warning">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-chart-line text-black icon-lg"></i>
                    </div>
                    <div class="float-right">
                    <h5 class="mb-0 text-black">SURAT TUGAS DOSEN</h5>
                      <div class="fluid-container">
                        <h1 class="font-weight-medium float-right text-black mb-0"> <b>{{$admtugasdos->count()}}</b></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endif
</div>
</div>




@endsection
