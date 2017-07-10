
@extends('layouts.header')

@section('content')

@forelse($comments as $comment)

    <div class="w3-row w3-margin-bottom">
        <div class="w3-col l2 m3">

            @if($comment->user_id == Auth::id())
            <img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                  style="width:60px">
        </div>
        <div class="w3-col l10 m9">
            <form action="/comment" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <h4>{{ $user->name}} <span class="w3-opacity-min w3-small w3-right">{{ $user->created_at->diffForHumans() }}</span></h4>

                    @if(strlen( $comment->content) > 200)
                <p>{{ $comment->shortComment }} </p>
                    @else
                <p> {{ $comment->content }}</p>
                    @endif

            </form>
            @endif

        </div>
    </div>
@empty

@endforelse


@endsection





{{--<div class="w3-row w3-margin-bottom">--}}

    {{--@if ( $user->id == Auth::id() )--}}
        {{--<form action="/comment" method="GET">--}}
            {{--{{ csrf_field() }}--}}

            {{--<div class="w3-col l2 m3">--}}
                {{--<img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"--}}
                      {{--style="width:60px">--}}
            {{--</div>--}}
            {{--<div class="w3-col l10 m9">--}}
                {{--<p>{{ $user->name }} <span class="w3-opacity w3-medium">{{ $user->created_at->format('l j F Y') }}</span></p>--}}

                {{--{{ csrf_field() }}--}}
                {{--<input type="hidden" name="user_id" value="{{ Auth::user()->first()->name }}">--}}
                {{--<hr class="w3-clear">--}}
                {{--@endif--}}
                {{--<p>{{ $comment->content }}</p>--}}

                {{--<span class="w3-right w3-opacity-min">{{ $user->created_at->format('l j F Y') }}</span>--}}
        {{--</form>--}}
{{--</div>--}}