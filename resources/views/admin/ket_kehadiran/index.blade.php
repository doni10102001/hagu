@extends('multiauth::layouts.app')
@section('title')
	Hagu | Ket. Kehadiran
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
          <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{ route('ketKeh') }}" class="text-dark">Keterangan Kehadiran</a></li>
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
            <a href="{{ route('ketKeh.tambah') }}" class="btn btn-success"><i class="fas fa-plus-circle fa-fw"></i>Tambah Data</a>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <table id="ketKeh" class="table table-bordered">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>Kehadiran</th>
                      <th>Keterangan</th>
                      <th>Action</th>
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
      $('#ketKeh').DataTable({
        order: [[0, 'desc']],
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: '{!! route('ketKeh.data') !!}',
        columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
        {data: 'kehadiran', name: 'kehadiran', width: '50px', orderable: true},
        {data: 'ket', name: 'ket', width: '50px', orderable: true},
        {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
        ]
      });
    });
  </script>
  @endpush