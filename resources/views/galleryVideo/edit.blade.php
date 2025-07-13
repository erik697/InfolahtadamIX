
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Gallery Video
        <small>Gallery Video</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Gallery Video</li>
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
            <form method="POST" action="{{ route('gallery-videos.update', $galleryVideo->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
              <div class="box-body">
                           <video width="300" height="200" controls>
  <source src="{{ asset('') }}/Gallery/Videos/{{ $galleryVideo->url }}" type="video/mp4">
  {{-- Your browser does not support the video tag. --}}
</video>
                {{-- <img src="{{ asset('') }}/Gallery/videos/{{ $galleryVideo->url }}" width="100" height="100" alt=""> --}}
                <input type="hidden" name="img_url_old" value="{{ $galleryVideo->url }}">
                  <div class="form-group">
                      <label for="exampleInputFile">Video</label>
                      <input type="file" name="img_url" id="exampleInputFile">
                      <p class="help-block">Video berupa jpg/png/jpeg.</p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName">Judul</label>
                      <input type="text" value="{{ $galleryVideo->title }}" class="form-control" name="title" id="exampleInputName" placeholder="Masukan Akun" required>
                       @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                <div class="form-group">
                  <label for="exampleInputName">Deskripsi</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $galleryVideo->description }}</textarea>
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