
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Import Produk
        <small>Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Produk</li>
        <li class="active">Import</li>
      </ol>
@endsection
@section('main')
<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Import</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('products.importExcelProcess') }}" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group">
                      <label for="exampleInputFile">Excel</label>
                      <input type="file" name="excel" id="exampleInputFile">
                      <p class="help-block">gambar berupa Excel.</p>
                    </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
@endsection