@include('layouts.header')


@forelse($posts as $post)
<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>


    @if($post->user_id == Auth::id())
        <form action="/home/{{ $post->id }}" method="POST"
              class="pull-right" style="margin-left: 25px">

            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button class="btn btn-xs">
                Edit post
            </button>
            <button class="btn btn-xs" onclick="return confirm('Are you sure you want to delete this post?');">
                Delete post
            </button>
        </form>
    @endif

    <img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
     style="width:60px">
    <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>

    <h4>{{ $user->name }}</h4><br>
    <hr class="w3-clear">

    <p>{{ $post->shortContent }}
        <a href="/posts/{{ $post->id }}"> Read more</a></p>


    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
            <img src="/uploads/images/{{ $user->avatar }}" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
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

<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
    <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
    <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>
    <h4>John Doe</h4><br>
    <hr class="w3-clear">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
    <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
    <span class="w3-right w3-opacity">16 min</span>
    <h4>Jane Doe</h4><br>
    <hr class="w3-clear">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
</div>

<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
    <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
    <span class="w3-right w3-opacity">32 min</span>
    <h4>Angie Jane</h4><br>
    <hr class="w3-clear">
    <p>Have you seen this?</p>
    <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
    <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
</div>

