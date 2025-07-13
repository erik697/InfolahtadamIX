{{--
    @extends('layouts.app')

    @section('content')
        post.edit template
    @endsection
--}}

@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Post
        <small>Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Post</li>
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
            <form method="POST" action="{{ route('persit-posts.update', $persitPost->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInput">Post</label>
                  <input type="text" class="form-control" value="{{ $persitPost->title }}" name="title" id="exampleInput" placeholder="Masukan Post" required>
                   @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <input type="hidden" name="img_url_old" value="{{ $persitPost->img_url }}">
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <input type="file" name="img_url" id="exampleInputFile">
                  <p class="help-block">gambar berupa jpg/png/jpeg.</p>
                </div>

            <label for="exampleInput">Konten</label>  
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="content" rows="10" cols="80">
                            {{ $persitPost->content }}
                    </textarea>
            </div>

              <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="status" @if ($persitPost->status === "Published") checked @endif> Published
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