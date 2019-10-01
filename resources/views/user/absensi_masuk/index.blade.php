@extends('layouts.index')
@section('title')
Hagu | Absensi Masuk Guru
@stop
@section('content')

<!--================Download App Area =================-->
<section class="download_app_area p_120">
    <div class="container">
        <div class="app_inner">
            <br><br>
            <h2>Absensi Masuk Kehadiran Guru</h2>
            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.</p>
            <div class="app_btn_area">
                <div class="app_btn">
                    <div class="media">
                        <div class="d-flex">
                            <i class="fa fa-qrcode" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('masuk_guru.tambah') }}"><h4>Absen Sekarang</h4></a>
                            <p>Scanner QR</p>
                        </div>
                    </div>
                </div>
                <div class="app_btn">
                    <div class="media">
                        <div class="d-flex">
                            <i class="fa fa-inbox" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>Laporan Kehadiran</h4></a>
                            <p>Manajemen Data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Download App Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Berita Terbaru!</h2>
            <p>Seputar Informasi Berita yang terupdate dan terbaru.</p>
        </div>
        <div class="latest_news_inner row">
            <div class="col-lg-4">
                <div class="l_news_item">
                    <a class="date" href="#">10 April, 2018</a>
                    <a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>
                    <p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
                    <div class="post_view">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
                        <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
                        <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="l_news_item">
                    <a class="date" href="#">10 April, 2018</a>
                    <a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>
                    <p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
                    <div class="post_view">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
                        <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
                        <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="l_news_item">
                    <a class="date" href="#">10 April, 2018</a>
                    <a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>
                    <p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
                    <div class="post_view">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
                        <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
                        <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Latest News Area =================-->
@stop