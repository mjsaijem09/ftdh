@extends('adminpanel.master')

@section('content')
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="#pablo">Category</a>
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
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissable">
                {{ session::get('message') }}
                <a href="#" class="close" data-dismiss="alert" style="text-decoration: none">&times;</a>
              </div>
            </div>
            @endif
        <div class="card col-lg-4" style="height: 100%">
          <form class="card-body" method="POST" action="{{ route('categories.store') }}">
            {{ csrf_field() }}
            <input type="hidden" name="tbl" value="{{encrypt('categories')}}">

            <div class="form-group">
              <label class="bmd-label-floating">Title</label>
              <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
              <label class="bmd-label-floating">Status</label>
              <select class="form-control" name="status">
                <option>on</option>
                <option>off</option>
              </select>
            </div>

            <div class="form-group">
              <button class="btn btn-success btn-block">Add Category</button>
            </div>
          </form>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead class="text-primary">
                    <tr>
                      <th>SN</th>
                      <th>Title</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key=>$category)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$category->title}}</td>
                      <td>{{$category->status}}</td>  
                      <td style="float: right;">
                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
   
                          <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
         
                          @csrf
                          @method('DELETE')
            
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
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
</script>
@stop