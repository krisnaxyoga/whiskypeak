<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/dashboard_assets/css/styles.css" rel="stylesheet" />
    <link href="/dashboard_assets/cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="/dashboard_assets/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="/images/logo.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script data-search-pseudo-elements defer src="/dashboard_assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script> --}}
     <!-- Favicons -->
    <link href="/niceadmin/img/favicon.png" rel="icon">
    <link href="/niceadmin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/niceadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/niceadmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/niceadmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/niceadmin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/niceadmin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/niceadmin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/niceadmin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/niceadmin/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @stack('style')
    <title>Dashboard</title>
  </head>
    <body style="background: #edf2f7">


        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
      
          <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                Admin
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
          </div><!-- End Logo -->
      
          <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
              <input type="text" name="query" placeholder="Search" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End Search Bar -->
      
          <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
      
              <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
                </a>
              </li><!-- End Search Icon-->
      
              <li class="nav-item dropdown">
      
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-bell"></i>
                  <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                  <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-exclamation-circle text-warning"></i>
                    <div>
                      <h4>Lorem Ipsum</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>30 min. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-x-circle text-danger"></i>
                    <div>
                      <h4>Atque rerum nesciunt</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>1 hr. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-check-circle text-success"></i>
                    <div>
                      <h4>Sit rerum fuga</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>2 hrs. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                      <h4>Dicta reprehenderit</h4>
                      <p>Quae dolorem earum veritatis oditseno</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                  </li>
      
                </ul><!-- End Notification Dropdown Items -->
      
              </li><!-- End Notification Nav -->
      
              <li class="nav-item dropdown">
      
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-chat-left-text"></i>
                  <span class="badge bg-success badge-number">3</span>
                </a><!-- End Messages Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                  <li class="dropdown-header">
                    You have 3 new messages
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="message-item">
                    <a href="#">
                      <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                      <div>
                        <h4>Maria Hudson</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>4 hrs. ago</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="message-item">
                    <a href="#">
                      <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                      <div>
                        <h4>Anna Nelson</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>6 hrs. ago</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="message-item">
                    <a href="#">
                      <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                      <div>
                        <h4>David Muldon</h4>
                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                        <p>8 hrs. ago</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li class="dropdown-footer">
                    <a href="#">Show all messages</a>
                  </li>
      
                </ul><!-- End Messages Dropdown Items -->
      
              </li><!-- End Messages Nav -->
      
              <li class="nav-item dropdown pe-3">
      
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                  <span class="d-none d-md-block dropdown-toggle ps-2">WAYAE</span>
                </a><!-- End Profile Iamge Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                    <h6>Kevin Anderson</h6>
                    <span>Web Designer</span>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                      <i class="bi bi-person"></i>
                      <span>My Profile</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                      <i class="bi bi-gear"></i>
                      <span>Account Settings</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                      <i class="bi bi-question-circle"></i>
                      <span>Need Help?</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                      <i class="bi bi-box-arrow-right"></i>
                      <span>Sign Out</span>
                    </a>
                  </li>
      
                </ul><!-- End Profile Dropdown Items -->
              </li><!-- End Profile Nav -->
      
            </ul>
          </nav><!-- End Icons Navigation -->
      
        </header><!-- End Header -->
      
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
      
          <ul class="sidebar-nav" id="sidebar-nav">
      
            <li class="nav-item">
           
               <a class="nav-link " href="{{ route('dashboard.admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
              </a>
            
             
            </li><!-- End Dashboard Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-palette"></i><span>Undangan</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="{{ route('dashboard.themes.admin') }}">
                    <i class="bi bi-circle"></i><span>theme undangan</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('sepatahkata.index')}}">
                    <i class="bi bi-circle"></i><span>Kata Kata</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('selltheme.index')}}">
                    <i class="bi bi-circle"></i><span>sell theme</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Components Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="forms-elements.html">
                    <i class="bi bi-circle"></i><span>Form Elements</span>
                  </a>
                </li>
                <li>
                  <a href="forms-layouts.html">
                    <i class="bi bi-circle"></i><span>Form Layouts</span>
                  </a>
                </li>
                <li>
                  <a href="forms-editors.html">
                    <i class="bi bi-circle"></i><span>Form Editors</span>
                  </a>
                </li>
                <li>
                  <a href="forms-validation.html">
                    <i class="bi bi-circle"></i><span>Form Validation</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Forms Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="tables-general.html">
                    <i class="bi bi-circle"></i><span>General Tables</span>
                  </a>
                </li>
                <li>
                  <a href="tables-data.html">
                    <i class="bi bi-circle"></i><span>Data Tables</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Tables Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="charts-chartjs.html">
                    <i class="bi bi-circle"></i><span>Chart.js</span>
                  </a>
                </li>
                <li>
                  <a href="charts-apexcharts.html">
                    <i class="bi bi-circle"></i><span>ApexCharts</span>
                  </a>
                </li>
                <li>
                  <a href="charts-echarts.html">
                    <i class="bi bi-circle"></i><span>ECharts</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Charts Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="icons-bootstrap.html">
                    <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                  </a>
                </li>
                <li>
                  <a href="icons-remix.html">
                    <i class="bi bi-circle"></i><span>Remix Icons</span>
                  </a>
                </li>
                <li>
                  <a href="icons-boxicons.html">
                    <i class="bi bi-circle"></i><span>Boxicons</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Icons Nav -->
      
            <li class="nav-heading">Pages</li>
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li><!-- End Profile Page Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
              </a>
            </li><!-- End F.A.Q Page Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
              </a>
            </li><!-- End Contact Page Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
              </a>
            </li><!-- End Register Page Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
              </a>
            </li><!-- End Login Page Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
              </a>
            </li><!-- End Error 404 Page Nav -->
      
            <li class="nav-item">
              <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
              </a>
            </li><!-- End Blank Page Nav -->
      
          </ul>
      
        </aside><!-- End Sidebar-->
      
          <main id="main" class="main">
                @yield('content')
          </main>
          
      
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
          <div class="copyright">
            &copy; Copyright <strong><span>WHISKEYPEAK JS</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </footer><!-- End Footer -->
      
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script src="/niceadmin/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="/niceadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/niceadmin/vendor/chart.js/chart.umd.js"></script>
        <script src="/niceadmin/vendor/echarts/echarts.min.js"></script>
        <script src="/niceadmin/vendor/quill/quill.min.js"></script>
        <script src="/niceadmin/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="/niceadmin/vendor/tinymce/tinymce.min.js"></script>
        <script src="/niceadmin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/niceadmin/js/main.js"></script>
    <script>
        $(document).ready(function (){

        });
    </script>
    @stack('script')

  </body>
</html>
