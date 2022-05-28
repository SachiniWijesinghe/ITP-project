<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    </ul>
  </nav>
 
  <!-- /.navbar -->

       <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
   <h4 class="brand-link">
     <img src="/images/AdminLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Super Fashion</span>
   </h4>
           <!-- Sidebar -->
           <div class="sidebar">
               <!-- Sidebar user panel (optional) -->


               <!-- Sidebar Menu -->
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-tshirt"></i>
                               <p>
                                   Items
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>


                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-tasks"></i>
                               <p>
                                   order
                                   <!--<span class="badge badge-info right">6</span>-->
                               </p>
                           </a>

                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-receipt"></i>
                               <p>Invoice
                               </p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-user"></i>
                               <p>
                                   Customer
                                   <i class="fas fa-angle-left right"></i>
                                   <!--<span class="badge badge-info right">6</span>-->
                               </p>
                           </a>
                           <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fa fa-users"></i>
                               <p>
                                   User
                                   <i class="fas fa-angle-left right"></i>
                                   <!--<span class="badge badge-info right">6</span>-->
                               </p>
                           </a>
                           <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fa fa-edit"></i>
             <p>
               Website Design
               <i class="fas fa-angle-left right"></i>
                 <!--<span class="badge badge-info right">6</span>-->
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="/contact"class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Contact Us</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="/about" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>About Us</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="/feedback"  class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Feedback</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="/suggestion" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Suggestion</p>
               </a>
             </li>
           </ul>
         </li>
        <li class="nav-item">
           <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-mail-bulk"></i>
                    <p>
                          Website
                     <i class="right fas fa-angle-left"></i>
                         </p>
                           </a>
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-shipping-fast"></i>
                               <p>Delivery
                                   <i class="fas fa-angle-left right"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="#" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Delivery Charges</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </nav>
                <!-- /.sidebar-menu -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    
                 
                </div>
            </div>
        </aside>
        <!-- /.sidebar -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        <h1>Suggestions & Comments List</h1>
                        </div>
                    
                    </div>
                </div>
                
@extends('contacts.layout')
@section('content')

    <div class="container">
        <div class="row">
            
        @if(session('statusD'))
        <h6 class =  "alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss=".show">&times;</button> {{session('statusD')}}</h6>
      @endif
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <br/>
                        <br/>
                   
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                         <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suggestions as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Name }}</td>
                                        <td>{{ $item->Address }}</td>
                                        <td>{{ $item->Phone}}</td>
                                        <td>{{ $item->Email}}</td>
                                        <td>{{ $item->Subject }}</td>
                                        <td>{{ $item->Message}}</td>
 
                                        <td>
                                            <form method="POST" action="{{ url('/suggestion' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete feedback" onclick="return confirm(Confirm)"><i class="fa fa-trash-o" aria-hidden="true">Delete</i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

<!-- footer-->
<footer class="main-footer">
 <strong>Copyright &copy; 2022 <a href="#">Super Fashion</a>.</strong>
    All rights reserved.
  </footer>
<!-- /footer-->
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

</html>



