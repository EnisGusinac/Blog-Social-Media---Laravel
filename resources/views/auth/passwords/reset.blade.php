@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{--<!DOCTYPE html>--}}
{{--<html>--}}

{{--Login style--}}
{{--<link rel="stylesheet" href="css/loginstyle.css">--}}

{{--<body>--}}

{{--<div id="id01" class="modal">--}}

    {{--<div class="panel-body">--}}
        {{--@if (session('status'))--}}
            {{--<div class="alert alert-success">--}}
                {{--{{ session('status') }}--}}
            {{--</div>--}}
        {{--@endif--}}

            {{--<form class="modal-content animate"  role="form" method="POST" action="{{ route('password.request') }}">--}}
        {{--{{ csrf_field() }}--}}

        {{--<div class="container">--}}
            {{--<input type="hidden" name="token" value="{{ $token }}">--}}
            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}

                {{--<div class="col-md-6">--}}
                    {{--<label for="email"><b>E-Mail Address</b></label>--}}
                    {{--<input id="email" type="text" placeholder="Enter e-mail" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

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
                    {{--<input id="password" type="password" placeholder="Enter new password" name="password" required>--}}

                    {{--@if ($errors->has('password'))--}}
                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                {{--<div class="col-md-6">--}}
                    {{--<input id="password-confirm" type="password" placeholder="Confirm your password" name="password_confirmation" required>--}}

                    {{--@if ($errors->has('password_confirmation'))--}}
                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<button type="submit">Login</button>--}}
            {{--<input type="checkbox" checked="checked" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me--}}
        {{--</div>--}}

        {{--<div class="container" style="background-color:#f1f1f1">--}}
            {{--<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>--}}
            {{--<span class="psw">Confirm Changes <a href="{{ route('password.request') }}">password?</a></span>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}


{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/login.js') }}"></script>--}}

{{--</body>--}}
{{--</html>--}}

