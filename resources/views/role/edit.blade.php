
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Role
        <small>Role</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Role</li>
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
            <form method="POST" action="{{ route('roles.update',$role->id) }}">
                @method('put')
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Role</label>
                  <input type="text" class="form-control" value="{{ $role->name }}" name="name" id="exampleInputName" placeholder="Masukan Role" required>
                   @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                 <div class="form-group">
                <label>Permission</label>
                <select class="form-control select2" name="permissions[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}" @if(in_array($permission->id,$selectedPermissions)) selected @endif>{{ $permission->name }}</option>
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