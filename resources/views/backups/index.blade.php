
@extends('adminTemplate.master')
@section('uri')
   <h1>
        Backup
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Backup</li>
      </ol>
@endsection
@section('main')
<div class="box">
    <div class="box-header">
      @if (checkPermission('create_permission'))
      
        <form action="{{ route('backup.add') }}" method="POST">
        @csrf
         <button type="submit" class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
      </form>
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
          <th>nama</th>
          <th>tanggal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($data as $key=>$item )
                 <td>{{ $key+1 }}</td>
                <td>{{ $item['nama_file'] }} ({{ $item['ukuran_kb'] }})kb</td>
                <td><a href="{{ route('backup.download', $item['nama_file']) }}">Download</a></td>
                <td>{{ $item['terakhir_diubah'] }}</td>
                {{-- <td>
                <div class="form-group" style="display: flex">
                  @if (checkPermission('update_permission'))
                  
                  <a href="{{ route('permissions.edit', $item->id) }}" type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                 @endif
                @if (checkPermission('delete_permission'))
                  
                <form action="{{ route('permissions.destroy', $item->id) }}" style="padding-left: 10px" method="POST" onsubmit="return confirm('Yakin menghapus data ini ?')">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                                </form>
                 @endif
                </div>
                </td> --}}
                </tr>
            @endforeach
         

        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>nama</th>
          <th>tanggal</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection