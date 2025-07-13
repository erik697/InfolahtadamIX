
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Agenda
        <small>Agenda</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Agenda</li>
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
            <form method="POST" action="{{ route('schedules.update', $schedule->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
              <div class="box-body">
                  
                   <input type="hidden" name="img_url_old" value="{{ $schedule->url }}">
                 

                    <div class="form-group">
                      <label for="exampleInputName">Agenda</label>
                      <input type="text" value="{{ $schedule->title }}" class="form-control" name="title" id="exampleInputName" placeholder="Masukan Akun" required>
                       @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                     <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <input type="file" name="img_url" id="exampleInputFile">
                      <p class="help-block">gambar berupa jpg/png/jpeg.</p>
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