<!--================Home Banner Area =================-->
<section class="home_banner_area" id="home">
    <div class="banner_inner">
        <div class="container">
            <div class="row banner_content">
                @if(Route::has('login'))
                <div class="col-lg-9">
                    @auth
                    <h2><script src="{{ asset('js/sapa.js') }}"></script></h2> <h2>{{ Auth::user()->name }}<br /></h2>
                    <a class="banner_btn m-1" href="{{ route('masuk_guru') }}">Absensi Masuk</a>
                    <a class="banner_btn m-1" href="{{ route('login') }}">Absensi Pulang</a>
                    @else
                    <h2>Hagu<br />Aplikasi Abensi Kehadiran Guru</h2>
                    <a class="banner_btn" href="{{ route('login') }}">Mulai Absen Yuk</a>
                    @endauth
                </div>
                @endif
                <div class="col-lg-3">
                    <div class="banner_map_img">
                        <img class="img-fluid" src="img/banner/hp.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->