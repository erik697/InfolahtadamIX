
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Permission
        <small>Permission</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Permission</li>
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
            <form method="POST" action="{{ route('permissions.update',$permission->id) }}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Permission</label>
                  <input type="text" class="form-control" value="{{ $permission->name }}" name="name" id="exampleInputName" placeholder="Masukan Permission" required>
                   @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
@endsection