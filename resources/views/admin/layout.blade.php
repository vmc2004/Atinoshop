<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>Atino | @yield('title')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Fonts and icons -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{ asset('ad/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{ asset('ad/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('ad/assets/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />

<!-- Nepcha Analytics (nepcha.com) -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>

<body class="g-sidenav-show bg-gray-100">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">

<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard" target="_blank">
    <img src="{{ asset('ad/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Atino Admin</span>
  </a>
</div>

<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link text-white" href="">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="{{route('admin.categories.index')}}">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">table_view</i>
        </div>
        <span class="nav-link-text ms-1">Tables</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./billing.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">receipt_long</i>
        </div>
        <span class="nav-link-text ms-1">Billing</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./virtual-reality.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">view_in_ar</i>
        </div>
        <span class="nav-link-text ms-1">Virtual Reality</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./rtl.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
        </div>
        <span class="nav-link-text ms-1">RTL</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./notifications.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">notifications</i>
        </div>
        <span class="nav-link-text ms-1">Notifications</span>
      </a>
    </li>

    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./profile.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">person</i>
        </div>
        <span class="nav-link-text ms-1">Profile</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./sign-in.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">login</i>
        </div>
        <span class="nav-link-text ms-1">Sign In</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link text-white" href="./sign-up.html">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">assignment</i>
        </div>
        <span class="nav-link-text ms-1">Sign Up</span>
      </a>
    </li>

  </ul>
</div>

<div class="sidenav-footer position-absolute w-100 bottom-0 ">
  <div class="mx-3">
    <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
    <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
  </div>
</div>

</aside>

<main class="main-content border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">index</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group input-group-outline">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
          </li>
          <li class="mt-2">
            <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item d-sm-none d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="search-navbar">
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
</main>
@yield('content')

<!-- Core JS Files -->
<script src="{{ asset('ad/assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('ad/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('ad/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('ad/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ asset('ad/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{ asset('ad/assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</body>
</html>
