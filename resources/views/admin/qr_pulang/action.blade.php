<form action="{{ route('qr_out.hapus', $id) }}" method="POST">
	@csrf
	<a href="{{ route('qr_out.lihat', $id) }}" class="btn btn-sm btn-warning" title="Lihat Data">
		<i class="fa fa-eye"></i>
	</a> ||
	<a href="{{ route('qr_out.ubah', $id) }}" class="btn btn-sm btn-success" title="Ubah Data">
		<i class="fas fa-pencil-alt"></i>
	</a> ||
	<span onclick="return confirm('Yakin?')">
		<button class="btn btn-sm btn-danger" title="Hapus Data">
			<i class="fa fa-trash"></i>
		</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>