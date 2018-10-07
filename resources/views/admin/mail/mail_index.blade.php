@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody>
						@foreach($mail as $index=>$ml)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $ml->nama }}</td>
							<td>{{ $ml->email }}</td>
              <td>{{ $ml->nope }}</td>
						</tr>
						<tr>
							<td colspan="4" style="color: red;">{!! $ml->keterangan !!}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}

		$('.btn-tambah').click(function(e){
			e.preventDefault();
			$('#modal-tambah').modal();
		});

		$('body').on('click','.btn-hapus',function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			var url = $(this).attr('href');
			$('.btn-submit-hapus').attr('href',url);

			$('#modal-danger').modal();
		})
	})
</script>

@endsection