@extends('layouts.main')

@section('container')
    <h1>Halaman Daftar Postingan</h1>
    @foreach ($posts as $post)
    <article class="mb-5 mt-4">
        <h2><a style="text-decoration: none" class="text-dark" href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>  
    @endforeach

@endsection



