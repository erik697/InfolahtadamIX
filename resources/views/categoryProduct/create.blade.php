
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Tambah Kategori
        <small>Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">pengelolaan barang</li>
        <li class="active">Kategori</li>
        <li class="active">Tambah</li>
      </ol>
@endsection
@section('main')
<div class="col-md-12">
    @error('name')
          <div class="text-danger">{{ $message }}</div>
          @enderror  
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('category-products.store') }}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Kategori</label>
                  <input type="text" class="form-control" name="title" id="exampleInputName" placeholder="Masukan Kategori" required>
                   @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Kategori Induk</label>
                <select class="form-control" name="parent_id">
                    <option value="">-- pilih kategori --</option>
                    @foreach ($categoryProducts as $categoryProduct)
                        <option value="{{ $categoryProduct->id }}">{{ $categoryProduct->title }}</option>
                    @endforeach
                </select>
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