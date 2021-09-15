@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $posts->tittle }}</h2>

            <br/>
            <p>By <a href="/authors/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {{-- {{ $posts->body }} --}}
                {!! $posts->body !!}
            </article>
            

            <br/>
            <a href="/posts" class="btn btn-danger">Back to Post</a>
        </div>   
    </div>
</div>
    
@endsection

