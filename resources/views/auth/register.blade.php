
<!DOCTYPE html>
<html>
{{--Register style--}}
<link rel="stylesheet" href="css/style.css">
<body>

<h2>Modal Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content animate" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="container">

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name"><b>Full Name</b></label>
                <input id="name" type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username"><b>Username</b></label>
                <input id="username" type="text" placeholder="Enter username" name="username" value="{{ old('username') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <label for="email"><b>E-Mail Address</b></label>
                    <input id="email" type="text" placeholder="Enter your e-mail" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>



            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                <label for="date"><b>Date of Birth</b></label>
                <input id="dob" type="date" placeholder="Date of Birth" name="dob" value="{{ old('dob') }}" required autofocus>
                @if ($errors->has('dob'))
                    <span class="help-block">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password"><b>Password</b></label>
                <input id="password" type="password" placeholder="Password" name="password"  required>
                @if ($errors->has('password'))
                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                @endif
            </div>

            <label for="password-confirm"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" id="password-confirm" class="form-control" name="password_confirmation" required>
            <input type="checkbox" checked="checked"> Remember me
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

<!-- Scripts -->
<script src="{{ asset('js/login.js') }}"></script>


</body>
</html>
