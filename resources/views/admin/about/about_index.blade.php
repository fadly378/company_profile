@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<form role="form" method="post" action="{{ url('admin/about') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea rows="20" name="keterangan" class="form-control textarea">{{ $about->keterangan }}</textarea>
					</div>
					<button type="submit" class="form-control btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')

<script>
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}
	});
</script>

@endsection