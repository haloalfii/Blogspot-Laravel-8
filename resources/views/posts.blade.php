@extends('layouts.main')

@section('container')
    <h1>{{ $tittle }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 mt-4 border-bottom">
        <h2><a style="text-decoration: none" class="text-dark" href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a></h2>
        <p>By <a href="authors/{{ $post->author->username }}" style="text-decoration: none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
    </article>  
    @endforeach

@endsection



