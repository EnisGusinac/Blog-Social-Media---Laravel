<!DOCTYPE html>
<head>
    <!-- templatemo 418 form pack -->
    <!--
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack
    -->
    <title>Create Account</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
<h1 class="margin-bottom-15">Create Account</h1>
<div class="container">
    <div class="col-md-12">
        <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="#" method="post">
            <div class="form-inner">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="first_name" class="control-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="control-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="username" class="control-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="">
                    </div>
                    <div class="col-md-6 templatemo-radio-group">
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="control-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirm" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label><input type="checkbox">I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a> and <a href="#">Privacy Policy.</a></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Create account" class="btn btn-info">
                        <a href="/login" class="pull-right">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Terms of Service</h4>
            </div>
            <div class="modal-body">
                <p>This form is provided by <a rel="nofollow" href="http://www.templatemo.com/page/1">Free HTML5 Templates</a> that can be used for your websites. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>



{{--Register style--}}
{{--<link rel="stylesheet" href="css/regstyle.css">--}}
{{--<body>--}}

{{--<h2>Modal Signup Form</h2>--}}

{{--<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>--}}

{{--<div id="id02" class="modal">--}}
    {{--<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>--}}
    {{--<form class="modal-content animate" method="POST" action="{{ route('register') }}">--}}
        {{--{{ csrf_field() }}--}}
        {{--<div class="container">--}}

            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                {{--<label for="name"><b>Full Name</b></label>--}}
                {{--<input id="name" type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autofocus>--}}
                        {{--@if ($errors->has('name'))--}}
                            {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('name') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
            {{--</div>--}}

            {{--<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">--}}
                {{--<label for="username"><b>Username</b></label>--}}
                {{--<input id="username" type="text" placeholder="Enter username" name="username" value="{{ old('username') }}" required autofocus>--}}
                {{--@if ($errors->has('name'))--}}
                    {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('username') }}</strong>--}}
                            {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}


            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                {{--<div class="col-md-6">--}}
                    {{--<label for="email"><b>E-Mail Address</b></label>--}}
                    {{--<input id="email" type="text" placeholder="Enter your e-mail" name="email" value="{{ old('email') }}" required>--}}

                    {{--@if ($errors->has('email'))--}}
                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                {{--<label for="password"><b>Password</b></label>--}}
                {{--<input id="password" type="password" placeholder="Password" name="password"  required>--}}
                {{--@if ($errors->has('password'))--}}
                    {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            {{--<label for="password-confirm"><b>Repeat Password</b></label>--}}
            {{--<input type="password" placeholder="Repeat Password" id="password-confirm" class="form-control" name="password_confirmation" required>--}}

            {{--<br>--}}
            {{--<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">--}}
                {{--<label for="date"><b>Date of Birth</b></label>--}}
                {{--<input id="dob" type="date" placeholder="Date of Birth" name="dob" value="{{ old('dob') }}" required autofocus>--}}
                {{--@if ($errors->has('dob'))--}}
                    {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('dob') }}</strong>--}}
                            {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
            {{--<br>--}}


            {{--<input type="checkbox" checked="checked"> Remember me--}}
            {{--<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>--}}

            {{--<div class="clearfix">--}}
                {{--<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>--}}
                {{--<button type="submit" class="signupbtn">Sign Up</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}

{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/login.js') }}"></script>--}}


{{--</body>--}}
{{--</html>--}}
