
<div class="w3-row w3-margin-bottom">
    <div class="w3-col l2 m3">
        <img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
              style="width:60px">
    </div>
    <div class="w3-col l10 m9">
        {{--<p>{{ $user->name }} <span class="w3-opacity w3-medium">{{ $user->created_at->format('l j F Y') }}</span></p>--}}
        <form action="/comments" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <span class="w3-left w3-opacity">{{ $user->name}}</span>

            <span class="w3-right w3-opacity-min">{{ $user->created_at->format('l j F Y') }}</span>
            {{--<h6 class="w3-opacity">comment:</h6>--}}
            <textarea name="content" class="w3-border w3-padding-small"></textarea>

            <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>

    </div>
</div>