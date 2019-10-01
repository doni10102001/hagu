@extends('multiauth::layouts.app')
@section('title')
	Hagu | Tambah Data Guru
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
           <b>Tambah Data Guru</b>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('guru.save') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama Guru*</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" autocomplete="off" id="name" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="password">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto*</label>
                    <input type="file" name="foto" class="form-control" value="{{ old('foto') }}" id="foto">
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK*</label>
                    <input type="text" name="nik" class="form-control" value="{{ old('nik') }}" id="nik">
                  </div>
                  <div class="form-group">
                    <label for="tmpat_lahir">Tempat Lahir*</label>
                    <input type="text" name="tmpat_lahir" class="form-control" value="{{ old('tmpat_lahir') }}" id="tmpat_lahir">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir*</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin*</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                      <option>Silahkan Pilih</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <textarea name="alamat" class="form-control" id="alamat">{{ old('alamat') }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="rt">Rt*</label>
                    <input type="text" name="rt" class="form-control" id="rt" value="{{ old('rt') }}">
                  </div>
                  <div class="form-group">
                    <label for="rw">Rw*</label>
                    <input type="text" name="rw" class="form-control" id="rw" value="{{ old('rw') }}">
                  </div>
                  <div class="form-group">
                    <label for="desa">Desa*</label>
                    <input type="text" name="desa" class="form-control" id="desa" value="{{ old('desa') }}">
                  </div>
                  <div class="form-group">
                    <label for="kec">Kecamatan*</label>
                    <input type="text" name="kec" class="form-control" id="kec" value="{{ old('kec') }}">
                  </div>
                  <div class="form-group">
                    <label for="kab">Kabupaten*</label>
                    <input type="text" name="kab" class="form-control" id="kab" value="{{ old('kab') }}">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan*</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ old('jabatan') }}">
                  </div>
                  <a href="{{ route('guru') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
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
