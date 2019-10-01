@extends('multiauth::layouts.app')
@section('title')
Hagu | Manajemen Guru
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
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{ route('guru') }}" class="text-dark">Guru</a></li>
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
            <a href="{{ route('home') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
            <a href="{{ route('guru.tambah') }}" class="btn btn-success"><i class="fas fa-plus-circle fa-fw"></i>Tambah Data</a>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="guru" class="table table-bordered">
                    <thead>
                      <tr role="row">
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>  
                    </thead>
                    
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    @stop
    @push('scripts')
    <script>
     $(function(){
      $('#guru').DataTable({
        order: [[0, 'desc']],
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: '{!! route('guru.data') !!}',
        columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
        {data: 'foto', name: 'foto', width: '50px', orderable: true},
        {data: 'name', name: 'name', width: '50px', orderable: true},
        {data: 'nik', name: 'nik', width: '50px', orderable: true},
        {data: 'jenis_kelamin', name: 'jenis_kelamin', width: '50px', orderable: true},
        {data: 'jabatan', name: 'jabatan', width: '50px', orderable: true},
        {data: 'alamat', name: 'alamat', width: '50px', orderable: true},
        {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
        ]
      });
    });
  </script>
  @endpush