
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Tambah Personel
        <small>Personel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Personel</li>
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
            <form method="POST" action="{{ route('personels.store') }}" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Personel</label>
                  <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Masukan Personel" required>
                   @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="form-group">
                  <label for="exampleInputName">NRP</label>
                  <input type="text" class="form-control" name="nrp" id="exampleInputName" placeholder="Masukan Personel" required>
                   @error('nrp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Mulai Kerja</label>
                  <input type="date"  class="form-control" name="period_start" id="exampleInputName" required>
                   @error('period_start')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label for="exampleInputName">Berakhir Kerja</label>
                  <input type="date"  class="form-control" name="period_end" id="exampleInputName" required>
                   @error('period_end')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror 
                </div>

                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="position_id">
                    @foreach ($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="Active">Active</option>
                    <option value="Nonactive">Non Active</option>
                  </select>
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