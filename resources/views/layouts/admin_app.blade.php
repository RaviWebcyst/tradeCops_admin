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