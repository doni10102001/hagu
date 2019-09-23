@extends('layouts.admin')

@section('title')
Hagu | Perbaharui Data 
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<a href="{{ route('home') }}" class="btn btn-warning" target="__blank"><i class="fas fa-angle-left fa-fw"></i>Kembali</a>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
					<li class="breadcrumb-item"><a href="{{ route('absensi_masuk') }}">Absensi Masuk</a></li>
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
						<b>Perbaharui Data <u>{{ $absensi_masuk->id }}</u></b>
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
										<input type="text" name="kehadiran" class="form-control" value="{{ $absensi_masuk->kehadiran }}">
									</div>
									<button type="submit" class="btn btn-primary">Simpan</button>
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