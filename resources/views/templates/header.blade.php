<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="image/icon.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    @if(Route::has('login'))
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="">
                            <div class="row">
                                <div id="date"></div>
                                <div id="time" class="ml-2"></div>
                            </div>
                        </a></li>
                        @auth
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item">
                            <a class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Keluar</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                        @else
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.login') }}">Admin</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Guru</a></li>
                            </ul>
                        </li> 
                        <li class="nav-item"><a class="nav-link" href="#feature">Tentang</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#video">Lokasi Saya</a></li>
                        <li class="nav-item"><a class="nav-link" href="#screen">Fitur</a> </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Kontak Saya</a></li> 
                        @endauth
                    </ul>
                    @endif
                </div> 
            </div>
        </nav>
    </div>
</header>
    <!--================Header Menu Area =================-->