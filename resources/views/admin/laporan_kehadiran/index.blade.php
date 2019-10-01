@extends('multiauth::layouts.app')

@section('title')
Hagu | Laporan Kehadiran Guru
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Manajemen Data Laporan Kehadiran Guru</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
					<li class="breadcrumb-item"><a href="{{ route('laporan_kehadiran') }}">Laporan Kehadiran</a></li>
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
						<h3 class="card-title">Title</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body">
								<a href="{{ route('home') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
							</div>
							<div class="card-body">
								<table id="lap_keh" class="table table-bordered">
									<thead>
										<tr role="row">
											<th>No</th>
											<th>Nama</th>
											<th>Jenis Kelamin</th>
											<th>Jabatan</th>
											<th>Aksi</th>
										</tr>  
									</thead>

								</table>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								Footer
							</div>
							<!-- /.card-footer-->
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
      $('#lap_keh').DataTable({
        order: [[0, 'desc']],
        processing: true,
        responsive: true,
        serverSide: true,
        ajax: '{!! route('laporan_kehadiran.data') !!}',
        columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
        {data: 'name', name: 'name', width: '50px', orderable: true},
        {data: 'jenis_kelamin', name: 'jenis_kelamin', width: '50px', orderable: true},
        {data: 'jabatan', name: 'jabatan', width: '50px', orderable: true},
        {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
        ]
      });
    });
  </script>
  @endpush