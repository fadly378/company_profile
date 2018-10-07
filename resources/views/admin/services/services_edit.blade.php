@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<form role="form" method="POST" action="{{ url('admin/services/'.$service->services_id) }}">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" name="judul" class="form-control" value="{{ $service->judul }}">
					</div>
					<div class="form-group">
						<textarea name="keterangan" class="form-control textarea" rows="20">{!! $service->keterangan !!}</textarea>
					</div>
					<button type="submit" class="btn btn-success btn-block">Update</button>
				</form>
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