@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>
    @foreach ($categories as $category)
    <br/>
    <ul>
        <li>
            <h2><a style="text-decoration: none" class="text-dark" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>
        
    @endforeach

@endsection
