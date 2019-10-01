@extends('multiauth::layouts.app')
@section('title')
	Hagu | Tambah Data Absensi Masuk
@stop
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manajemen Data Absensi Masuk</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Beranda</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="{{ route('absensi_masuk') }}">Absensi Masuk</a></li>
          <li class="breadcrumb-item">Tambah Data</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
           <b>Tambah Data Absensi Masuk</b>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('absensi_masuk.create') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="kode_enkripsi">Enkripsi*</label>
                    <input type="text" name="enkripsi" class="form-control" value="{{ old('enkripsi') }}" autocomplete="off" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="hari">Hari dan Waktu*</label>
                    <input type="text" name="waktu_scan" class="form-control" value="{{ date('d M Y H:y:i') }}" autocomplete="off" readonly>
                  </div>
                  <div class="form-group">
                    <label for="id_guru">ID Guru*</label>
                    <input type="text" name="guru_id" class="form-control" value="12" autocomplete="off" readonly>
                  </div>
                  <div class="form-group">
                    <label for="kehadiran">Kehadiran*</label>
                    <select name="kehadiran" class="form-control">
                      @foreach($absensi_masukket as $as)
                      <option value="{{ $as->kehadiran }}">{{ $as->kehadiran }}</option>
                      @endforeach
                    </select>
                  </div>
                  <a href="{{ route('absensi_masuk') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
                  <button type="submit" class="btn btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
@stop