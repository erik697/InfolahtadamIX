
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Tambah User
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">User</li>
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
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Nama</label>
                  <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Masukan Nama" required>
                   @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputName" placeholder="Masukan Email" required>
                   @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label for="exampleInputName">password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputName" placeholder="Masukan password" required>
                   @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role_id">
                    @foreach ($roles as $role)
                      <option value="{{ $role->id }}">{{ $role->name }}</option>
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