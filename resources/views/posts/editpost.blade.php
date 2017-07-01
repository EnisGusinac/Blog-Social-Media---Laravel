@include('layouts.header')


@forelse($posts as $post)
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>

        <img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
              style="width:60px">
        <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>
        <h4>{{ $user->name }}</h4><br>
        <hr class="w3-clear">
        {{ method_field('PUT') }}

        <p>{{ $post->content }}


        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
                <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
            </div>
        </div>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
    </div>

@empty
    <p> No posts found! </p>
@endforelse
