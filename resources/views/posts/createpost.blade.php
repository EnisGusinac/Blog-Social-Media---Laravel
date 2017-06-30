@include('layouts.header')


<div class="row">
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="w3-row-padding">
                    <div class="w3-col m12">
                        <div class="w3-card-2 w3-round w3-white">
                            <div class="w3-container w3-padding">

                                <form action="/posts" method="POST">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                    <span class="w3-right w3-opacity">{{ $user->created_at->format('l j F Y') }}</span>
                                    <h6 class="w3-opacity">Create your posts:</h6>
                                    <textarea name="content" cols="90" rows="3">



                                    </textarea>
                                <button type="submit" for="post_on" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

