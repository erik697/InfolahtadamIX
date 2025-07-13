
@extends('adminTemplate.master')
@section('uri')
   <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa fa-folder"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
@endsection
@section('main')
<section class="content">
        <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

        <div class="col-md-12">
                          <p class="text-center">
                            <strong>Report Completion</strong>
                          </p>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">Report</span>
                            <span class="progress-number"><b>{{ $cReportD }}</b>/{{ $cReportD+$cReportP }}</span>

                            <div class="progress">
                              <div class="progress-bar {{ $cReportD >= $cReportD+$cReportP ? 'progress-bar-aqua' : 'progress-bar-yellow'}} " style="width:{{($cReportD+$cReportP) > 0 ? (($cReportD / ($cReportD+$cReportP)) * 100)  : 100 }}%">{{($cReportD+$cReportP) ? (($cReportD / ($cReportD+$cReportP)) * 100) : 100 }}%</div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                        </div>
                </section>
              </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $cPost }}</h3>

              <p>Berita Umum</p>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="{{ route('posts.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $cImage }}</h3>

              <p>Gallery Gambar</p>
            </div>
            <div class="icon">
              <i class="fa fa-camera-retro"></i>
            </div>
            <a href="{{ route('gallery-images.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $cVideo }}</h3>

              <p>Gallery Video</p>
            </div>
            <div class="icon">
              <i class="fa fa-camera-retro"></i>
            </div>
            <a href="{{ route('gallery-videos.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $cPersitPost }}</h3>

              <p>Berita Persit</p>
            </div>
            <div class="icon">
              <i class="fa fa-angle-left pull-right"></i>
            </div>
            <a href="{{ route('persit-posts.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $cProduct }}</h3>

              <p>Barang</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $cReport }}</h3>

              <p>Report</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="{{ route('reports.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $cSchedule }}</h3>

              <p>Agenda</p>
            </div>
            <div class="icon">
              <i class="fa fa-th"></i>
            </div>
            <a href="{{ route('schedules.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $cWherehouse }}</h3>

              <p>Gudang</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="{{ route('wherehouses.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

    </section>
@endsection
