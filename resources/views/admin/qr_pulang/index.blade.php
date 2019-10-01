@extends('multiauth::layouts.app')
@section('title')
	Hagu | QR Kode Absensi Pulang
@stop
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manajemen Data QR Kode Absensi Pulang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{ route('qr_out') }}" class="text-dark">QR Kode Absensi Pulang</a></li>
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
            <a href="{{ route('qr_out.tambah') }}" class="btn btn-success"><i class="fas fa-plus-circle fa-fw"></i>Tambah Data</a>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <table id="qr_out" class="table table-bordered">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>Enkripsi</th>
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
    <!-- /.content -->
    @stop
    @push('scripts')
    <script>
     $(function(){
      $('#qr_out').DataTable({
        order: [[0, 'desc']],
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: '{!! route('qr_out.data') !!}',
        columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
        {data: 'kode_enkripsi', name: 'kode_enkripsi', width: '50px', orderable: true},
        {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
        ]
      });
    });
  </script>
  @endpush