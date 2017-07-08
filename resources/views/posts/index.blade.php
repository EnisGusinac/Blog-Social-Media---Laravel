@include('layouts.header')


@forelse($posts as $post)

<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>

    @if($post->user_id == Auth::id())
        <form action="/posts/{{ $post->id }}" method="POST"
              class="pull-right" style="margin-left: 25px">

            <div class="w3-dropdown-hover">
                <i class="fa fa-caret-down" style="font-size:23px"></i>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="/posts/{{ $post->id }}" class="w3-bar-item w3-button"> Read more</a>
                    <a href="/posts/{{ $post->id }}/edit" class="w3-bar-item w3-button"> Edit post</a>
                    <button class="w3-bar-item w3-button">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}

                    <a onclick="return confirm('Are you sure you want to delete this post?');">Delete post</a></button>

                </div>
            </div>
        </form>
    @endif

    <img  src="/uploads/avatars/{{ $user->avatar }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"
     style="width:60px">
    <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>

@if ( $user->id == Auth::id() )
    <h4>{{ $post->user()->first()->name }}</h4><br>
    <hr class="w3-clear">
@endif
    <p>{{ $post->content }}</p>

    <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
    <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Comment  </b> <span class="w3-tag w3-white">3</span></button></p>


    {{--<button type="button" data-postid="{{ $post->id }}" data-likeurl="{{ route('posts.like', ['post' => $post->id]) }}" class="like-button w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like (<span class="post-{{ $post->id }}-likes">{{$post->likes}}</span>)</button>--}}
    {{--<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>--}}


    <!-- Example of comment field -->
    <div id="demo3" style="display:none">

        @include('comments.create')

        <div class="w3-row w3-margin-bottom">
            <div class="w3-col l2 m3">
                <img src="/w3images/girl_mountain.jpg" style="width:90px;">
            </div>
            <div class="w3-col l10 m9">
                <h4>Jane <span class="w3-opacity w3-medium">April 10, 2015, 7:22 PM</span></h4>
                <p>That was a great runway show! Thanks for everything.</p>
            </div>
        </div>
        <div class="w3-row w3-margin-bottom">
            <div class="w3-col l2 m3">
                <img src="/w3images/boy.jpg" style="width:90px;">
            </div>
            <div class="w3-col l10 m9">
                <h4>John <span class="w3-opacity w3-medium">April 8, 2015, 10:32 PM</span></h4>
                <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        <div class="w3-row w3-margin-bottom">
            <div class="w3-col l2 m3">
                <img src="/w3images/girl_hood.jpg" style="width:90px;">
            </div>
            <div class="w3-col l10 m9">
                <h4>Anja <span class="w3-opacity w3-medium">April 7, 2015, 9:12 PM</span></h4>
                <p>Cant wait for the runway to start!</p>
            </div>
        </div>
    </div>
</div>

@empty

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

