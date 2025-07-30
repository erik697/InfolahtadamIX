{{--
    @extends('layouts.app')

    @section('content')
        category.index template
    @endsection
--}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'Admin | infolahta')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/select2/dist/css/select2.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>IX</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INFOLAHTA</b> IX</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          {{-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> --}}
     
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> --}}
              <span class="hidden-xs">
                  {{ Auth::user()->name }}
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}

                <p>
                  {{ Auth::user()->name }}
                  {{-- <small>Member since Nov. 2012</small> --}}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                </div>
                <div class="pull-right">
                   <form action="{{ route('login.logout') }}" method="POST" onsubmit="return confirm('Yakin anda akan keluar dari aplikasi ini ?')">
                                  @csrf
                                  <button type="submit" class="btn btn-default btn-flat"></i> Sign out</button>
                                </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            {{-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> --}}
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      {{-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin IX</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> --}}
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif
        @if (checkPermission('create_report'))
          
        @endif




        <li class="{{ Str::startsWith(Route::currentRouteName(), 'dashboards.') ? "active" : "" }}">
          <a href="{{ route('dashboards.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

         @if (checkPermission('read_beritaUmum') || checkPermission('read_kategori') || checkPermission('read_tags'))
          <li class="{{ Str::startsWith(Route::currentRouteName(), 'posts.') || Str::startsWith(Route::currentRouteName(), 'categories.') || Str::startsWith(Route::currentRouteName(), 'slugs.') ? "active" : "" }} treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if (checkPermission('read_beritaUmum'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'posts.') ? "active" : "" }}"><a href="{{ route('posts.index') }}"><i class="fa fa-circle-o"></i> Post</a></li>
            @endif
            @if (checkPermission('read_kategori'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'categories.') ? "active" : "" }}"><a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i> Kategori</a></li>
            @endif
            @if (checkPermission('read_tags'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'slugs.') ? "active" : "" }}"><a href="{{ route('slugs.index') }}"><i class="fa fa-circle-o"></i> Tags</a></li>
            @endif
          </ul>
        </li>
        @endif
        
         @if (checkPermission('read_pejabat'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'personels.') ? "active" : "" }}">
          <a href="{{ route('personels.index') }}">
            <i class="fa fa-users"></i> <span>Personel</span>
          </a>
        </li>
        @endif

         @if (checkPermission('read_agenda'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'schedules.') ? "active" : "" }}">
          <a href="{{ route('schedules.index') }}">
            <i class="fa fa-th"></i> <span>Agenda</span>
          </a>
        </li>
        @endif

         @if (checkPermission('read_galleryGambar') || checkPermission('read_galleryVideo'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'gallery-images.') || Str::startsWith(Route::currentRouteName(), 'gallery-videos.') ? "active" : "" }} treeview">
          <a href="#">
            <i class="fa fa-camera-retro"></i> <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if (checkPermission('read_galleryGambar'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'gallery-images.') ? "active" : "" }}"><a href="{{ route('gallery-images.index') }}"><i class="fa fa-circle-o"></i> Gambar</a></li>
            @endif
            @if (checkPermission('read_galleryVideo'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'gallery-videos.') ? "active" : "" }}"><a href="{{ route('gallery-videos.index') }}"><i class="fa fa-circle-o"></i> Video</a></li>
            @endif
          </ul>
        </li>
        @endif


        @if (checkPermission('read_feedback'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'feedback.') ? "active" : "" }}">
          <a href="{{ route('feedback.index') }}">
            <i class="fa fa-comments"></i> <span>FeedBack</span>
          </a>
        </li>
        @endif

        @if (checkPermission('read_user') || checkPermission('read_role') || checkPermission('read_permission'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'users.') || Str::startsWith(Route::currentRouteName(), 'roles.') || Str::startsWith(Route::currentRouteName(), 'permissions.') ? "active" : "" }} treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Manajemen User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if (checkPermission('read_user'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'users.') ? "active" : "" }}"><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> User</a></li>
            @endif
            @if (checkPermission('read_role'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'roles.') ? "active" : "" }}"><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Role</a></li>
            @endif
            @if (checkPermission('read_permission'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'permissions.') ? "active" : "" }}"><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i> Permission</a></li>
            @endif
          </ul>
        </li>
        @endif

        @if (checkPermission('read_gudang') || checkPermission('read_barang') || checkPermission('read_kategoriBarang') || checkPermission('read_report'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'wherehouses.') || Str::startsWith(Route::currentRouteName(), 'products.') || Str::startsWith(Route::currentRouteName(), 'category_products.') ? "active" : "" }} treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Manajemen Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          @if (checkPermission('read_gudang'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'wherehouses.') ? "active" : "" }}"><a href="{{ route('wherehouses.index') }}"><i class="fa fa-circle-o"></i> Ruangan</a></li>

          @endif
          @if (checkPermission('read_barang'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'products.') ? "active" : "" }}"><a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i> Barang</a></li>

          @endif
          @if (checkPermission('read_kategoriBarang'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'category-products.') ? "active" : "" }}"><a href="{{ route('category-products.index') }}"><i class="fa fa-circle-o"></i> Kategori</a></li>

          @endif
          @if (checkPermission('read_report'))
            <li class="{{ Str::startsWith(Route::currentRouteName(), 'reports.') ? "active" : "" }}"><a href="{{ route('reports.index') }}"><i class="fa fa-circle-o"></i> Report</a></li>

          @endif

          </ul>
        </li>
        @endif


        @if (checkPermission('read_persitBerita') || checkPermission('read_persitGambar'))
        <li class="{{ Str::startsWith(Route::currentRouteName(), 'persit-posts.') || Str::startsWith(Route::currentRouteName(), 'persit-images.') ? "active" : "" }} treeview">
          <a href="#">
            <i class="fa fa-female"></i> <span>Persit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          @if (checkPermission('read_persitBerita'))
          <li class="{{ Str::startsWith(Route::currentRouteName(), 'persit-posts.') ? "active" : "" }}"><a href="{{ route('persit-posts.index') }}"><i class="fa fa-circle-o"></i> Berita</a></li>
          @endif
          @if (checkPermission('read_persitGambar'))
          <li class="{{ Str::startsWith(Route::currentRouteName(), 'persit-images.') ? "active" : "" }}"><a href="{{ route('persit-images.index') }}"><i class="fa fa-circle-o"></i> Foto</a></li>
          @endif

          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      @yield('uri')
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('main')
    </section>

       
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025 Infolahtadam IX.</strong> All rights
    reserved.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('AdminTemplate/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminTemplate/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminTemplate/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('AdminTemplate/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminTemplate/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('AdminTemplate/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('AdminTemplate/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminTemplate/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('AdminTemplate/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('AdminTemplate/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('AdminTemplate/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminTemplate/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('AdminTemplate/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('AdminTemplate/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('AdminTemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('AdminTemplate/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('AdminTemplate/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminTemplate/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminTemplate/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminTemplate/dist/js/demo.js') }}"></script>

{{-- <script>
  $(function () {
    $('#example1').DataTable({
      'autoWidth'   : true,
      'scrollX': true,
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script> --}}
<!-- Select2 -->
<script src="{{ asset('AdminTemplate/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('AdminTemplate/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{ asset('AdminTemplate/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('AdminTemplate/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- CK Editor -->
<script src="{{ asset('AdminTemplate/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('AdminTemplate/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('AdminTemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1',{
    removeButtons: 'Image,ImageButton,ImageMap',
    // atau kustomisasi toolbar sepenuhnya
    // toolbar: [
    //     { name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
    //     { name: 'paragraph',   items: [ 'NumberedList', 'BulletedList' ] },
    //     { name: 'links',       items: [ 'Link', 'Unlink' ] },
    //     { name: 'tools',       items: [ 'Maximize' ] }
    // ]
})
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()


  })

  $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example1 tfoot th').each(function (i) {
        var title = $('#example1 thead th')
            .eq($(this).index())
            .text();
        $(this).html(
            '<input type="text" placeholder="' + title + '" data-index="' + i + '" />'
        );
    });
 
    // DataTable
    var table = $('#example1').DataTable({
        scrollY: '300px',
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: true
    });
 
    // Filter event handler
    $(table.table().container()).on('keyup', 'tfoot input', function () {
        table
            .column($(this).data('index'))
            .search(this.value)
            .draw();
    });
});
</script>
</body>
</html>
