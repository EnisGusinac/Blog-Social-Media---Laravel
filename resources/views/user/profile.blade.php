@extends('layouts.app')

<style type="text/css">
    .profile-img {
        max-width: 150px;
        float: left;
        margin-right: 25px;
        border: 5px solid @fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0, 0.3);
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}" alt="">
                        <h2>{{ $user->name }}'s Profile</h2>
                        <h5>Email: {{ $user->email }}</h5>
                        <h5>Birthdate: {{ $user->dob->format('l j F Y') }} ({{$user->dob->age }} years old)</h5>
                        <h5>Joined: {{ $user->created_at->format('l j F Y') }} </h5>
                        <h5>Last update: {{ $user->updated_at->format('g:ia \o\n l jS F Y') }} </h5>

                        <form enctype="multipart/form-data" action="/profile/{{ $user->name }}" method="POST" >
                            <label for="">Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
