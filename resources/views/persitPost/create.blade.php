
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Tambah Persit Post
        <small>Persit Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Persit Post</li>
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
            <form method="POST" action="{{ route('persit-posts.store') }}" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInput">Judul</label>
                  <input type="text" class="form-control" name="title" id="exampleInput" placeholder="Masukan Judul" required>
                   @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <input type="file" name="img_url" id="exampleInputFile">
                  <p class="help-block">gambar berupa jpg/png/jpeg.</p>
                </div>

            <label for="exampleInput">Konten</label>  
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="content" rows="10" cols="80">
                            
                    </textarea>
            </div>



              <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="status"> Published
                      </label>
                    </div>
                </div>

              </div>
              <!-- /.box-body -->

              

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
@endsection