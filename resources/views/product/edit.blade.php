
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Produk
        <small>Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Produk</li>
        <li class="active">Edit</li>
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
              <h3 class="box-title">Form Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @method('put')
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Nama</label>
                  <input type="text" value="{{ $product->name }}" class="form-control" name="name" id="exampleInputName" placeholder="Masukan Serial Number" required>
                   @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Serial Number</label>
                  <input type="text" value="{{ $product->serial_number }}" class="form-control" name="serial_number" id="exampleInputName" placeholder="Masukan Serial Number" required>
                   @error('serial_number')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                 <div class="form-group">
                  <label for="exampleInputName">Year</label>
                  {{-- <input type="year" class="form-control" name="year" id="exampleInputName" placeholder="Masukan tahun" required> --}}
                   <input type="number" class="form-control" name="year" value="{{ $product->year }}" placeholder="YYYY" min="1999" max="2050">
                  <script>
                      document.querySelector("input[type=number]")
                      .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                  </script>
                   @error('year')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Kategori</label>
                <select class="form-control" name="category_product_id">
                    <option value="">-- pilih kategori --</option>
                    @foreach ($categoryProducts as $categoryProduct)
                        <option value="{{ $categoryProduct->id }}" @if($product->category_product_id === $categoryProduct->id) selected @endif >{{ $categoryProduct->title }}</option>
                    @endforeach
                </select>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Gudang</label>
                <select class="form-control" name="wherehouse_id">
                    <option value="">-- pilih Gudang --</option>
                    @foreach ($wherehouses as $wherehouse)
                        <option value="{{ $wherehouse->id }}" @if($product->wherehouse_id === $wherehouse->id) selected @endif >{{ $wherehouse->title }}</option>
                    @endforeach
                </select>
                </div>
              </div>

              <div class="form-group">
                  <label for="exampleInputName">Deskripsi</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                   @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status1" value="B" @if($product->status === "B") checked @endif>
                      Baik
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status2" value="RR" @if($product->status === "RR") checked @endif>
                      Rusak Ringan
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status3" value="RB" @if($product->status === "RB") checked @endif>
                      Rusak Berat
                    </label>
                  </div>
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