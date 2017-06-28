@extends('layouts.app')

@section('content')
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            {{--<a href="{{ route('/profile/{$username}') }}">Profile</a>--}}
            <a href="#">Profile</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_fild() }}
                </form>
        </li>
    </ul>
</li>

@endsection