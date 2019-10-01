@extends('multiauth::layouts.app')

@section('title')
Hagu | Man. Absensi Pulang
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manajemen Data Absensi Pulang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{ route('absensi_pulang') }}" class="text-dark">Absensi Pulang</a></li>
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
            <a href="{{ route('home') }}" class="btn btn-warning" target="__blank"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
            <a href="{{ route('absensi_pulang.tambah') }}" class="btn btn-success"><i class="fas fa-plus-circle fa-fw"></i>Tambah Data</a>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <table id="abpulang" class="table table-bordered">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>Enkripsi</th>
                      <th>Waktu Scan</th>
                      <th>Guru id</th>
                      <th>Kehadiran</th>
                      <th>Aksi</th>
                    </tr>  
                  </thead>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
@stop

@push('scripts')
	<script>
		$(function(){
	      $('#abpulang').DataTable({
	        order: [[0, 'desc']],
	        processing: true,
	        responsive: true,
	        serverSide: true,
	        ajax: '{!! route('absensi_pulang.data') !!}',
	        columns: [
	        {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
	        {data: 'enkripsi', name: 'enkripsi', width: '50px', orderable: true},
	        {data: 'waktu_scan', name: 'waktu_scan', width: '10px', orderable: true},
	        {data: 'guru_id', name: 'guru_id', width: '100px', orderable: true},
	        {data: 'kehadiran', name: 'kehadiran', width: '60px', orderable: true},
	        {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
	        ]
	      });
	    });
	</script>
@endpush