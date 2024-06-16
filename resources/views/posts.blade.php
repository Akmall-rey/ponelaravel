@extends('layouts.main')

@section('container')
<h1 class="mb-5">
    Halaman Blog Posts
</h1>
    @foreach ($posts as $posts)
        <article class="mb-4">
            <h2>
                <a href="/posts/{{ $posts->slug }}">
                    {{ $posts->title }}
                </a>
            </h2>
            <p>{{ $posts->excerpt }}</p>
        </article>
    @endforeach
@endsection