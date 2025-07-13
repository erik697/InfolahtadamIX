
@extends('adminTemplate.master')
@section('uri')
      <h1>
        Edit Report
        <small>Report</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Report</li>
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
            <form method="POST" action="{{ route('reports.update', $report->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
              <div class="box-body">
                  <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <input type="file" name="img_url" id="exampleInputFile">
                      <p class="help-block">gambar berupa jpg/png/jpeg.</p>
                    </div>


                 <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status1" value="B" checked>
                      Baik
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status3" value="RB">
                      Rusak Berat
                    </label>
                  </div>
                </div>
                    
                <div class="form-group">
                  <label for="exampleInputName">Pesan</label>
                  <textarea name="message" class="form-control" id="" cols="30" rows="10">{{ $report->message }}</textarea>
                   @error('message')
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