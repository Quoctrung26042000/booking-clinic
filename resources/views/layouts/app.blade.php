<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Booking Clinic') }}</title>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- for datepicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- for datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    
    <link rel="stylesheet" href="{{ asset('template/dist/css/theme.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Booking Clinic') }}
                </a> --}}
                <p>
                    <span style="display: inline-block;">Hotline: 02363 86 87 89</span>
                    <span style="display: inline-block; margin-left: 20px;">Email: pkdongphuong@gmail.com</span>
                  </p>
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
                        @if(Auth::check() && Auth::user()->role->name == 'Patient')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my.booking') }}">{{ __('My Booking') }}</a>
                            </li>
                        @endif

                        @if(Auth::check() && Auth::user()->role->name == 'Patient')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my.prescription') }}">{{ __('My Prescriptions') }}</a>
                            </li>
                        @endif

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
                                    @if(Auth::check() && Auth::user()->role->name == 'Patient')
                                    <a href="{{ url('/profile') }}" class="dropdown-item">
                                        Profile
                                    </a>
                                    @else
                                    <a href="{{ url('/dashboard') }}" class="dropdown-item">
                                        Dashboard
                                    </a>
                                    @endif
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
            <div class="menu">
                <!--Hover menu-->
    <script language="javascript" type="text/javascript">
    $(document).ready(function() { 
        //Hover vào menu xổ xuống
        $("#menu ul li").hover(function(){
            $(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300); 
            },function(){ 
            $(this).find('ul:first').css({visibility: "hidden"});
            }); 
        $("#menu ul li").hover(function(){
                $(this).find('>a').addClass('active2'); 
            },function(){ 
                $(this).find('>a').removeClass('active2'); 
        }); 
        
        
    });  
</script>
<!--Hover menu-->
<div class="mkdf-grid container">
    <div class="header">
    <a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars" aria-hidden="true"></i> <i class="fa fa-caret-right" aria-hidden="true"></i></a>
    </div>
    <div class="header_top_center_logo">
                <a href=""><img src="upload/hinhanh/logo-3832.png" alt="Phòng Khám Đông Phương Siêu Âm Tốt Nhất Đà Nẵng"></a>
    </div>
    <div class="clear"></div>
    </div>
            </div>
            @yield('content')
            
        </main>
    </div>
    
    <script>
        var dateToday = new Date();
        $( function() {
            $('#datepicker').datepicker({
                dateFormat: 'yy-mm-dd',
                showButtonPenel: true,
                numberOfMonths: 2,
                minDate: dateToday
            })
        } );
    </script>
    <style type="text/css" scoped>
        body {
            background: #fff;
        }
        .ui-corner-all{
            background: brown;
            color: #fff;
        }
        label.btn{
            padding: 0;
            margin: 10px 0;
        }

        label.btn input{
            opacity: 0;
            position: absolute
        }

        label.btn span{
            text-align: center;
            padding: 6px 12px;
            display: block;
            min-width: 80px;
            max-height: 100%
        }

        label.btn input:checked+span{
            background-color: rgb(80, 110, 228);
            color: #fff;
        }
        
    </style>
</body>
</html>
