
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">

                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" style="color: darkslategrey">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: darkslategrey">Register</a></li>
                        @else


                            {{--<li><a href="{{ route('home') }}">Home</a></li>--}}

                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"--}}
                                   {{--style="background-image: image('uploads/profile-button.png'); position: relative; padding-left: 50px; color: black;">--}}

                                    {{--<img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}"--}}
                                         {{--style="width: 32px; height: 32px; position: absolute; top:10px; left: 10px; border-radius: 50%; ">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu pull-right" style="background-color: skyblue;" role="menu">--}}
                                    {{--<hr>--}}

                                    {{--<li>--}}
                                        {{--<img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}"--}}
                                             {{--style="width: 70px; height: 70px; position: relative; top: 1px;--}}
                                              {{--left: 40px; border-radius: 100%; "><br><br><br><br><br>--}}
                                        {{--<a href="/profile/{{Auth::user()->username}}"> Visit Your Profile</a>--}}

                                    {{--</li>--}}
                                    {{--<hr>--}}
                                    {{--<li>--}}
                                        {{--<a href="/home"> Home </a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="/posts"> Read Posts</a>--}}
                                    {{--</li>--}}

                                    {{--<hr>--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                           {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}
                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        @endif
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
