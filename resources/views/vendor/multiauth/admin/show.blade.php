@extends('multiauth::layouts.app') 
@section('title')
Hagu | Profile Admininstrator {{ Auth('admin')->user()->name }}
@stop
@section('content')
<!-- Main content -->
<br>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"><b>Data Identitas Administrator</b></h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fas fa-times"></i></button>
								</div>
							</div>
							<div class="card-body">
								@include('multiauth::message')
								<form action="" method="get" accept-charset="utf-8">
									<div class="form-group">
										<label>Nama Lengkap*</label>
										<input type="text" name="name" class="form-control" value="{{ Auth('admin')->user()->name }}" readonly>
									</div>
									<div class="form-group">
										<label>Email*</label>
										<input type="email" name="email" class="form-control" value="{{ Auth('admin')->user()->email }}" readonly>
									</div>
									<a href="{{route('admin.edit', Auth('admin')->user()->id)}}" class="btn btn-primary float-right">Edit</a>
									<a href="{{route('admin.password.change', Auth('admin')->user()->id)}}" class="btn btn-warning float-right mr-2">Ubah Password</a>
								</form>
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
		</div>
	</div>
</section>
<!-- /.content -->
@stop