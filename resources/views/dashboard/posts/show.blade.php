@extends('dashboard.layouts-dash.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8">
                <h2>{{ $post->tittle }}</h2>

                <br />
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my
                    Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a> --}}

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span>Delete</button>
                </form>


                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-4">

                <article class="my-3 fs-5">
                    {{-- {{ $post->body }} --}}
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
