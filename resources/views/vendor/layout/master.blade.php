<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Vendor | @yield('title')</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('public/admin')}}/assets/images/favicon.ico" />
      <link rel="stylesheet" href="{{asset('public/admin')}}/assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="{{asset('public/admin')}}/assets/css/backend.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
      <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
      <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">
       
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <!--extra datatables css for export csv button-->
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">  
    <!-- DataTables End-->
       
   </head>
   <body class="  ">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper" style="background: url({{asset('public/admin')}}/assets/images/background.png); background-attachment: fixed; background-size: cover; ">
         <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center">
               <a href="{{route('vendor_dashboard')}}" class="header-logo">
                  <img src="{{asset('public/admin')}}/assets/images/logo.png" alt="logo">
                  <h2 class=" light-logo">GLARE v</h2>
               </a>
               <div class="iq-menu-bt-sidebar ml-0">
                  <i class="las la-bars wrapper-menu"></i>
               </div>
            </div>
            
          @include('vendor/layout/left_sidebar')   
           
         </div>
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                     <i class="ri-menu-line wrapper-menu"></i>
                     <a href="{{route('vendor_dashboard')}}" class="header-logo">
                        <h4 class="logo-title text-uppercase">GLARE</h4>
                     </a>
                  </div>
                  <div class="navbar-breadcrumb">
                     <h2 class="ml-2">Welcome back,  {{Auth::user()->name}} <sup><i style="font-size:10px">{{Auth::user()->type}}</i></sup> </h2>
                  </div>
                  <div class="d-flex align-items-center">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                     <i class="ri-menu-3-line"></i>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                           <li class="nav-item nav-icon search-content">
                              <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ri-search-line"></i>
                              </a>
                              <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                 <form action="#" class="searchbox p-2">
                                    <div class="form-group mb-0 position-relative">
                                       <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                       <a href="#" class="search-link"><i class="las la-search"></i></a>
                                    </div>
                                 </form>
                              </div>
                           </li>
                           <li class="nav-item nav-icon nav-item-icon dropdown">
                              <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    height="20px" width="20px">
                                    <path
                                       d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                 </svg>
                                 <span class="bg-secondary dots "></span>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                       <div class="cust-title p-3">
                                          <div class="d-flex align-items-center justify-content-between">
                                             <h5 class="mb-0">Notifications</h5>
                                             <a class="badge badge-primary badge-card" href="#">3</a>
                                          </div>
                                       </div>
                                       <div class="px-3 pt-0 pb-0 sub-card">
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center cust-card py-3 border-bottom">
                                                <div class="">
                                                   <img class="avatar-50 rounded-small" src="{{asset('public/admin')}}/assets/images/user/6.png" alt="01">
                                                </div>
                                                <div class="media-body ml-3">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <h6 class="mb-0">Emma Watson</h6>
                                                      <small class="text-dark"><b>12 : 47 pm</b></small>
                                                   </div>
                                                   <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center cust-card py-3 border-bottom">
                                                <div class="">
                                                   <img class="avatar-50 rounded-small" src="{{asset('public/admin')}}/assets/images/user/7.png" alt="02">
                                                </div>
                                                <div class="media-body ml-3">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <h6 class="mb-0">Ashlynn Franci</h6>
                                                      <small class="text-dark"><b>11 : 30 pm</b></small>
                                                   </div>
                                                   <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center cust-card py-3">
                                                <div class="">
                                                   <img class="avatar-50 rounded-small" src="{{asset('public/admin')}}/assets/images/user/08.png" alt="03">
                                                </div>
                                                <div class="media-body ml-3">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <h6 class="mb-0">Kianna Carder</h6>
                                                      <small class="text-dark"><b>11 : 21 pm</b></small>
                                                   </div>
                                                   <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                       <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                       View All
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item nav-icon dropdown caption-content">
                              <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <img src="{{asset('public/admin')}}/assets/images/user/1.jpg" class="img-fluid rounded" alt="user">
                                 <div class="caption ml-3">
                                    <h6 class="mb-0 line-height">
                                       {{Auth::user()->name}}
                                       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                          fill="currentColor" height="20px" width="20px">
                                          <path fill-rule="evenodd"
                                             d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                             clip-rule="evenodd" />
                                       </svg>
                                    </h6>
                                 </div>
                              </a>
                              <div class="iq-sub-dropdown dropdown-menu mt-2" aria-labelledby="dropdownMenuButton4">
                                 <div class="card mb-0">
                                    <div class="card-body">
                                       <div class="profile-header">
                                          <div class="cover-container text-center">
                                             <div class="rounded-circle profile-icon bg-primary mx-auto d-block" style="text-transform: uppercase"> {{substr(Auth::user()->name,0,1)}}
                                             </div>
                                             <div class="profile-detail mt-3">
                                                <h5><a href="#"> {{Auth::user()->name}}  </a>
                                                </h5>
                                                <p>  {{Auth::user()->email}}  </p>
                                             </div>
                                             <!--<a href="auth-sign-in.html" class="btn btn-primary">Sign Out f</a>-->
                                             <a class="btn btn-primary" href="{{ route('vendor.logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"> <i class="ti-power-off text-primary"></i> Sign Out</a>
                                             <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" class="d-none">
                                                @csrf
                                             </form>
                                          </div>
                                           
                                          
                                           
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div class="content-page" >
            <div class="container-fluid"  >
               @yield('body')
            </div>
            <!-- Page end  -->
         </div>
         <footer class="iq-footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6">
                     <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 text-right">
                     <span class="mr-1">
                        <script>document.write(new Date().getFullYear())</script>©
                     </span>
                     <a href="#" class="">Glare</a>.
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <!-- Wrapper End-->
      <!-- Backend Bundle JavaScript -->
      <script src="{{asset('public/admin')}}/assets/js/backend-bundle.min.js"></script>
      <!-- Table Treeview JavaScript -->
      <script src="{{asset('public/admin')}}/assets/js/table-treeview.js"></script>
      <!-- Chart Custom JavaScript -->
      <script async src="{{asset('public/admin')}}/assets/js/chart-custom.js"></script>
      <script src="{{asset('public/admin')}}/assets/js/charts/01.js"></script>
      <script src="{{asset('public/admin')}}/assets/js/charts/02.js"></script>
      <!-- Chart Custom JavaScript -->
      <script async src="{{asset('public/admin')}}/assets/js/slider.js"></script>
      <!-- app JavaScript -->
      <script src="{{asset('public/admin')}}/assets/js/app.js"></script> 
       
        <!-- DataTables --> 
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script> 

        <!--extra datatable js for export excel or csv etc-->
        <script src="//cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
        <!-- DataTables End--> 

        <!-- Notify.min.js for notification -->
        <script src="https://www.gazingtechnosoft.com/erp/public/template/dist/js/notify.min.js"></script>
        <!-- sweetalert.min.js for notification -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $.notify.defaults({globalPosition: 'top center'})
        </script>
      @stack('scripts') 
   </body>
</html>