
@extends('layouts.header')

<div class="w3-row w3-margin-bottom">
    <div class="w3-col l2 m3">
        @forelse($comments as $comment)

            <img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
                  style="width:60px">
    </div>
    <div class="w3-col l10 m9">
        <form action="/comment/{{ $comment->id }}" method="GET">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <h4>{{ $user->name}} <span class="w3-opacity w3-medium">{{ $user->created_at->format('l j F Y') }}</span></h4>
            <p>{{ $comment->content }} JAneeeee</p>

        </form>
        @empty

        @endforelse
    </div>
</div>

