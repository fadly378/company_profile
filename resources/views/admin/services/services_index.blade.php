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
							<th>Judul</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($services as $index=>$sv)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $sv->judul }}</td>
							<td><a href="{{ url('admin/services/'.$sv->services_id) }}" class="btn btn-primary">Edit</a></td>
						</tr>
						<tr>
							<td colspan="2" style="color: red;">
								{{ $sv->keterangan }}
							</td>
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
	})
</script>

@endsection