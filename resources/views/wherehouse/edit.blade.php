
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Ruangan
        <small>Ruangan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Ruangan</li>
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
            <form method="POST" action="{{ route('wherehouses.update',$wherehouse->id) }}">
                @method('put')
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Ruangan</label>
                  <input type="text" value="{{ $wherehouse->title }}" class="form-control" name="title" id="exampleInputName" placeholder="Masukan Kategori" required>
                  @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">User</label>
                <select class="form-control" name="user_id">
                    <option value="">-- pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if($user->id === $wherehouse->user_id) selected @endif>{{ $user->name ." | ". $user->role->name }}</option>
                    @endforeach
                </select>
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