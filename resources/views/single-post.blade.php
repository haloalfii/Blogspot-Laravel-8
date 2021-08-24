@extends('layouts.main')

@section('container')
    <h2>{{ $posts["tittle"] }}</h2>
    <h5>{{ $posts["author"] }}</h5>
    <p>{{ $posts["body"] }}</p>

    <a href="/posts" class="btn btn-danger">Back to Post</a>
@endsection