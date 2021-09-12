@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>
    <br/>
    @foreach ($categories as $category)
    <ul>
        <li>
            <h5><a style="text-decoration: none" class="text-dark" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h5>
        </li>
    </ul>
        
    @endforeach

@endsection
