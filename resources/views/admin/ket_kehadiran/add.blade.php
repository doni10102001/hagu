@extends('multiauth::layouts.app')
@section('title')
	Hagu | Tambah Data Keterangan Kehadiran
@stop
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manajemen Data Keterangan Kehadiran</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Beranda</a></li>
          <li class="breadcrumb-item"><a class="text-dark" href="{{ route('ketKeh') }}">Keterangan Kehadiran</a></li>
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
           <b>Tambah Data Keterangan Kehadiran</b>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('ketKeh.save') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="Kehadiran">Kehadiran</label>
                    <select name="kehadiran" class="form-control" id="Kehadiran">
                      <option>Silahkan Pilih</option>
                      <option value="H">H</option>
                      <option value="I">I</option>
                      <option value="S">S</option>
                      <option value="A">A</option>
                      <option value="P">P</option> 
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <select name="ket" class="form-control" id="ket">
                      <option>Silahkan Pilih</option>
                      <option value="Hadir">Hadir</option>
                      <option value="Ijin">Ijin</option>
                      <option value="Sakit">Sakit</option>
                      <option value="Alpa">Alpa</option>
                      <option value="Pulang">Pulang</option>
                    </select>
                  </div>
                  <a href="{{ route('ketKeh') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
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
