@extends('welcome')
@section('content')

<section id="home" class="top_cont_outer">
  <div class="globe delay-03s animated wow fadeInUp">
  <img style="width: 1100px" src="{{url('public/img/globe.png')}}"/>
  </div>
  <div>
    <h1 class="site-name delay-09s animated wow fadeIn" style="position: absolute; right: 50px; top: 30px">8990 FTDH - Fiber to Deca Homes Sites</h1>
  </div>
        <img class="delay-09s animated wow bounceIn" style="width: 65%;position: absolute; padding-left: 10%;  right: 0; top: 0" src="public/img/project-sites2.png">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont"> 
              <h2>WE CONNECT <strong>FAMILIES &</strong> BUILD LASTING <strong>RELATIONSHIPS.</strong></h2>
              <p>FTDH or Fiber to Deca Homes offers readily available services for information, entertainment, communication, and even smart home security solutions for the benefits of the families and residents inside 8990 Deca Homes.</p>
              <a href="#service" class="read_more2">Read more</a> 
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
    <h5 style="text-align: center; color: white">Subscriber Statistics</h5>
  <div class="service_count" style="margin-left: 25%; justify-content: space-between; display: flex;margin-top: 20px; width: 50%">
    <div style="color: #656565; text-align: center;">
      <i style="font-size: 25px" class="fas fa-ethernet"></i>
      <h4>230</h4>
      <p style="color: #b6b6b6; font-size: 0.8em">Fiber Internet</p>
    </div>
    <hr>
    <div style="color: #656565; text-align: center;">
      <i style="font-size: 25px" class="fas fa-wifi"></i>
      <h4>230</h4>
      <p style="color: #b6b6b6; font-size: 0.8em">Wifi</p>
    </div>
    <hr>
    <div style="color: #656565; text-align: center;">
      <i style="font-size: 25px" class="fas fa-satellite-dish"></i>
      <h4>230</h4>
      <p style="color: #b6b6b6; font-size: 0.8em">Cable/IPTV</p>
    </div>
    <hr>
    <div style="color: #656565; text-align: center;">
      <i style="font-size: 25px" class="fas fa-phone-volume"></i>
      <h4>230</h4>
      <p style="color: #b6b6b6; font-size: 0.8em">IP Phone</p>
    </div>
    <hr>
    <div style="color: #656565; text-align: center;">
      <i style="font-size: 25px" class="fas fa-video"></i>
      <h4>230</h4>
      <p style="color: #b6b6b6; font-size: 0.8em">IP Camera</p>
    </div>
  </div>

<section id="app">
  <div class="app_container">
    <div class="row">
      <div class="col-sm-5">
        <h2>FTDH Mobile App</h2>
        <div class="app_benefits">
            <div class="app_benefits_card" style="background-color: #2856c6">
                <i class="fa fa-angle-double-up"></i>
            </div>
            <div class="app_benefits_info">
                <h4>Upgrade</h4>
                <p>Upgrade your subscription instantly</p>
            </div>
            <div class="app_benefits_card" style="background-color: #ff4143">
                <i class="fa fa-plug"></i>
            </div>
            <div class="app_benefits_info">
                <h4>Reconnect</h4>
                <p>Upgrade your subscription instantly</p>
            </div>
        </div>
        <div class="app_benefits">
            <div class="app_benefits_card" style="background-color: #35c7a1">
                <i class="fa fa-money-check-alt"></i>
            </div>
            <div class="app_benefits_info">
                <h4>Transactions</h4>
                <p>Upgrade your subscription instantly</p>
            </div>
            <div class="app_benefits_card" style="background-color: #ffcc00">
                <i class="fa fa-bell"></i>
            </div>
            <div class="app_benefits_info">
                <h4>Notification</h4>
                <p>Upgrade your subscription instantly</p>
            </div>
        </div>

        <div class="btn playstore">
          <a class="app-btn blu flex vert" href="https://play.google.com/store/apps/details?id=com.ftdh.ims&hl=en">
            <i class="fab fa-google-play"></i>
            <p>GET IT ON <br/> <span class="big-txt">Google Play</span></p>
          </a>
        </div>  

      </div>
      <div class="top_right_cont col-sm-6">
        <p class="animated shake wow">
          New service to offer soon!
        </p>
        <img style="width: 600px" class="zoomIn wow animated" src="{{url('public/img/artboard.png')}}">
      </div>
    </div>
  </div>
</section>

<section id="promos">
  <div style="text-align: center;">
  <img style="width: 80%" src="public/img/promo1.png">
  </div>
</section>

<div class="box">
  <span></span>
  <span></span>
  <span></span>
</div>

<section id="services">
  <div class="title">
    <h5>services</h5>
    <h2>Everything you need for a smart home</h2>
  </div>

<div class="row">
  <div class="service_card col-lg-6">
    <div class="content-item">
        <span class="service_info">
          <P class="service_title">Fiber Internet</P>
          <P class="service_subtitle">Buid strog connection with family</P>
          <P class="service_discription">Lorem ipsum dolor sit amet consectetur adipisicing elit praesentium dolor totam voluptatibus recusandae.</P>
          <a class="btnfos btnfos-4">INQUIRE NOW</a>
        </span>
        <div class="pic">
          <img src="public/img/services/family.jpg">
        </div>
      </div>
  </div>
  <div class="service_card col-lg-6">
    <div class="content-item">
      <span class="service_info">
        <P class="service_title">Fiber Internet</P>
        <P class="service_subtitle">Buid strog connection with family</P>
        <P class="service_discription">Lorem ipsum dolor sit amet consectetur adipisicing elit praesentium dolor totam voluptatibus recusandae.</P>
        <a class="btnfos btnfos-4">INQUIRE NOW</a>
      </span>
      <div class="pic">
        <img src="public/img/services/family.jpg">
      </div>
    </div>
  </div>
  <div class="service_card col-lg-6">
    <div class="content-item">
      <span class="service_info">
        <P class="service_title">Fiber Internet</P>
        <P class="service_subtitle">Buid strog connection with family</P>
        <P class="service_discription">Lorem ipsum dolor sit amet consectetur adipisicing elit praesentium dolor totam voluptatibus recusandae.</P>
        <a class="btnfos btnfos-4">INQUIRE NOW</a>
      </span>
      <div class="pic">
        <img src="public/img/services/family.jpg">
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section id="subscriber">
  <div class="title">
    <h5>subscriber</h5>
    <h2>Happy clients</h2>
  </div>
  <!-- partial:index.partial.html -->
<div class="card-wrap">
  <a class="subscriberCard">
    <p>
      “Thanks to SYMPH, our website has been improved to attract more subscribers! SYMPH team really cared about each issue of the project, and tried to complete it in the best way they could.”
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person1.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Yoriko Ueda</span>
        <br>
        <span class="subscriber_location">Founder and CEO, Venturas Ltd.</span>
      </p>
    </div>
  </a>
  <a class="subscriberCard" href="#">
    <p>
      “Dave, Albert and the amazing team at Symph have been instrumental in bringing our product to the market. They boast a unique mix of deep technical, design and project expertise, professionalism and a drive to succeed together that is hard to find anywhere else. Highly recommended and would definitely work with them again.”
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person2.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Joelson Fabian</span>
        <br>
        <span class="subscriber_location">Founder and CEO, OnlyNote</span>
      </p>
    </div>
  </a>
  <a class="subscriberCard" href="#">
    <p>
      "...The (eFOI) portal has never been down and is very reliable. Both the public and government agencies appreciate how the interface is very user-friendly. Symph’s team has provided great help before, during, and even post-launch—making it very easy to solve any issues quickly."
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person3.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Michelle Arianne M. Manza</span>
        <br>
        <span class="subscriber_location">Freedom of Information Engagement Lead, Presidential Communications Operations Office</span>
      </p>
    </div>
  </a>
  <a class="subscriberCard" href="#">
    <p>
      "One of the hurdles in property management is keeping track of transactions and creating a process where I can streamline operations to minimize cost of manpower. Symph helped me create a system to address this need. Now we have a working Property management system which gives us an updated day to day report, keeps our Alpha list in tact, tracks expenses and disbursements, all in one system. The system helps in organizing and streamlining the process."
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person4.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Eppie Acusar</span>
        <br>
        <span class="subscriber_location">Managing Director, iBuild Property Management Corporation</span>
      </p>
    </div>
  </a>
  <a class="subscriberCard" href="#">
    <p>
      “Dave, Albert and the amazing team at Symph have been instrumental in bringing our product to the market. They boast a unique mix of deep technical, design and project expertise, professionalism and a drive to succeed together that is hard to find anywhere else. Highly recommended and would definitely work with them again.”
    </p>
    <div class="subscriber_info">
      <div class="subscriber_img">
        <img src="{{url('public/img/person2.png')}}" class="img-circle">
      </div>
      <p>
        <span class="subscriber_name">Joelson Fabian</span>
        <br>
        <span class="subscriber_location">Founder and CEO, OnlyNote</span>
      </p>
    </div>
  </a>
</div>
</section>
@stop