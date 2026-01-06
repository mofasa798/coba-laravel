@extends('layouts.main')

@section('container')
        <article class="mb-5">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
             {!! $post->body !!} 
        </article>

        <a href="/posts">Back to Posts</a>
@endsection