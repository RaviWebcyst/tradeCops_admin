{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Panel</title>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
    
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('admin/css/style.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css">
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>

</head>
<body>
    <div id="app">
        {{-- <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" > --}}
            <admin />
        {{-- </div> --}}
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <!--  Customizer -->
    <!--  Import Js Files -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <!--  core files -->
    <script src="{{asset('admin/js/app.min.js')}}"></script>
    <script src="{{asset('admin/js/app.init.js')}}"></script>
    <script src="{{asset('admin/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <!--  current page js files -->
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    {{-- <script src="{{asset('admin/js/apexcharts.min.js')}}"></script> --}}
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script>
         $(".sidebartoggler").click(function(){
        var size = "mini-sidebar";
        if($("#main-wrapper").hasClass("mini-sidebar")){
          size = "full"
        }
        $("#main-wrapper").attr("data-sidebartype",size);
        $("#main-wrapper").toggleClass("mini-sidebar show-sidebar");
      });
    </script>
</body>
</html>