
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Tambah Report
        <small>Report</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Report</li>
        <li class="active">Tambah</li>
      </ol>
@endsection
@section('main')
<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('reports.store') }}" enctype="multipart/form-data">
                @csrf
              <div class="box-body">

                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Barang</label>
                <select class="form-control" name="product_id">
                    <option value="">-- pilih Barang --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->serial_number }} || {{ $product->name }}</option>
                    @endforeach
                </select>
                </div>
              </div>

                           <div class="form-group">
                  <label for="exampleInputName">kendala</label>
                  <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                   @error('message')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
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