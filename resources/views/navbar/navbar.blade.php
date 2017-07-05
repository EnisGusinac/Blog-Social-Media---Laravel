@include('layouts.header')


@if (Auth::guest())
    <li><a href="{{ route('login') }}" style="color: whitesmoke">Login</a></li>
    <li><a href="{{ route('register') }}" style="color: whitesmoke">Register</a></li>
@else
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-medium">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2"
               href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i
                        class="fa fa-home w3-margin-right"></i>Home</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i
                        class="fa fa-globe"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
               title="Account Settings"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i
                        class="fa fa-envelope"></i></a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span
                            class="w3-badge w3-right w3-small w3-green">3</span></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                    <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                    <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                    <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
                </div>
            </div>

            <div class="w3-dropdown-hover w3-right">
                <button class="w3-button">
                    <img src="/uploads/avatars/{{ $user->avatar }}" class="w3-circle" style="height:30px; width:35px;">
                    {{ $user->name }}
                    <i class="fa fa-caret-down" style="font-size:36px"></i>
                    </button>

                <div class="w3-dropdown-content w3-bar-block w3-card-4">

                    <a href="/profile" class=" w3-bar-item w3-button" title="Visit Your Account">

                        <img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}"
                             style="width: 70px; height: 70px; position: relative; left: 10px; border-radius: 100%; "><br><br>
                        <i class="fa fa-address-card">
                            My Profile
                        </i>
                    </a>
                    <hr>

                    <a href="/posts" class="w3-bar-item w3-button"><i class="fa fa-pencil"> My Posts</i></a>
                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"> My Account</i></a>
                    <hr>

                    <a href="{{ route('logout') }}" class="w3-bar-item w3-button"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out">
                            Logout
                        </i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

            {{--</div>--}}
            {{--<div class="nav navbar-nav navbar-right">--}}
            {{--<a href="/profile/{username}" class=" w3-bar-item w3-button w3-hide-small w3-right w3-padding-medium w3-hover"
             title="Visit Your Account">--}}
            {{--<img src="/uploads/avatars/{{ $user->avatar }}" class="w3-circle" style="height:30px;width:30px">{{$user->name}}--}}
            {{--@include('navbar.rightProfileDropdown')--}}
            {{--</div>--}}
        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
    </div>
@endif