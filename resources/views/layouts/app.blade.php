<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>گزارش کار - روزانه</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="{{url('bower_components/yekan-font/css/yekan-font.css')}}" />
    <link rel="stylesheet" href="{{url('bower_components/select2/dist/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.theme.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui-timepicker-addon.css')}}" />
{{--    <link rel="stylesheet" href="{{url('assets/jquery.ui.datepicker1.8.14-cc/styles/jquery-ui-1.8.14.css')}}" />--}}
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    گزارش کار (مدیریت زمان)
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- right Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/create') }}">درج گزارش کار جدید</a></li>
                </ul>

                <!-- left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">ورود</a></li>
                        <li><a href="{{ url('/register') }}">عضویت</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;&nbsp;خروج از حساب</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    {{--<script src="{{url('assets/jquery.ui.datepicker1.8.14-cc/scripts/jquery-1.6.2.min.js')}}"></script>--}}
    <script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.ui.datepicker-cc.all.min.js')}}"></script>
    <script src="{{url('assets/js/jquery-ui-timepicker-addon.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{url('bower_components/select2/dist/js/select2.min.js')}}"></script>

    <script>
        $(".select2").select2({
            dir: "rtl",
            tags: true
        });
        $(".datepicker").datepicker({
            dateFormat: 'yy/mm/dd'
        });

        $('.timepicker').timepicker({
            stepMinute: 5
        });
    </script>
    <script>
        $('[title]').tooltip();
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
