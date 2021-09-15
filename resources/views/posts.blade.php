@extends('layouts.main')

@section('container')
    <h1>{{ $tittle }}</h1>
    
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title "><a href="/posts/{{ $posts[0]->slug }}" class="text-dark text-decoration-none">{{ $posts[0]->tittle }}</a></h3>
                <p>
                    <small class="text-muted">
                        By <a href="/authors/{{ $posts[0]->author->username }}" style="text-decoration: none">{{ $posts[0]->author->name }}</a> in <a style="text-decoration: none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-danger">Read More..</a>
            </div>
        </div>
    @else
        <p class="text-centet fs-4">No post found.</p>
    @endif

    @foreach ($posts as $post)
    <article class="mb-5 mt-4 border-bottom">
        <h2><a style="text-decoration: none" class="text-dark" href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a></h2>
        <p>By <a href="/authors/{{ $post->author->username }}" style="text-decoration: none">{{ $post->author->name }}</a> in <a style="text-decoration: none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
    </article>  
    @endforeach

@endsection



