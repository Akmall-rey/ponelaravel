
@extends('layouts.main')

@section('container')
    <article class="mb-3">
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection