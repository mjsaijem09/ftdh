<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('public/img/admin.png')}}">
  <link rel="icon" type="image/png" href="{{url('public/img/admin.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ADMIN PANEL
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{url('public/adminpanel_css/css/material-dashboard.css')}}" rel="stylesheet" />

  <script src="{{url('public/js/jquery-1.11.0.min.js')}}"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sisdebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Control PANEL
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('setups.index')}}">
              <i class="material-icons">web</i>
              <p>Setups</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('categories.index')}}">
              <i class="material-icons">category</i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('homeSetting')}}">
              <i class="material-icons">home</i>
              <p>Landing Page</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">card_travel</i>
              <p>Services</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">shopping_bask</i>
              <p>Promos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">assignment_ind</i>
              <p>About Us</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">feedback</i>
              <p>Comments</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">apps</i>
              <p>App</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('socials')}}">
              <i class="material-icons">link</i>
              <p>Social links</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>Footer</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    

    @yield('content') <!---------------------------------------------YIELD CONTENT------------------------------------>

  </div>
  <script src="{{url('public/adminpanel_css/js/core/jquery.min.js')}}"></script>
  <script src="{{url('public/adminpanel_css/js/core/popper.min.js')}}"></script>
  <script src="{{url('public/adminpanel_css/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{url('public/adminpanel_css/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{url('public/adminpanel_css/js/plugins/moment.min.js')}}"></script>
  <script src="{{url('public/adminpanel_css/js/material-dashboard.js')}}" type="text/javascript"></script>

</body>
</html>
