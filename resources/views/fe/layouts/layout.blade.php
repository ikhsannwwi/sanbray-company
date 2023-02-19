<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @yield('title') Sanbray-Company </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset("sanbray-co/img/favicon.png")}}" rel="icon">
  <link href="{{asset("sanbray-co/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset("sanbray-co/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("sanbray-co/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("sanbray-co/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("sanbray-co/vendor/quill/quill.snow.css")}}" rel="stylesheet">
  <link href="{{asset("sanbray-co/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
  <link href="{{asset("sanbray-co/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("sanbray-co/vendor/simple-datatables/style.css")}}" rel="stylesheet">
  
  {{-- sweet alert CSS File --}}
  <link href="{{asset("sweetalert2/dist/sweetalert2.css")}}" rel="stylesheet">
  {{-- toastr JS Files --}}
  <link href="{{asset("toastr/build/toastr.min.css")}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset("sanbray-co/css/style.css")}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="{{asset("sanbray-co/img/logo.png")}}" alt="">
        <span class="d-none d-lg-block">Sanbray Company</span>
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

        @if (auth()->user())
            
            
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset("sanbray-co/img/profile-img.jpg")}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{auth()->user()->name}}</h6>
              <span>{{auth()->user()->role_user->nama_role}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="user-profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="user-profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="faq">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
        @else
        <a class="nav-link nav-profile d-flex align-items-center pe-3" href="/login">
          <span class="d-none d-md-block dropdown-toggle ps-2">Login</span>
        </a><!-- End Profile Iamge Icon -->
        @endif



      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item ">
        <a class="nav-link {{request()->is('/') ? 'collapsed' : ''}}" href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      @if (auth()->user())
          
          
      <li class="nav-item">
        <a class="nav-link {{request()->is('produk','data/pemasukan-pengeluaran','data/tempat-distribusi','detail-produk','data/harga-jual') ? 'collapsed' : ''}}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-data"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/produk">
              <i class="bi bi-circle"></i><span>Produk</span>
            </a>
          </li>
        <li>
          <a href="/data/pemasukan-pengeluaran">
            <i class="bi bi-circle"></i><span>Pemasukan dan Pengeluaran</span>
          </a>
        </li>
        <li>
          <a href="/data/stok-produk">
            <i class="bi bi-circle"></i><span>Stok Produk</span>
          </a>
        </li>
          <li>
            <a href="/data/tempat-distribusi">
              <i class="bi bi-circle"></i><span>Tempat Distribusi</span>
            </a>
          </li>
          
          <li>
            <a href="/detail-produk">
              <i class="bi bi-circle"></i><span>Detail Produk</span>
            </a>
          </li>
          <li>
            <a href="/data/harga-jual">
              <i class="bi bi-circle"></i><span>Harga Jual</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link {{request()->is('data/user-profile') ? 'collapsed' : ''}}" href="/data/user-profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      @endif

      <li class="nav-item">
        <a class="nav-link {{request()->is('faq') ? 'collapsed' : ''}}" href="/faq">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{request()->is('contact') ? 'collapsed' : ''}}" href="contact">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

        @if (auth()->user())


      @if (auth()->user()->role_id == 1)


      <li class="nav-heading">Admin</li>

      <li class="nav-item">
        <a class="nav-link {{request()->is('produk/edit-pendistribusian','produk/edit-stok-produk','produk/edit-pemasukan-pengeluaran','produk/edit-nama-produk','produk/edit-tempat-distribusi','edit-detail-produk','produk/edit-harga-jual','produk/edit-jenis-produk','user/edit-user') ? 'collapsed' : ''}}" data-bs-target="#edit-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pencil-square"></i><span>Edit</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="edit-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/produk/edit-pendistribusian">
              <i class="bi bi-circle"></i><span>Pendistribusian</span>
            </a>
          </li>
          <li>
            <a href="/produk/edit-stok-produk">
              <i class="bi bi-circle"></i><span>Stok Produk</span>
            </a>
          </li>
          <li>
            <a href="/produk/edit-pemasukan-pengeluaran">
              <i class="bi bi-circle"></i><span>Pemasukan | Pengeluaran</span>
            </a>
          </li>
          <li>
            <a href="/produk/edit-nama-produk">
              <i class="bi bi-circle"></i><span>Nama Produk</span>
            </a>
          </li>
          <li>
            <a href="/produk/edit-tempat-distribusi">
              <i class="bi bi-circle"></i><span>Tempat Distribusi</span>
            </a>
          </li>
          <li>
            <a href="/edit-detail-produk">
              <i class="bi bi-circle"></i><span>Detail Produks</span>
            </a>
          </li>
          <li>
            <a href="/produk/edit-harga-jual">
              <i class="bi bi-circle"></i><span>Harga Jual</span>
            </a>
          </li>
          <li>
            <a href="/produk/edit-jenis-produk">
              <i class="bi bi-circle"></i><span>Jenis Produk</span>
            </a>
          </li>
          <li>
            <a href="/user/edit-user">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="/user/edit-role">
              <i class="bi bi-circle"></i><span>Role User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link {{request()->is('produk/add-pendistribusian',
          'produk/add-pemasukan-pengeluaran',
          'produk/add-nama-produk',
          'produk/add-tempat-distribusi',
          'add-detail-produk',
          'produk/add-harga-jual',
          'produk/add-jenis-produk',
          'produk/add-stok-produk',
          'user/add-user') ? 'collapsed' : ''}}" data-bs-target="#add-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-plus"></i><span>Add</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="add-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/produk/add-pendistribusian">
              <i class="bi bi-circle"></i><span>Pendistribusian</span>
            </a>
          </li>
          <li>
            <a href="/produk/add-stok-produk">
              <i class="bi bi-circle"></i><span>Stok Produk</span>
            </a>
          </li>
          <li>
            <a href="/produk/add-pemasukan-pengeluaran">
              <i class="bi bi-circle"></i><span>Pemasukan | Pengeluaran</span>
            </a>
          </li>
          <li>
            <a href="/produk/add-nama-produk">
              <i class="bi bi-circle"></i><span>Nama Produk</span>
            </a>
          </li>
          <li>
            <a href="/produk/add-tempat-distribusi">
              <i class="bi bi-circle"></i><span>Tempat Distribusi</span>
            </a>
          </li>
          <li>
            <a href="/add-detail-produk">
              <i class="bi bi-circle"></i><span>Detail Produks</span>
            </a>
          </li>
          <li>
            <a href="/produk/add-harga-jual">
              <i class="bi bi-circle"></i><span>Harga Jual</span>
            </a>
          </li>
          <li>
            <a href="/produk/add-jenis-produk">
              <i class="bi bi-circle"></i><span>Jenis Produk</span>
            </a>
          </li>
          <li>
            <a href="/user/add-user">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="/user/add-role">
              <i class="bi bi-circle"></i><span>Role User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      

      
          
      
      <li class="nav-item ">
          <a class="nav-link {{request()->is('data/user-table') ? 'collapsed' : ''}}" href="/data/user-table">
            <i class="bi bi-person-lines-fill"></i>
            <span>User</span>
          </a>
        </li><!-- End  Nav -->
      <li class="nav-item ">
        <a class="nav-link {{request()->is('data/role-user') ? 'collapsed' : ''}}" href="/data/role-user">
            <i class="bi bi-shield-shaded"></i>
            <span>Role User</span>
          </a>
        </li><!-- End  Nav -->
        @endif
        @endif
        @if (!auth()->user())
        <li class="nav-item ">
          <a class="nav-link {{request()->is('login') ? 'collapsed' : ''}}" href="/login">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
          </a>
        </li><!-- End  Nav -->
        @endif

      </ul>
      

  </aside><!-- End Sidebar-->



  @yield('content')


  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
     2022 - {{date('Y')}} &copy; Copyright <strong><span>Sanbray Comp</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Mochammad Ikhsan Nawawi</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  {{-- jquery JS Files --}}
  <script src="{{asset("jquery/dist/jquery.js")}}" ></script>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
  
  <!-- Vendor JS Files -->
  <script src="{{asset("sanbray-co/vendor/apexcharts/apexcharts.min.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/chart.js/chart.min.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/echarts/echarts.min.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/quill/quill.min.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/simple-datatables/simple-datatables.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/tinymce/tinymce.min.js")}}"></script>
  <script src="{{asset("sanbray-co/vendor/php-email-form/validate.js")}}"></script>

  {{-- sweet alert JS --}}
  <script src="{{asset("sweetalert2/dist/sweetalert2.min.js")}}"></script>
  {{-- toastr JS Files --}}
  <script src="{{asset("toastr/build/toastr.min.js")}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset("sanbray-co/js/main.js")}}"></script>
  
  {{-- push script --}}
	@stack('script')


</body>

</html>