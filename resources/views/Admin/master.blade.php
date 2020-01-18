<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>کاج یوتاب </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/font/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/css/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/css/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/css/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/css/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/css/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/css/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="/css/custom-style.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <div style="float:left; margin-top:15px;margin-left:50px">
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button class="btn btn-xs btn-warning">خروج از حساب کاربری</button>
  </form>
  </div>
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">خانه</a>
      </li>
     
    </ul>
   

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     
      <span class="brand-text font-weight-light"">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
     
        <div>
          <a href="/"><img src="/blog/img/logo-notext-110.png" style="padding-right: 59px;" alt=""></a>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            
            {{-- <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  ویجت‌ها
                  <span class="right badge badge-danger">جدید</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  چارت‌ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار ChartJS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Flot</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Inline</p>
                  </a>
                </li>
              </ul>
            </li> --}}
          
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  صفحه ی اصلی 
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="{{Route('personnel.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>درباره ی پرسنل</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{Route('sample.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمونه کار</p>
                  </a>
                </li>
               
                <
              </ul>
            </li>
            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                 ایجاد محتوا
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{Route('content.create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن محتوا</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{Route('content.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش محتوا</p>
                  </a>
                </li>
                
              </ul>
              <li class="nav-item">
                <a href="{{route('order.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-envelope-o"></i>
                  <p>
                   سفارشات
                    
                  </p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>
                 دسته بندی
                    
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('us.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                   ارتباط با ما
                    
                  </p>
                </a>
              </li>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container ">
       @yield('content')
    </div>
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('sweetalert::alert')

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/js/bootstrap.bundle.min.js"></script>


<!-- Morris.js charts -->
<script src="/js/raphael-min.js"></script>
{{-- <script src="/js/morris.min.js"></script> --}}
<!-- Sparkline -->
<script src="/js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/js/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="/js/moment.min.js"></script>
<script src="/js/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/js/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/demo.js"></script>
@yield('script')


</body>
</html>
