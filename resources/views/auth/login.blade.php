
<!DOCTYPE html>
<head>
    <title>Login One</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
<div class="container">
    <div class="col-md-12">
        <h1 class="margin-bottom-15">Login Form One</h1>
        <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="{{ route('login') }}" method="post">
            {{ csrf_field() }}


            <div class="form-group">
                <div class="col-xs-12">
                    <div class="control-wrapper">
                        <label for="email" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                        <input type="text" class="form-control" id="email" placeholder="Enter e-mail"  name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <div class="control-wrapper">
                        <label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox control-wrapper">
                        <label>
                            <input type="checkbox" checked="checked" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                        </label>
                    </div>
                </div>
            </div>





    <div class="form-group">
                <div class="col-md-12">
                    <div class="control-wrapper">
                        <input type="submit" value="Log in" class="btn btn-info">
                        <a href="{{ route('password.request') }}" class="text-right pull-right">Forgot password?</a>
                    </div>
                </div>
            </div>

            <hr>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Login with: </label>
                    <div class="inline-block">
                        <a href="#"><i class="fa fa-facebook-square login-with"></i></a>
                        <a href="#"><i class="fa fa-twitter-square login-with"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square login-with"></i></a>
                        <a href="#"><i class="fa fa-tumblr-square login-with"></i></a>
                        <a href="#"><i class="fa fa-github-square login-with"></i></a>
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center">
            <a href="/register" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>
        </div>
    </div>
</div>
</body>
</html>





{{--<!DOCTYPE html>--}}
{{--<html>--}}

{{--Login style--}}
{{--<link rel="stylesheet" href="css/loginstyle.css">--}}

{{--<body>--}}

{{--<h2>Modal Login Form</h2>--}}

{{--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>--}}

{{--<div id="id01" class="modal">--}}

    {{--<form class="modal-content animate"  role="form" method="POST" action="{{ route('login') }}">--}}
        {{--{{ csrf_field() }}--}}

        {{--<div class="imgcontainer">--}}
            {{--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>--}}
            {{--<img src="img_avatar2.png" alt="Avatar" class="avatar">--}}
        {{--</div>--}}

        {{--<div class="container">--}}

                {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}

                    {{--<div class="col-md-6">--}}
                {{--<label for="email"><b>E-Mail Address</b></label>--}}
            {{--<input id="email" type="text" placeholder="Enter e-mail" name="email" value="{{ old('email') }}" required autofocus>--}}

                {{--@if ($errors->has('email'))--}}
                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}

                    {{--<div class="col-md-6">--}}
                        {{--<label for="password"><b>Password</b></label>--}}
                        {{--<input id="password" type="password" placeholder="Enter your password" name="password" required>--}}

                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<button type="submit">Login</button>--}}
            {{--<input type="checkbox" checked="checked" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me--}}
        {{--</div>--}}

        {{--<div class="container" style="background-color:#f1f1f1">--}}
            {{--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>--}}
            {{--<span class="psw">Forgot <a href="{{ route('password.request') }}">password?</a></span>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}


{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/login.js') }}"></script>--}}

{{--</body>--}}
{{--</html>--}}

