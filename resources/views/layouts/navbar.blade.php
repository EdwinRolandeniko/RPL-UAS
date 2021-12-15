<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Surat Express | {{ Auth::user()->role }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#656C88">
            <div class="container">
                <a class="navbar-brand text-white" href="/home">
                   Surat Express
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav  mr-auto">
                    <li class="nav-item ">
          <!-- <a class="nav-link text-white" href="">Beranda</a> -->
        </li>
        @if(auth()->user()->role == 'Dosen')
        <li class="nav-item">
          <a class="nav-link text-white" href="/surat-tugas-dsn">Surat Tugas Fakultas</a>
        </li>
        @endif

        @if(auth()->user()->role == 'Mahasiswa')
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Pengajuan Surat
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/surat-permohonan">
                                        Surat Permohonan
                                    </a>
                                    <a class="dropdown-item" href="/surat-kegiatan">
                                        Surat Kegiatan
                                    </a>
                                    <a class="dropdown-item" href="/surat-undangan">
                                        Surat Undangan
                                    </a>
                                    <a class="dropdown-item" href="/surat-tugas">
                                        Surat Tugas
                                    </a>
                                    <a class="dropdown-item" href="/surat-berita-acara">
                                        Surat Berita Acara
                                    </a>
                                
                                </div>

                                
                            </li>


        @endif

        @if(auth()->user()->role == 'Admin')
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Surat Masuk
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/adm-surat-permohonan">
                                        Surat Permohonan
                                    </a>
                                    <a class="dropdown-item" href="/adm-surat-kegiatan">
                                        Surat Kegiatan
                                    </a>
                                    <a class="dropdown-item" href="/adm-surat-undangan">
                                        Surat Undangan
                                    </a>
                                    <a class="dropdown-item" href="/adm-surat-tugas">
                                        Surat Tugas
                                    </a>
                                    <a class="dropdown-item" href="/adm-surat-berita-acara">
                                        Surat Berita Acara
                                    </a>
                                    <a class="dropdown-item" href="/adm-surat-tugas-dsn">
                                        Surat Tugas Dosen
                                    </a>
                                
                                </div>

                                
                            </li>

        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
