@extends('layouts.main')

@section('container')
    <h2>{{ $posts->tittle }}</h2>

    <br/>
    <p>By : Alfian Luthfi in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
    {{-- {{ $posts->body }} --}}
    {!! $posts->body !!}

    <br/>
    <br/>
    <a href="/posts" class="btn btn-danger">Back to Post</a>
@endsection

