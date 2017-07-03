@include('navbar.navbar')

<div class="w3-row-padding">
    <div class="w3-col m12">
        <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">

                <form action="/posts/{{ $post->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>
                    <h6 class="w3-opacity">Change your post:</h6>
                    <textarea name="content" class="w3-border w3-padding-small">{{ $post->content }}</textarea>

                    <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Change Post</button>

                </form>
            </div>
        </div>
    </div>
</div>

    {{--<div class="w3-row-padding" style="margin:0 -16px">--}}
        {{--<div class="w3-half">--}}
            {{--<img src="/uploads/images/{{ $user->image }}" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">--}}
        {{--</div>--}}
        {{--<div class="w3-half">--}}
            {{--<img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">--}}
        {{--</div>--}}
    {{--</div>--}}
