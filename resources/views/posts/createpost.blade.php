
<div class="w3-row-padding">
    <div class="w3-col m12">
        <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">

                <form action="/posts" method="POST">
                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>
                    <h6 class="w3-opacity">Create your post:</h6>
                    <textarea name="content" class="w3-border w3-padding-small"></textarea>

                    {{--<input style="width: 100%; height: 10%;" name="content" class="w3-border w3-padding-small">--}}
                <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>

                    {{--<form enctype="multipart/form-data" action="/posts" method="POST">--}}
                    <input type="file" name="image"><i class="fa fa-image"></i> &nbsp; Upload Image
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                    {{--<a type="submit" name="image" class="w3-button w3-theme"><i class="fa fa-image"></i> &nbsp;Upload image</a>--}}
                </form>
            </div>
        </div>
    </div>
</div>


