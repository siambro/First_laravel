<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
 -->
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- Font Awesome -->
      
    <link rel="stylesheet" href="{{ asset('Templete/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Templete/dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Google Font: Source Sans Pro -->

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/select2/select2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Templete/dist/css/adminlte.min.css') }}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('Templete/plugins/datatables/dataTables.bootstrap4.min.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini ">
    <div id="app">
        <div class="wrapper">

            @guest
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li> -->
            @else
            
            <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
                                                    
                    <ul class="navbar-nav">
                        
                      <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                      </li>
                      <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                      </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                      <!-- Messages Dropdown Menu -->
                      <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }} 
                        </a>
                        
                      </li>
                      <!-- Notifications Dropdown Menu -->
                      <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                          <i class="fa fa-th-large"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                          <span class="dropdown-item dropdown-header">{{ Auth::user()->name }} </span>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                            <i class="fa fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </div>
                      </li>
                </ul>
            </nav>
          <!-- /.navbar -->

            
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{URL::to('/index')}}" class="brand-link">
                  <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                       style="opacity: .8"> -->
                  <span class="brand-text font-weight-light">Dhaka Motors</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                  <!-- Sidebar user panel (optional) -->
                  <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                      <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                  </div> -->

                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                      <li class="nav-item has-treeview menu-open">
                        <a href="{{URL::to('/index')}}" class="nav-link ">
                          <i class="nav-icon fa fa-dashboard"></i>
                          <p>
                            Dashboard
                            <!-- <i class="right fa fa-angle-left"></i> -->
                          </p>
                        </a>
                        <!-- <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>Dashboard v1</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>Dashboard v2</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>Dashboard v3</p>
                            </a>
                          </li>
                        </ul> -->
                      </li>

                      <li class="nav-header">Sale</li>
                     
                      <li class="nav-item ">
                        <a href="{{URL::to('/saleMotorcycle')}}" class="nav-link">
                          <!-- <i class="nav-icon fa fa-table"></i> -->
                          <i class="nav-icon fa fa-pie-chart"></i>
                          <p>
                            Motorcycle
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                        
                      </li>
                      <li class="nav-item ">
                        <a href="{{URL::to('/saleParts')}}" class="nav-link">
                          <!-- <i class="nav-icon fa fa-table"></i> -->
                          <i class="nav-icon fa fa-pie-chart"></i>
                          <p>
                            Parts
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                        
                      </li>
                      <li class="nav-item ">
                        <a href="#" class="nav-link">
                          <!-- <i class="nav-icon fa fa-table"></i> -->
                          <i class="nav-icon fa fa-pie-chart"></i>
                          <p>
                            Sold Motorcycles
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                        
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <!-- <i class="nav-icon fa fa-table"></i> -->
                          <i class="nav-icon fa fa-pie-chart"></i>
                          <p>
                            Sold Parts
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                        
                      </li>
                      <li class="nav-header">Service</li>
                     
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <!-- <i class="nav-icon fa fa-table"></i> -->
                          <i class="nav-icon fa fa-tree"></i>
                         
                          <p>
                            Free
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <!-- <i class="nav-icon fa fa-table"></i> -->
                          <i class="nav-icon fa fa-tree"></i>
                          <p>
                            Paid
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                      </li>

                      <li class="nav-header">Pre-Booking</li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-edit"></i>
                          <p>
                            Book
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-edit"></i>
                          <p>
                            List
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-edit"></i>
                          <p>
                            Sales
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                      </li>

                      <li class="nav-header">Distribution</li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-table"></i>
                          <p>
                            Distribute
                            <!-- <i class="fa fa-angle-left right"></i> -->
                          </p>
                        </a>
                        
                      </li>
                      <!-- <li class="nav-header">EXAMPLES</li> -->
                      
                    </ul>
                  </nav>
                  <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
              </aside>

            @endguest

            <!-- <main class="py-4"> -->
            @yield('content')
           <!--  </main> -->

           
            @guest

            @else
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                <b>Manager</b>
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>
            @endguest

        </div>

    </div>

<!-- jQuery -->
<script src="{{ asset('Templete/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Templete/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('Templete/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('Templete/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('Templete/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('Templete/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('Templete/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('Templete/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('Templete/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('Templete/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('Templete/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('Templete/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Templete/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('Templete/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('Templete/dist/js/demo.js') }}"></script>

<script src="{{ asset('Templete/dist/js/pages/dashboard2.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('Templete/plugins/iCheck/icheck.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('Templete/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('Templete/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('Templete/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('Templete/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('Templete/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('Templete/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Templete/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker         : true,
      timePickerIncrement: 30,
      format             : 'MM/DD/YYYY h:mm A'
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
