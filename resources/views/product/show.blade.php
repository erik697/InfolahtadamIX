
@extends('adminTemplate.master')
@section('uri')
   <h1>
        {{ $product->name }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Barang</li>
        <li class="active">History Barang</li>
      </ol>
@endsection
@section('main')
<div class="box">
    <div class="box-header">
      
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped" style="min-width: 100%">
        <thead>
        <tr>
          <th>No</th>
          <th>Ruangan</th>
          <th>User</th>
          <th>Ket.</th>
          <th>Tgl.</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($product->productLogs as $key=>$item )
                 <td>{{ $key+1 }}</td>
                <td>{{ $item->wherehouse->title }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->created_at }}</td>

                </tr>
            @endforeach
         

        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Ruangan</th>
          <th>User</th>
          <th>Ket.</th>
          <th>Tgl.</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection