@extends('layouts.app')
<style type="text/css">
    .profile-img{
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px  rgba(0, 0, 0, 0.3);
    }

</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <img class="profile-img" src="https://www.w3schools.com/w3css/img_avatar3.png" alt="">

                    <div class="panel-body text-center">
                        <h5>{{ $user->name }}</h5>
                        <h5>{{ $user->email }}</h5>
                        <h5>{{ $user->dob->format('l j F Y') }} ({{ $user->dob->age }} years old)</h5>

                        <button class="btn btn-success">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection