
@include('navbar.navbar')

<div class="w3-card-4">

    <header class="w3-container w3-blue">
        <h1>{{ $user->name }}</h1>
    </header>

    <div class="w3-container">
        <img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle">
        <h2>{{ $user->name }}'s Profile</h2>
        <h5>Email: {{ $user->email }}</h5>
        <h5>Birthdate: {{ $user->dob->format('l j F Y') }} ({{$user->dob->age }} years old)</h5>
        <h5>Joined: {{ $user->created_at->format('l j F Y') }} </h5>
        <h5>Last update: {{ $user->updated_at->format('g:ia \o\n l jS F Y') }} </h5>

        <form enctype="multipart/form-data" action="/profile" method="POST">
            <label for="">Update Profile Image</label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="pull-right btn btn-sm btn-primary">
        </form>
    </div>

    <footer class="w3-container w3-blue">

        {{--<button class="w3-button w3-block w3-dark-grey">+ Connect</button>--}}
    </footer>

</div>



{{--<style type="text/css">--}}
    {{--.profile-img {--}}
        {{--max-width: 150px;--}}
        {{--float: left;--}}
        {{--margin-right: 25px;--}}
        {{--border: 5px solid @fff;--}}
        {{--border-radius: 100%;--}}
        {{--box-shadow: 0 2px 2px rgba(0,0,0, 0.3);--}}
    {{--}--}}
{{--</style>--}}

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-body">--}}
                        {{--<img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}">--}}
                        {{--<h2>{{ $user->name }}'s Profile</h2>--}}
                        {{--<h5>Email: {{ $user->email }}</h5>--}}
                        {{--<h5>Birthdate: {{ $user->dob->format('l j F Y') }} ({{$user->dob->age }} years old)</h5>--}}
                        {{--<h5>Joined: {{ $user->created_at->format('l j F Y') }} </h5>--}}
                        {{--<h5>Last update: {{ $user->updated_at->format('g:ia \o\n l jS F Y') }} </h5>--}}

                        {{--<form enctype="multipart/form-data" action="/profile" method="POST">--}}
                            {{--<label for="">Update Profile Image</label>--}}
                            {{--<input type="file" name="avatar">--}}
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            {{--<input type="submit" class="pull-right btn btn-sm btn-primary">--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
