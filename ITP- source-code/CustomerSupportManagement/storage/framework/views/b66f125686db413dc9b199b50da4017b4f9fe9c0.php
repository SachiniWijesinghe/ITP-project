
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
                        <h1>Update About us details</h1>
                        </div>
                    </div>
                </div>

<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
     
      <form action="<?php echo e(url('about/' .$abouts->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field('Patch'); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($abouts->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" value="<?php echo e($abouts->Name); ?>" class="form-control" required></br>
        <label>Email</label></br>
        <input type="email" name="Email" id="Email" value="<?php echo e($abouts->Email); ?>" class="form-control" required></br>
      
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
  <!-- footer-->
<footer class="main-footer" style="text-align: center;">
 <strong>Copyright &copy; 2022 <a href="#">Super Fashion</a>.</strong>
    All rights reserved.
  </footer>
<!-- /footer-->
</div>
<?php $__env->stopSection(); ?>   


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


<?php echo $__env->make('abouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\INSIGHT\OneDrive\Desktop\addContact\resources\views/abouts/edit.blade.php ENDPATH**/ ?>