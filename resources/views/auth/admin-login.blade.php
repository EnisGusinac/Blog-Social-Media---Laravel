
<!DOCTYPE html>
<html>

{{--Login style--}}
<link rel="stylesheet" href="css/loginstyle.css">

<body>

<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin Login</button>

<div id="id01" class="modal">

    <form class="modal-content animate"  role="form" method="POST" action="{{ route('admin.login.submit') }}">
        {{ csrf_field() }}

        <div class="container">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <label for="email"><b>E-Mail Address</b></label>
                    <input id="email" type="text" placeholder="Enter e-mail" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="col-md-6">
                    <label for="password"><b>Password</b></label>
                    <input id="password" type="password" placeholder="Enter your password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="{{ route('password.request') }}">password?</a></span>
        </div>
    </form>
</div>


<!-- Scripts -->
<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>

