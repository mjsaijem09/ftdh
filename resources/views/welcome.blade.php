<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>8990 FTDH Fiber To Deca Homes</title>
<link rel="icon" href="{{url('public/img/ftdh.png')}}" type="image/png">
<link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('public/css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('public/css/animate.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{url('public/fontawesome/css/all.css')}}" type="text/css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
<script src="{{url('public/css/jquery-3.2.1.js')}}"></script>
<script type="text/javascript">
  $(window).on('scroll', function(){
    if ($(window).scrollTop()) {
      $('header').addClass('headerAnimate');
    }
    else{
      $('header').removeClass('headerAnimate');
    }
  })
</script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
@media screen and (max-width: 980px) {
  .columns .column {
    margin-bottom: 5px;
    flex-basis: 70%;
    &:nth-last-child(2) {
      margin-right: 0;
    }
    &:last-child {
      flex-basis: 100%;
      margin: 0;
    }
  }
}

@media screen and (max-width: 680px) {
  .columns .column {
    flex-basis: 100%;
    margin: 0 0 5px 0;
  }

/* Style the counter cards */

</style>

</head>
<body>

<header id="header_wrapper">
  <div class="header_box">
    <div class="logo"><a href="{{url('home')}}"><img src="{{url('public/img/ftdh.png')}}" alt="logo"></a></div>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      <div id="main-nav" class="collapse navbar-collapse navStyle">
      <ul class="nav navbar-nav" id="mainNav">
        <li class="active"><a href="{{url('home')}}" class="scroll-link">Home</a></li>
        @foreach($cats as $cat)
        <li><a href="#{{$cat->slug}}" class="scroll-link">{{$cat->title}}</a></li>
        @endforeach
      </ul>
      </div>
    </nav>
  </div>
</header>


@yield('content')

<!--Footer-->
<footer class="footer_wrapper" id="contact">

  <div class="footer-nav">
    <ul>
      <li><a href="{{url('home')}}">About Us</a></li>
      <li><a href="#services">Blog</a></li>
      <li><a href="#promos">Terms & Conditions</a></li>
    </ul>
  </div>

  <div class="container">
    <div class="row">
      <div class="footer_bottom col-lg-6" style="height: auto; padding: 8% 0 0">
        <span>© 2018 - {{ date('Y') }} Fiber To Deca Homes</span> 
      </div>
      <div class="col-lg-6 wow fadeInLeft" style="height: 0%;"> 
        <div class="contact_info">
          <div class="detail">
            <h3>FTDH Command Center</h3>
            <p>Rm 208 Krizia Bldg. Gorordo Avenue Cebu City</p>
          </div>
          <div class="detail">
            <h3>Contact Us</h3>
            <p>+639 436 609952</p>
          </div>
        </div>
        <div class="social_links">
          @foreach($socials as $social)
            <a class="{{ $social->name }}" href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="public/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="public/js/jquery.nav.js"></script> 
<script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="public/js/jquery.isotope.js"></script>
<script type="text/javascript" src="public/js/wow.js"></script> 
<script type="text/javascript" src="public/js/custom.js"></script>

<!-- partial -->
<script src="{{url('public/css/flickity.pkgd.js')}}"></script>
<script  src="{{url('public/css/script.js')}}"></script>
</body>
</html>