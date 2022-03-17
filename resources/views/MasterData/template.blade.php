<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?=  URL::to('/');  ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=  URL::to('/');  ?>/assets/images/favicon.png" type="image/x-icon">
    <title>Log Data Centre | SOC DMI</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/feather-icon.css">
    
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/datatables.css">

    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?=  URL::to('/');  ?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=  URL::to('/');  ?>/assets/css/responsive.css">
  </head>
  <body>
    {{-- Khulafaur Rasyidin (khulafaur@rasyid.in) --}}
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            {{-- <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?=  URL::to('/');  ?>/assets/images/logo/logo.png" alt=""></a></div> --}}
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?=  URL::to('/');  ?>/assets/images/logo/dark-logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              
             
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="{{ URL('logout') }}"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?=  URL::to('/');  ?>/assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">SOC - DMI</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">SOC Team</h6></a>
            <p class="mb-0 font-roboto">Satgas Manajemen Kemanan</p>
            {{-- <ul>
              <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
              </li>
              <li><span>2 year</span>
                <p>Experince</p>
              </li>
              <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
              </li>
            </ul> --}}
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  {{-- <li class="sidebar-main-title">
                    <div>
                      <h6>General             </h6>
                    </div>
                  </li> --}}
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= URL::to('/'); ?>"><i data-feather="home"></i><span>Dashboard</span></a>
                  </li>
          
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Master Data</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="<?= URL::to('registervendor'); ?>">Input Vendor</a></li>
                      <li><a href="<?= URL::to('kelolavendor'); ?>">Kelola Vendor</a></li>
                      <li><a href="<?= URL::to('registerpic'); ?>">Input PIC</a></li>
                      <li><a href="<?= URL::to('kelolapic'); ?>">Kelola PIC</a></li>
                    </ul>
                  </li>
                  
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= URL::to('visitors'); ?>"><i data-feather="home"></i><span>Data Pengunjung</span></a>
                  </li>

                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= URL::to('barcode'); ?>"><i data-feather="fa fa-barcode"></i><span>Barcode/QRCode</span></a>
                  </li>

                  <li><a class="nav-link menu-title link-nav" href="<?= URL::to('accesscontrol'); ?>"><i data-feather="headphones"></i><span>Kelola Akses</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="#"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
        
        @yield('content')

        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Direktorat Manajemen Informasi.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Satgas Manajemen Kemanan IT <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?=  URL::to('/');  ?>/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    
    <script src="<?=  URL::to('/');  ?>/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?=  URL::to('/');  ?>/assets/js/sidebar-menu.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="<?=  URL::to('/');  ?>/assets/js/bootstrap/popper.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/bootstrap/bootstrap.min.js"></script>

    <script src="<?=  URL::to('/');  ?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/tooltip-init.js"></script>


    <!-- Plugins JS start-->
    <script src="<?=  URL::to('/');  ?>/assets/js/chart/chartist/chartist.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/chart/knob/knob.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/chart/knob/knob-chart.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/prism/prism.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/clipboard/clipboard.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/counter/counter-custom.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/custom-card/custom-card.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/dashboard/default.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/notify/index.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?=  URL::to('/');  ?>/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?=  URL::to('/');  ?>/assets/js/script.js"></script>
    {{-- <script src="<?=  URL::to('/');  ?>/assets/js/theme-customizer/customizer.js"></script> --}}
    <!-- login js-->
    <!-- Plugin used-->
    {{-- Khulafaur Rasyidin (khulafaur@rasyid.in) --}}
  </body>
</html>