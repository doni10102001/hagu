@extends('layouts.admin')

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
					<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
					<li class="breadcrumb-item"><a href="{{ route('absensi_pulang') }}">Absensi Pulang</a></li>
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
								Start creating your amazing application!
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