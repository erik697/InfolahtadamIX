
@extends('adminTemplate.master')
@section('uri')
   <h1>
        Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Barang</li>
      </ol>
@endsection
@section('main')
<div class="box">
   @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif
    <div class="box-header">
      @if (checkPermission('create_barang'))
      <a href="{{ route('products.create') }}" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a>
      <a href="{{ route('products.importExcel') }}" type="submit" class="btn btn-info"><i class="fa fa-upload" aria-hidden="true"></i> Import</a>
      <a href="{{ route('products.exportExcelProcess') }}" type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export to Excel</a>
                 @endif
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped " style="min-width: 100%">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kategori</th>
          <th>Serial Number</th>
          <th>Gudang</th>
          <th>Status</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($products as $key=>$item )
                 <td>{{ $key+1 }}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->categoryProduct->title }}</td>
                <td>{{ $item->serial_number }}</td>
                <td>{{ $item->wherehouse->title }}</td>
                <td>
                  @if ($item->status === 'B')
                  <p class="btn btn-success">{{ $item->status }}</p></td>
                  @elseif ($item->status === 'RR')
                  <p class="btn btn-warning">{{ $item->status }}</p></td>
                  @else
                  <p class="btn btn-danger">{{ $item->status }}</p></td>
                  @endif
                <td>{{ $item->description }}</td>
                <td>
                <div class="form-group" style="display: flex">
                  @if (checkPermission('read_barang'))
                  <div class="" style="padding-right: 10px">
                    <a href="{{ route('products.show', $item->id) }}" type="submit" class="btn btn-success" ><i class="fa fa-eye" aria-hidden="true"></i> History</a>
                  </div>
                 @endif
                  @if (checkPermission('update_barang'))
                  <a href="{{ route('products.edit', $item->id) }}" type="submit" class="btn btn-warning" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                 @endif
                @if (checkPermission('delete_barang'))  
                <form action="{{ route('products.destroy', $item->id) }}" style="padding-left: 10px" method="POST" onsubmit="return confirm('Yakin menghapus data ini ?')">
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
          <th>Nama</th>
          <th>Kategori</th>
          <th>Serial Number</th>
          <th>Gudang</th>
          <th>Status</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection