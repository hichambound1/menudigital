{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dahboard</title>
  <link rel="stylesheet" href="{{asset('dash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('dash/vendors/base/vendor.bundle.base.css')}}">

  <link rel="stylesheet" href="{{asset('dash/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <div class="container-scroller">

    @include('includes.header_dash')

    <div class="container-fluid page-body-wrapper">

        @include('includes.dash_sidebar')

      <div class="main-panel">

        @yield('dash')


        </div>

      </div>

    </div>


    <script src="{{asset('dash/vendors/base/vendor.bundle.base.js')}}"></script>


    <script src="{{asset('dash/vendors/chart.js/Chart.min.js')}}"></script>


    <script src="{{asset('dash/js/off-canvas.js')}}"></script>
    <script src="{{asset('dash/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('dash/js/template.js')}}"></script>
    <script src="{{asset('dash/js/todolist.js')}}"></script>
    <script src="{{asset('js/dropify.js')}}"></script>
    <script >
        $('.dropify').dropify();
    </script>


    <script src="{{asset('dash/js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

     <script>
        $('.delete-confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete ${name}?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>



</body>

  </html>
 --}}
 <!doctype html>
 <html lang="en">


 <!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 10:34:02 GMT -->
 <head>

         <meta charset="utf-8" />
         <title>Dashboard | Minia - Minimal Admin & Dashboard Template</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
         <meta content="Themesbrand" name="author" />
         <!-- App favicon -->
         <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
             <!-- DataTables -->
        <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

         {{-- <!-- plugin css -->
         <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" /> --}}

         <!-- preloader css -->
         <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

         <!-- Bootstrap Css -->
         <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
         <!-- Icons Css -->
         <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- App Css-->
         <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
         @stack('style')
     </head>

     <body>

     <!-- <body data-layout="horizontal"> -->

         <!-- Begin page -->
         <div id="layout-wrapper">


             <header id="page-topbar">
                 <div class="navbar-header">
                     <div class="d-flex">
                         <!-- LOGO -->
                         <div class="navbar-brand-box">
                             <a href="index.html" class="logo logo-dark">
                                 <span class="logo-sm">
                                     <img src="{{asset('assets/images/logo-sm.svg')}}" alt="" height="24">
                                 </span>
                                 <span class="logo-lg">
                                     <img src="{{asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Minia</span>
                                 </span>
                             </a>

                             <a href="index.html" class="logo logo-light">
                                 <span class="logo-sm">
                                     <img src="{{asset('assets/images/logo-sm.svg')}}" alt="" height="24">
                                 </span>
                                 <span class="logo-lg">
                                     <img src="{{asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Minia</span>
                                 </span>
                             </a>
                         </div>

                         <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                             <i class="fa fa-fw fa-bars"></i>
                         </button>


                     </div>
                     <div class="d-flex">

                         <div class="dropdown d-inline-block d-lg-none ms-2">
                             <button type="button" class="btn header-item" id="page-header-search-dropdown"
                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i data-feather="search" class="icon-lg"></i>
                             </button>
                             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                 aria-labelledby="page-header-search-dropdown">

                                 <form class="p-3">
                                     <div class="form-group m-0">
                                         <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                             <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                         <div class="dropdown d-inline-block">
                             <button type="button" class="btn header-item right-bar-toggle me-2">
                                 <i data-feather="settings" class="icon-lg"></i>
                             </button>
                         </div>
                         <div class="dropdown d-inline-block">
                             <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-1.jpg')}}"
                                     alt="Header Avatar">
                                 <span class="d-none d-xl-inline-block ms-1 fw-medium">Shawn L.</span>
                                 <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                             </button>
                             <div class="dropdown-menu dropdown-menu-end">
                                 <!-- item-->
                                 <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                             </div>
                         </div>

                     </div>
                 </div>
             </header>

             <!-- ========== Left Sidebar Start ========== -->
             <div class="vertical-menu">

                 <div data-simplebar class="h-100">

                     <!--- Sidemenu -->
                     <div id="sidebar-menu">
                         <!-- Left Menu Start -->
                         <ul class="metismenu list-unstyled" id="side-menu">
                             <li class="menu-title" data-key="t-menu">Menu</li>

                             <li>
                                 <a href="index.html">
                                     <i data-feather="home"></i>
                                     <span data-key="t-dashboard">Dashboard</span>
                                 </a>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="grid"></i>
                                     <span data-key="t-apps">Apps</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li>
                                         <a href="apps-calendar.html">
                                             <span data-key="t-calendar">Calendar</span>
                                         </a>
                                     </li>

                                     <li>
                                         <a href="apps-chat.html">
                                             <span data-key="t-chat">Chat</span>
                                         </a>
                                     </li>

                                     <li>
                                         <a href="javascript: void(0);" class="has-arrow">
                                             <span data-key="t-email">Email</span>
                                         </a>
                                         <ul class="sub-menu" aria-expanded="false">
                                             <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                             <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                                         </ul>
                                     </li>
                                     <li>
                                         <a href="javascript: void(0);" class="has-arrow">
                                             <span data-key="t-invoices">Invoices</span>
                                         </a>
                                         <ul class="sub-menu" aria-expanded="false">
                                             <li><a href="apps-invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                             <li><a href="apps-invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                                         </ul>
                                     </li>
                                     <li>
                                         <a href="javascript: void(0);" class="has-arrow">
                                             <span data-key="t-contacts">Contacts</span>
                                         </a>
                                         <ul class="sub-menu" aria-expanded="false">
                                             <li><a href="apps-contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                             <li><a href="apps-contacts-list.html" data-key="t-user-list">User List</a></li>
                                             <li><a href="apps-contacts-profile.html" data-key="t-profile">Profile</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="users"></i>
                                     <span data-key="t-authentication">Authentication</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                     <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                     <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                                     <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                     <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                                     <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                     <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                                     <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="file-text"></i>
                                     <span data-key="t-pages">Pages</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                     <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                     <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                     <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                     <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                     <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                     <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                     <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="layouts-horizontal.html">
                                     <i data-feather="layout"></i>
                                     <span data-key="t-horizontal">Horizontal</span>
                                 </a>
                             </li>

                             <li class="menu-title mt-2" data-key="t-components">Elements</li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="briefcase"></i>
                                     <span data-key="t-components">Components</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                     <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                     <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                     <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                     <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                     <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                     <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                     <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                     <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                     <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                     <li><a href="ui-placeholders.html" data-key="t-progress-bars">Placeholders</a></li>
                                     <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                                     <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                     <li><a href="ui-toasts.html" data-key="t-typography">Toasts</a></li>
                                     <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                     <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                     <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="gift"></i>
                                     <span data-key="t-ui-elements">Extended</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                     <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                     <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">SweetAlert 2</a></li>
                                     <li><a href="extended-session-timeout.html" data-key="t-session-timeout">Session Timeout</a></li>
                                     <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                     <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);">
                                     <i data-feather="box"></i>
                                     <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                                     <span data-key="t-forms">Forms</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="form-elements.html" data-key="t-form-elements">Basic Elements</a></li>
                                     <li><a href="form-validation.html" data-key="t-form-validation">Validation</a></li>
                                     <li><a href="form-advanced.html" data-key="t-form-advanced">Advanced Plugins</a></li>
                                     <li><a href="form-editors.html" data-key="t-form-editors">Editors</a></li>
                                     <li><a href="form-uploads.html" data-key="t-form-upload">File Upload</a></li>
                                     <li><a href="form-wizard.html" data-key="t-form-wizard">Wizard</a></li>
                                     <li><a href="form-mask.html" data-key="t-form-mask">Mask</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="sliders"></i>
                                     <span data-key="t-tables">Tables</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="tables-basic.html" data-key="t-basic-tables">Bootstrap Basic</a></li>
                                     <li><a href="tables-datatable.html" data-key="t-data-tables">DataTables</a></li>
                                     <li><a href="tables-responsive.html" data-key="t-responsive-table">Responsive</a></li>
                                     <li><a href="tables-editable.html" data-key="t-editable-table">Editable</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="pie-chart"></i>
                                     <span data-key="t-charts">Charts</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="charts-apex.html" data-key="t-apex-charts">Apexcharts</a></li>
                                     <li><a href="charts-echart.html" data-key="t-e-charts">Echarts</a></li>
                                     <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs</a></li>
                                     <li><a href="charts-knob.html" data-key="t-knob-charts">Jquery Knob</a></li>
                                     <li><a href="charts-sparkline.html" data-key="t-sparkline-charts">Sparkline</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="cpu"></i>
                                     <span data-key="t-icons">Icons</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                     <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                     <li><a href="icons-dripicons.html" data-key="t-dripicons">Dripicons</a></li>
                                     <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="map"></i>
                                     <span data-key="t-maps">Maps</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="maps-google.html" data-key="t-g-maps">Google</a></li>
                                     <li><a href="maps-vector.html" data-key="t-v-maps">Vector</a></li>
                                     <li><a href="maps-leaflet.html" data-key="t-l-maps">Leaflet</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                     <i data-feather="share-2"></i>
                                     <span data-key="t-multi-level">Multi Level</span>
                                 </a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="javascript: void(0);" data-key="t-level-1-1">Level 1.1</a></li>
                                     <li>
                                         <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Level 1.2</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" data-key="t-level-2-1">Level 2.1</a></li>
                                             <li><a href="javascript: void(0);" data-key="t-level-2-2">Level 2.2</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>

                         </ul>

                     </div>
                     <!-- Sidebar -->
                 </div>
             </div>
             <!-- Left Sidebar End -->
             @yield('content')

        </div>
        <!-- END layout-wrapper -->




        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}" ></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{asset('assets/libs/pace-js/pace.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

         <!-- Required datatable js -->
         <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

         <!-- Buttons examples -->
         <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
         <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
         <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
         <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
         <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
         <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
         <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
         <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        {{-- datatable --}}
        <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <!-- dashboard init -->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        {{-- datatable --}}
        <script src="{{asset('assets/js/app.js')}}"></script>


        <script>
            $('#datatable').DataTable();

            $('#datatable2').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            } );
        </script>
       @stack('script')

    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 10:40:21 GMT -->
</html>
