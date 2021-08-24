@extends('layouts.main')

@section('container')
    <h1>Halaman Posts</h1>
    @foreach ($posts as $post)
    <article class="mb-5 mt-4">
        <h2><a style="text-decoration: none" class="text-dark" href="/posts/{{ $post["slug"] }}">{{ $post["tittle"] }}</a></h2>
        <h5>By : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>  
    @endforeach

@endsection