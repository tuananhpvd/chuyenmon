<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hệ thống quản lý chuyên môn - Trường THPT Phạm Văn Đồng</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }
    .modal-login {
        color: #636363;
        width: 550px;
        margin: 15px auto;
    }
    .modal-login .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }
    .modal-login .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }
    .modal-login h4 {
        text-align: center;
        font-size: 26px;
    }
    .modal-login  .form-group {
        position: relative;
    }
    .modal-login i {
        position: absolute;
        left: 13px;
        top: 11px;
        font-size: 18px;
    }
    .modal-login .form-control {
        padding-left: 40px;
    }
    .modal-login .form-control:focus {
        border-color: #00ce81;
    }
    .modal-login .form-control, .modal-login .btn {
        min-height: 40px;
        border-radius: 3px; 
    }
    .modal-login .hint-text {
        text-align: center;
        padding-top: 10px;
    }
    .modal-login .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }
    .modal-login .btn {
        background: #00ce81;
        border: none;
        line-height: normal;
    }
    .modal-login .btn:hover, .modal-login .btn:focus {
        background: #00bf78;
    }
    .modal-login .modal-footer {
        background: #ecf0f1;
        border-color: #dee4e7;
        text-align: center;
        margin: 0 -20px -20px;
        border-radius: 5px;
        font-size: 13px;
        justify-content: center;
    }
    .modal-login .modal-footer a {
        color: #999;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h4 class="text-center" style="color:#2E9AFE"><b>HỆ THỐNG QUẢN LÝ CHUYÊN MÔN</b></h4>
                    <h5 class="text-center" style="color:red"><b>TRƯỜNG THPT PHẠM VĂN ĐỒNG</b></h5>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif
                            
                        
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Thoát') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
