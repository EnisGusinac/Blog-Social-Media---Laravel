@include('layouts.header')

<h2>Editing post with id {{ $post->id }}</h2>


<form action="/posts/{{ $post->id }}" method="POST"
      class="pull-right" style="margin-left: 25px">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>

    <button type="submit">Update post</button>
</form>