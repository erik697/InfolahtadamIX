
@extends('adminTemplate.master')
@section('uri')
   <h1>
        Berita Persit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Berita Persit</li>
      </ol>
@endsection
@section('main')
<div class="box">
    <div class="box-header">
      @if (checkPermission('create_persitBerita'))
                  
      <a href="{{ route('persit-posts.create') }}" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a>
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
          <th>No</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Status</th>
          <th>Tgl. Publish</th>
          <th>View</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           
            @foreach ($persitPosts as $key=>$item )
                <td>{{ $key+1 }}</td>
                <td><img src="ImagePersitPost/{{ $item->img_url }}" width="100" alt=""></td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->published_at }}</td>
                <td>{{ $item->view }}</td>
                <td>
                <div class="form-group" style="display: flex">
                  @if (checkPermission('create_persitBerita'))
                  
                  <a href="{{ route('persit-posts.edit', $item->id) }}" type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                 @endif
                @if (checkPermission('create_persitBerita'))
                  
                <form action="{{ route('persit-posts.destroy', $item->id) }}" style="padding-left: 10px" method="POST" onsubmit="return confirm('Yakin menghapus data ini ?')">
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
          <th>Gambar</th>
          <th>Judul</th>
          <th>Status</th>
          <th>Tgl. Publish</th>
          <th>View</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection