@extends('multiauth::layouts.app')
@section('title')
  Hagu | Perbaharui Data {{ $guru->name }}
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
          <li class="breadcrumb-item">Perbaharui Data {{ $guru->name }}</li>
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
           <b>Perbaharui Data Guru</b>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('guru.post', $guru->id) }}" method="POST" enctype="multipart/form-data"> 
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama Guru*</label>
                    <input type="text" name="name" class="form-control" value="{{ $guru->name }}" autocomplete="off" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" name="email" class="form-control" value="{{ $guru->email }}" id="email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="password" name="password" class="form-control form-password" value="{{ $guru->password }}" id="password">
                    <input type="checkbox" class="form-checkbox"> Lihat Password
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto*</label>
                    <input type="file" name="foto" class="form-control" value="{{ $guru->foto }}" id="foto">
                    <b>
                      <sup>{{ $guru->foto }}</sup>
                    </b>
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK*</label>
                    <input type="text" name="nik" class="form-control" value="{{ $guru->nik }}" id="nik">
                  </div>
                  <div class="form-group">
                    <label for="tmpat_lahir">Tempat Lahir*</label>
                    <input type="text" name="tmpat_lahir" class="form-control" value="{{ $guru->tmpat_lahir }}" id="tmpat_lahir">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir*</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $guru->tgl_lahir }}" id="tgl_lahir">

                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin*</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                      <option value="{{ $guru->jenis_kelamin }}">{{ $guru->jenis_kelamin }}</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <textarea name="alamat" class="form-control" id="alamat">{{ $guru->alamat }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="rt">Rt*</label>
                    <input type="text" name="rt" class="form-control" id="rt" value="{{ $guru->rt }}">
                  </div>
                  <div class="form-group">
                    <label for="rw">Rw*</label>
                    <input type="text" name="rw" class="form-control" id="rw" value="{{ $guru->rw }}">
                  </div>
                  <div class="form-group">
                    <label for="desa">Desa*</label>
                    <input type="text" name="desa" class="form-control" id="desa" value="{{ $guru->desa }}">
                  </div>
                  <div class="form-group">
                    <label for="kec">Kecamatan*</label>
                    <input type="text" name="kec" class="form-control" id="kec" value="{{ $guru->kec }}">
                  </div>
                  <div class="form-group">
                    <label for="kab">Kabupaten*</label>
                    <input type="text" name="kab" class="form-control" id="kab" value="{{ $guru->kab }}">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan*</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $guru->jabatan }}">
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
