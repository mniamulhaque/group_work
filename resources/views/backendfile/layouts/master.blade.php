<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('backend_assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('backend_assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend_assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('backend_assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('backend_assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('backend_assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Employee</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/sobemployee')}}" class="dropdown-item">All Employee</a>
                            <a href="{{url('/contentInspect')}}" class="dropdown-item">Content Instractor</a>
                            <a href="{{url('/memberInspect')}}" class="dropdown-item">Member Instractor</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Content helper</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/contentCreator')}}" class="dropdown-item">Content Creator</a>
                            <a href="{{url('/contentCheckerPost')}}" class="dropdown-item">Content Check & Post</a>
                        </div>
                    </div>
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Member</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/allMember')}}" class="dropdown-item">All Member</a>
                            <a href="{{url('/deactiveMember')}}" class="dropdown-item">Deactive Members</a>
                            <a href="{{url('/silverMember')}}" class="dropdown-item">Silver Member</a>
                            <a href="{{url('/goldMember')}}" class="dropdown-item">Gold Member</a>
                            <a href="{{url('/platinumMember')}}" class="dropdown-item">Platinam Member</a>
                        </div>
                    </div>
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Contents</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/uploadWorks')}}" class="dropdown-item">Add Work</a>
                            <a href="{{url('/workList')}}" class="dropdown-item">Work List</a>
                            <a href="{{url('workListByDay')}}" class="dropdown-item">Work List By Day</a>
                            <a href="{{url('memberWorkingCheck')}}" class="dropdown-item">Member Working Check</a>
                        </div>
                    </div>
                    <a href="{{url('/postajob')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Post A Job</a>
                    <a href="{{url('/findajob')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Find Job</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>My Works</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/myWorkView')}}" class="dropdown-item">Today Work</a>
                            <a href="{{url('/optionalWorkView')}}" class="dropdown-item">Optional Work</a>
                            <a href="typography.html" class="dropdown-item">My Work View</a>
                            <a href="element.html" class="dropdown-item">Warning & Reject</a>
                            <a href="element.html" class="dropdown-item">Income & Withdraw</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>My Reffers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/refDetails')}}" class="dropdown-item">Link & Refer Details</a>
                            <a href="{{url('/refMembersView')}}" class="dropdown-item">Ref Members</a>
                            <a href="{{url('/refGraphicalView')}}" class="dropdown-item">Ref. Graphical View</a>
                            <a href="element.html" class="dropdown-item">Deactive Members</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#" class="nav-link">
                            <div class="coinn">
                                 @php
                                    $proData = App\Models\profwork::where('completed_code',1)->where('user_id',1)->where('add_show_quantity','>',0)->get();
                                 @endphp
                                 <img class="" src="{{asset('backend_assets/img/dollar-coin.png')}}" alt="" style="width: 20px; height: 20px;">
                                <span class="p-1 fw-bold text-primary">999999</span>
                            </div>
                        </a>
                        <a href="#" class="nav-link">
                            <div class="coinn">
                                 @php
                                    $proData = App\Models\profwork::where('completed_code',1)->where('user_id',1)->where('add_show_quantity','>',0)->get();
                                 @endphp
                                 <img class="rounded-circle" src="{{asset('backend_assets/img/dollar-coin.png')}}" alt="" style="width: 20px; height: 20px;">
                                <span class="d-lg-inline-flex p-1 fw-bold text-primary">5555555</span>
                            </div>
                        </a>
                <div class="navbar-nav align-items-center ms-auto">
                        
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('backend_assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{url('/userprofile')}}" class="dropdown-item">My Profile</a>
                            <a href="{{url('/Withdraw')}}" class="dropdown-item">Widthdraw</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @yield('body')

             <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
   

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script type="text/javascript">
        new DataTable('#myTable');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend_assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('backend_assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('backend_assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('backend_assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('backend_assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('backend_assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('backend_assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('backend_assets/js/main.js')}}"></script>
</body>

</html>