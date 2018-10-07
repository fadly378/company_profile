@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<button type="button" class="btn btn-block btn-success btn-tambah">Tambah Artikel</button>
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th>Judul</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($artikel as $index=>$ar)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $ar->judul }}</td>
							<td><a href="{{ url('admin/artikel/'.$ar->artikel_id) }}" class="btn btn-primary">Edit</a><a href="{{ url('admin/artikel/delete/'.$ar->artikel_id) }}" class="btn btn-danger btn-hapus">Hapus</a></td>
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
            <form role="form" action="{{ url('admin/artikel') }}" method="POST">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Isi</label>
                  <textarea name="isi" class="form-control textarea" rows="20"></textarea>
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
<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        

      	<p><b><i>yakin ingin menghapus artikel ini?</i></b></p>


      </div>
      <div class="box-footer">
        <a href="" class="btn btn-primary btn-submit-hapus">Hapus</a>
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
		})

		$('body').on('click','.btn-hapus',function(e){
			e.preventDefault();
			var url = $(this).attr('href');

			$('.btn-submit-hapus').attr('href',url);

			$('#modal-hapus').modal();
		})
	})
</script>

@endsection