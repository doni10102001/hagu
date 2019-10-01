@extends('layouts.index')
@section('title')
Hagu | Tambah Data Absensi Masuk Guru
@stop
@section('content')

<!--================Download App Area =================-->
<section class="download_app_area p_120">
    <div class="container">
        <div class="app_inner">
            <br><br>
            <h2>Tambah absensi Masuk {{ Auth::user()->name }}</h2>
            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.</p>
            <div class="app_btn_area">
                <div class="app_btn">
                    <div class="media">
                        <div class="d-flex">
                            <i class="fa fa-qrcode" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('masuk_guru.tambah') }}"><h4>Scan</h4></a>
                            <p>QR code di Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Download App Area =================-->


{{-- Form input --}}
<div class="container p-5">
    <div class="row justify-content-md-center">
        <div class="card col-7">
           <div class="card-header">
            <b>Form Input Absensi Masuk*</b>
        </div>
        <div class="card-body">
           <form action="{{ route('masuk_guru.save') }}" method="post">
            @csrf
              <div class="form-group">
                <label for="enkripsi">Kode Enkripsi*</label>
                <input type="text" name="enkripsi" class="form-control" id="enkripsi">
              </div>
              <div class="form-group">
                  <label for="waktu">Waktu Scan*</label>
                  <input type="text" name="waktu_scan" class="form-control" value="{{ Date('d M Y H:y:i') }}" readonly>
              </div>
              <div class="form-group">
                  <label for="guru_id">ID Guru*</label>
                  <input type="text" name="guru_id" class="form-control" value="{{ Auth::user()->id }}" readonly>
              </div>
              <div class="form-group">
                  <label for="keh">Kehadiran*</label>
                  <select name="kehadiran" class="form-control">
                    @foreach($kehadiran as $keh)
                      <option value="{{ $keh->ket }}">{{ $keh->ket }}</option>
                    @endforeach
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </div>
</div>
</div>
@stop