@extends('layouts.main')

@section('container')
    <h1></h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" width="200px" class="img-thumbnail rounded-circle">
@endsection
    
