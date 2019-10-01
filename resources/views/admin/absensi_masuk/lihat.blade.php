@extends('multiauth::layouts.app')

@section('title')
Hagu | Lihat Data {{ $absensi_masuk->enkripsi }}
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Beranda</a></li>
					<li class="breadcrumb-item"><a class="text-dark" href="{{ route('absensi_masuk') }}">Absensi Masuk</a></li>
					<li class="breadcrumb-item">Data {{ $absensi_masuk->enkripsi }}</li>
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
						<b>Data {{ $absensi_masuk->enkripsi }}</b>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body">
								<form action="{{ route('absensi_masuk.post', $absensi_masuk->id) }}" method="POST">
									@csrf
									<div class="form-group">
										<label for="enkripsi">Enkripsi*</label>
										<input type="text" name="enkripsi" class="form-control" value="{{ $absensi_masuk->enkripsi }}" disabled>
									</div>
									<div class="form-group">
										<label for="waktu">Waktu Scan*</label>
										<input type="text" name="waktu_scan" class="form-control" value="{{ $absensi_masuk->waktu_scan }}" disabled>
									</div>
									<div class="form-group">
										<label for="id_guru">ID Guru*</label>
										<input type="text" name="guru_id" class="form-control" value="{{ $absensi_masuk->guru_id }}" disabled>
									</div>
									<div class="form-group">
										<label for="kehadiran">Kehadiran*</label>
										<input type="text" name="kehadiran" class="form-control" value="{{ $absensi_masuk->kehadiran }}" disabled>
									</div>
									<a href="{{ route('absensi_masuk') }}" class="btn btn-warning"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
									<a href="" class="btn btn-success float-right"><i class="fas fa-print fa-fw"></i>Cetak Data</a>
									<a href="" class="btn btn-primary float-right mr-2"><i class="fas fa-download fa-fw"></i>Unduh Pdf</a>
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