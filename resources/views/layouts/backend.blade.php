<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://storage.googleapis.com/fg-bucket/favicon.ico">
    <title>Firegorilla</title>
    <link rel="stylesheet" href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extra-libs/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend-style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:image" content="https://storage.googleapis.com/fg-bucket/firegorilla-og.jpg">
    <meta property="og:title" content="Firegorilla">
    <meta property="og:description" content="If you're ready to attract more customers but don't know where to start with Google Ads, Fire Gorilla is your end-to-end solution!">
    <meta property="og:url" content="https://firegorilla.com">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
          <nav class="navbar top-navbar navbar-expand-md navbar-dark">
              <div class="navbar-header">
                  <!-- This is for the sidebar toggle which is visible on mobile only -->
                  <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                      <i class="ti-menu ti-close"></i>
                  </a>
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <a class="navbar-brand" href="/">
                    <div class="backend-logo">
                      <a href="/"><img src="{{ asset('images/logo-dark.svg') }}" alt="Firegorilla"></a>
                    </div>
                  </a>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- Toggle which is visible on mobile only -->
                  <!-- ============================================================== -->
                  <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="ti-more"></i>
                  </a>
              </div>
              <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <div class="navbar-collapse collapse" id="navbarSupportedContent">
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-left mr-auto">
                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-right">
                      <!-- ============================================================== -->
                      <!-- Search -->
                      <!-- ============================================================== -->
                      <li class="nav-item search-box">
                        <a class="dropdown-item" href="{{ route('logout') }}">
                          <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                        </a>
                      </li>
                  </ul>
              </div>
          </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <!-- User Profile-->
                      <li class="nav-small-cap">
                          <i class="mdi mdi-dots-horizontal"></i>
                          <span class="hide-menu">Pages</span>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('business-solutions.edit', 1, false) }}" aria-expanded="false">
                                 <i class="icon-Bar-Chart2"></i>
                              <span class="hide-menu">Business Solutions</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('agency-solutions.edit', 1, false) }}" aria-expanded="false">
                                 <i class="icon-Bar-Chart5"></i>
                              <span class="hide-menu">Agency Solutions</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('nonprofit-solutions.edit', 1, false) }}" aria-expanded="false">
                                 <i class="icon-Line-Chart3"></i>
                              <span class="hide-menu">Nonprofit Solutions</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link" href="javascript:void(0)" href="#" aria-expanded="false">
                              <i class="icon-Bar-Chart4"></i>
                              <span class="hide-menu">Services</span>
                          </a>
                          <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('services.all') }}" class="sidebar-link">
                                    <i class="icon-Record"></i>
                                    <span class="hide-menu"> All Services </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('services.create') }}" class="sidebar-link">
                                    <i class="icon-Record"></i>
                                    <span class="hide-menu"> Add Service </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/servicespage/1/edit" class="sidebar-link">
                                    <i class="icon-Record"></i>
                                    <span class="hide-menu"> Edit Services Page </span>
                                </a>
                            </li>
                          </ul>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Pie-Chart"></i>
                            <span class="hide-menu">Resources</span>
                          </a>
                          <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('resources.all') }}" class="sidebar-link">
                                    <i class="icon-Record"></i>
                                    <span class="hide-menu"> All Resources </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('resources.create') }}" class="sidebar-link">
                                    <i class="icon-Record"></i>
                                    <span class="hide-menu"> Add Resource </span>
                                </a>
                            </li>
                          </ul>
                      </li>

                  </ul>
              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      @yield('content')



    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.dark.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!--c3 charts -->
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <!--chartjs -->
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script> -->

    <!-- <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script> -->
</body>

</html>
