
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Persit Gambar
        <small>Persit Gambar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Persit Gambar</li>
        <li class="active">Edit</li>
      </ol>
@endsection
@section('main')
<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('persit-images.update', $persitImage->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
              <div class="box-body">
                  
                <img src="{{ asset('') }}/ImagePersitPost/{{ $persitImage->url }}" width="100" height="100" alt="">
                <input type="hidden" name="img_url_old" value="{{ $persitImage->url }}">
                  <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <input type="file" name="img_url" id="exampleInputFile">
                      <p class="help-block">gambar berupa jpg/png/jpeg.</p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName">Judul</label>
                      <input type="text" value="{{ $persitImage->title }}" class="form-control" name="title" id="exampleInputName" placeholder="Masukan Akun" required>
                       @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                <div class="form-group">
                  <label for="exampleInputName">Deskripsi</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $persitImage->description }}</textarea>
                   @error('description')
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