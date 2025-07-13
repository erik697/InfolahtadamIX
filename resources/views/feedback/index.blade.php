
@extends('adminTemplate.master')
@section('uri')
   <h1>
        Feedback
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Feedback</li>
      </ol>
@endsection
@section('main')
<div class="box">
    <div class="box-header">
      
{{-- <a href="{{ route('feedback.create') }}" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a> --}}
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped" style="min-width: 100%">
        <thead>
        <tr>
          <th>No</th>
          <th>name</th>
          <th>email</th>
          <th>message</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($feedback as $key=>$item )
                 <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->message }}</td>
                <td>
                {{-- <div class="form-group" style="display: flex">
                <a href="{{ route('feedback.edit', $item->id) }}" type="submit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> --}}
                 @if (checkPermission('delete_feedback')) 
                 <form action="{{ route('feedback.destroy', $item->id) }}" style="padding-left: 10px" method="POST" onsubmit="return confirm('Yakin menghapus data ini ?')">
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
          <th>name</th>
          <th>email</th>
          <th>message</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection