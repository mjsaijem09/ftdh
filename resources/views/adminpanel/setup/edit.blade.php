@extends('adminpanel.master')

@section('content')
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="#pablo">Setups</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">
                  Stats
                </p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">notifications</i>
                <span class="notification">5</span>
                <p class="d-lg-none d-md-block">
                  Some Actions
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                <a class="dropdown-item" href="#">Another Notification</a>
                <a class="dropdown-item" href="#">Another One</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @if(Session::has('message'))
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissable">
                {{ session::get('message') }}
                <a href="#" class="close" data-dismiss="alert" style="text-decoration: none">&times;</a>
              </div>
            </div>
            @endif
          <div class="card col-md-6">
              <form class="card-body" method="POST" action="{{ route('setups.update', $data->id) }}">
                @csrf
                @method('PUT')
              <input type="hidden" name="tbl" value="{{encrypt('setups')}}">
              <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="col-sm-3">
                  <div class="form-group" style="left: 5px; padding: 30px 0 30px">
                    <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none">
                    <img id="output" width="150" style="box-shadow: 0px 16px 18px -4px rgba(0,0,0,0.17);"/>
                    <label class="card-title" for="file" style="cursor: pointer; padding: 10px 0 0px">Upload Logo</label>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Site title</label>
                        <input type="text" name="meta_title" value="{{ $data -> meta_title }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text" name="address" value="{{ $data -> address }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Contant number</label>
                        <input type="number" name="contact" value="{{ $data -> contact }}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" name="email" value="{{ $data -> email }}" class="form-control">
                      </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-12" id="socialGroup">
                      @foreach($socials as $social)
                      <div class="form-group socialField">
                      <label class="bmd-label-floating">Social Links</label>
                        <input type="text" name="social[]" value="{{ $social }}" class="form-control">
                        <a href="#" class="addField"><i class="fa fa-plus"></i></a>
                      </div>
                      @endforeach
                      <div class="alert alert-danger" id="socialError">
                      <p><strong>Sorry! </strong>You've reached the max number for social links form.</p>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                  <div class="clearfix"></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <footer class="footer">
    <div class="container-fluid">
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.facebook.com/mjsaijem09" target="_blank">MJ Saijem</a> for a better web.
      </div>
    </div>
  </footer>
</div>

<script>
  var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
  fieldCounter = 1;
  $('.addField').click(function(){
    fieldCounter++;
    if (fieldCounter <=5) {
      var newField = $(document.createElement('div')).attr('class','form-group');
      newField.after().html('<label class="bmd-label-floating">Social Links</label><input type="text" name="social[]" class="form-control"></div>');
      newField.appendTo('#socialGroup');
    }else{
      $('#socialError').show();
    }
    
  })
</script>

<style>
  .socialField{
    position: relative;
  }
  .addField{
    margin: 0;
    position: absolute;
    right: 0;
    bottom: 15px;
    padding: 1em 1em;
    height: 0.5em; width: 0.5em;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: green;
  }
  #socialError{
    display: none;
  }
</style>
@stop