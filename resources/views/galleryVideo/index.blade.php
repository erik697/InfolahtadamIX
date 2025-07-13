
@extends('adminTemplate.master')
@section('uri')
   <h1>
        Gallery Video
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Gallery Video</li>
      </ol>
@endsection
@section('main')
<div class="box">
    <div class="box-header">
      @if (checkPermission('create_galleryVideo'))
      <a href="{{ route('gallery-videos.create') }}" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a>
                 @endif
    </div>
    <!-- /.box-header -->
    <div class="box-body">
       @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif
      <table id="example1" class="table table-bordered table-striped" style="min-width: 100%">
        <thead>
        <tr>
          <th>No</th>
          <th>Video</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($galleryVideos as $key=>$item )
                 <td>{{ $key+1 }}</td>
                <td>
                    <video width="150" height="100" controls>
  <source src="Gallery/Videos/{{ $item->url }}" type="video/mp4">
  {{-- Your browser does not support the video tag. --}}
</video>
                </td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>
                <div class="form-group" style="display: flex">
                  @if (checkPermission('update_galleryVideo'))
                  <a href="{{ route('gallery-videos.edit', $item->id) }}" type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                 @endif
                @if (checkPermission('delete_galleryVideo'))  
                <form action="{{ route('gallery-videos.destroy', $item->id) }}" style="padding-left: 10px" method="POST" onsubmit="return confirm('Yakin menghapus data ini ?')">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                                </form>
                 @endif
                </div>
                </td>
                </tr>
            @endforeach
         

        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Video</th>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection