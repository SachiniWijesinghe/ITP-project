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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">



    <!------------------grt a pdf--------------------------->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HTML-to-PDF Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script>
    function generatePDF() {
      // Choose the element that our invoice is rendered in.
      const element = document.getElementById('invoice');
      // Choose the element and save the PDF for our user.
      html2pdf().from(element).save();
    }
    </script>
    <!----------------------------------------------------->


</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline" name="search" type="" action="customers">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" name="search" type="text" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
            <span class="brand-text font-weight-light">Super Fashion</span>
        </a>

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
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Main Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sub Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Size</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Colors</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Items</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All Items</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Delivery Charges</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>

                                order
                                <i class="fas fa-angle-left right"></i>
                                <!--<span class="badge badge-info right">6</span>-->
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/Dashboard/AdminLTE-3.2.0/pages/Order/return order.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Return order</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    
                    
                    
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
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All Customers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Customer Review</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Privileges</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Search Admin</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Website Design
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home 01</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home 02</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home 3</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home 04</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact Us</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/UI/timeline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About Us</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                                Website
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-shipping-fast"></i>
                            <p>Delivery
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{"/report"}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{"/search"}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Search Order Details</p>
                                </a>    
                            </li>
                            <li class="nav-item">
                                <a href= "{{"/viewPendingDel"}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pending Deliveries</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{"/viewPendingDel"}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All Deliveries</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href={{"chart/"}} class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Chart Report</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
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
                        
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <div class="container">
        <div class="text-container">
            <center><u><h1>Report</h1></u></center>
        </div>
        <!--    <form method="get" action="{{ route('web.search')}}">         -->

        
    
        <form method="get" action="{{ route('web.searchDayForReport')}}"> 
            @csrf
        <div class="mb-3">                      
        <br>
        
        <input type="date" name="date"  class="form-control" id="orderedDate" style="width:400px;" required ><br>
        <input type="submit" class="btn btn-primary" value="search"   >
        
        </div>
         </form>
        
     <hr>

     <!-----------------------------------------get pdf--------------------------------------------------->
<button onclick="generatePDF()">Download as PDF</button>
<div id="invoice">
<h1>Report</h1>
<hr>
   
    <!------------------------------------------------------------------------------------------------------>
       
    @if(isset($values))

    
        <h5><B>Report for the date :{{$searchedvalue}}</B></h5>
        <h6><B>Total Orders For The Day: {{$values}}</B></h6>
    
        <h6><B>Total Sold Items For The Day: {{$totalQTy}}</B></h6>
    
        <h6><B>Total Amount:  RS. {{$totalAmount}}.00</B></h6><br>
        <hr>

        <center><h3>Previous 6 days results</h3></center>
        <hr>
        <h5><B>Report for the date :{{$YESTERDAYIS}}</B></h5>
        <h6><B>Total Orders For The Day: {{$CounntPre1}}</B></h6>
    
        <h6><B>Total Sold Items For The Day: {{$totalQtPre1}}</B></h6>
    
        <h6><B>Total Amount:  RS. {{$AmountPre1}}.00</B></h6>
        <br>

        <hr>
        <h5><B>For the date :{{$previousday2}}</h5>
        <h6><B>Total Orders For The Day: {{$CounntPre2}}</B></h>
    
        <h6><B>Total Sold Items For The Day: {{$totalQtPre2}}</B></h6>
    
        <h6><B>Total Amount :  RS. {{$AmountPre2}}.00</B></h6>
        <br>

        <hr>
        <h5><B>For the date :{{$previousday3}}</B></h5>
        <br>
        <h6><B>Total Orders For The Day  : {{$CounntPre3}}</B></h6>
    
        <h6><B>Total Sold Items For The Day : {{$totalQtPre3}}</B></h6>
    
        <h6><B>Total Amount :  RS. {{$AmountPre3}}.00</B></h6>
        <br>

        <hr>
        <h5><B>For the date :{{$previousday4}}</B></h5>
        <h6><B>Total Orders For The Day : {{$CounntPre4}}</B></h6>
    
        <h6><B>Total Sold Items For The Day : {{$totalQtPre4}}</B></h6>
    
        <h6><B>Total Amount :  RS. {{$AmountPre4}}.00</B></h6>
        <br>

        <hr>
        <h5><B>For the date :{{$previousday5}}</B></h5>
    
        <h6><B>Total Orders For The Day : {{$CounntPre5}}</B></h6>
    
        <h6><B>Total Sold Items For The Day : {{$totalQtPre5}}</B></h6>
    
        <h6><B>Total Amount :  RS. {{$AmountPre5}}.00</B></h6>
        <br>

        <hr>
        <h5><B>For the date :{{$previousday6}}</h5>
    
        <h6><B>Total Orders For The Day: {{$CounntPre6}}</B></h6>
    
        <h6><B>Total Sold Items For The Day : {{$totalQtPre6}}</B></h6>
    
       <h6><B>Total Amount:  RS. {{$AmountPre6}}.00</B></h6>
        <br>
       <hr><hr>
       <h3>Last Seven days Total Orders:{{$T0tal7daysAllOrders}}</h3>
       <h3>Last Seven days Total Sold Items:{{$T0tal7daystotalQty}}</h3>
       <h3>Last Seven days Income :Rs.{{$T0tal7daysAmount}}.00</h3>
       <br>
       <hr>
       <hr>


    
<!------------------------------------------------------------------------------------------------------------>

</center>
    @else
     <tr><td> No Results Found</td></tr>
  
    @endif

</div>



           </div>
            </div>
            <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->

</div>
</body>

</html>
