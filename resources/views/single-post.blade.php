@extends('layouts.main')

@section('container')
    <h2>{{ $posts->tittle }}</h2>
    {{-- {{ $posts->body }} --}}
    {!! $posts->body !!}

    <br/>
    <br/>
    <a href="/posts" class="btn btn-danger">Back to Post</a>
@endsection

