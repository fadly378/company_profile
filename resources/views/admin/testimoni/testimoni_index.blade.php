@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<a href="" class="btn btn-block btn-success btn-tambah">Tambah Testimoni</a>
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Perusahaan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($testimoni as $index=>$ts)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $ts->nama }}</td>
							<td>{{ $ts->perusahaan }}</td>
							<td><a href="{{ url('admin/testimoni/'.$ts->testimoni_id) }}" id="{{ $ts->testimoni_id }}" class="btn btn-danger btn-hapus">Hapus</a></td>
						</tr>
						<tr>
							<td colspan="3" style="color: red;">{!! $ts->keterangan !!}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        

      	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/testimoni') }}" method="POST">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Perusahaan</label>
                  <input type="text" name="perusahaan" class="form-control" id="exampleInputPassword1" placeholder="Perusahaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Testimoni</label>
                  <textarea name="keterangan" class="form-control textarea" rows="20"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
         </div>


      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Danger Modal</h4>
      </div>
      <div class="modal-body">
        <p><b><i>Yakin ingin menghapus testimoni ini?</i></b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-outline btn-submit-hapus">Yakin</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
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