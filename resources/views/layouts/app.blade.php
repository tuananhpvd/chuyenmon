<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý chuyên môn</title>
  
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{ url('/') }}">PVĐ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/lichtuan') }}">Lịch công tác tuần</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="nav navbar-nav mr-auto">
              @if (Auth::guest())
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/auth/login') }}">Đăng nhập</a>
              </li>

              @else
              <li class="nav-item active dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                  @if (Auth::user()->can_post())
                  <li>
                    <a class="dropdown-item" href="{{ url('/new-post') }}">Add new post</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
                  </li>
                  @endif
                  <li>
                    <a class="dropdown-item" href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ url('/logout') }}">Thoát</a>
                  </li>
                </ul>
              </li>
              @endif
            </ul>
    </form>
  </div>
</nav>

  <div class="container-fluid">
      @if (Session::has('message'))
      <div class="flash alert-info">
        <p class="panel-body">
        {{ Session::get('message') }}
        </p>
      </div>
      @endif
      @if ($errors->any())
      <div class='flash alert-danger'>
        <ul class="panel-body">
          @foreach ( $errors->all() as $error )
          <li>
          {{ $error }}
          </li>
          @endforeach
        </ul>
      </div>
      @endif  
          <h2 class="text-center" style="color:blue"><b><center>@yield('title')</center></b></h2>
          
          @yield('title-meta')

          @yield('content')
  </div>

<!-- Footer -->
<footer class="bg-primary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="color:#ffffff">
Thiết kế bởi: Trần Tuấn Anh
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  </div>
  </div>
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>