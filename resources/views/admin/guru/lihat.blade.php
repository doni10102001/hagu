@extends('multiauth::layouts.app')
@section('title')
Hagu | Data {{ $guru->name }}
@stop
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manajemen Data Guru</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Beranda</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="{{ route('guru') }}">Guru</a></li>
          <li class="breadcrumb-item">Data {{ $guru->name }}</li>
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
           <b>Data Identitas Guru</b>
           <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <form>
                @csrf
                <div class="form-group">
                  <center>
                    <img src="/image/guru/{{ $guru->foto }}" class="img-fluid img-thumbnail" title="Foto {{ $guru->foto }}" alt="Foto {{ $guru->foto }}">
                  </center>
                </div>
                <div class="form-group">
                  <label for="name">Nama Guru*</label>
                  <input type="text" name="name" class="form-control" value="{{ $guru->name }}" id="name" readonly>
                </div>
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input type="email" name="email" class="form-control" value="{{ $guru->email }}" id="email" readonly>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" value="{{ $guru->password }}" readonly> 
                </div> 
                <div class="form-group">
                  <label for="nik">NIK*</label>
                  <input type="text" name="nik" class="form-control" value="{{ $guru->nik }}" id="nik" readonly>
                </div>
                <div class="form-group">
                  <label for="tmpat_lahir">Tempat Lahir*</label>
                  <input type="text" name="tmpat_lahir" class="form-control" value="{{ $guru->tmpat_lahir }}" id="tmpat_lahir" readonly>
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir*</label>
                  <input type="text" name="tgl_lahir" class="form-control" value="{{ $guru->tgl_lahir }}" id="tgl_lahir" readonly>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin*</label>
                  <input type="text" name="jenis_kelamin" class="form-control" value="{{ $guru->jenis_kelamin }}" id="jenis_kelamin" readonly>  
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat*</label>
                  <textarea name="alamat" class="form-control" id="alamat" readonly>{{ $guru->alamat }} Rt. {{ $guru->rt }} Rw. {{ $guru->rw }} Desa {{ $guru->desa }}, Kecamatan {{ $guru->kec }}, Kabupaten {{ $guru->kab }}</textarea>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan*</label>
                  <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $guru->jabatan }}" readonly>
                </div>
                <a href="{{ route('guru') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
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
