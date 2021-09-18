@extends('layouts.outer')

@section('container')
<div class="row justify-content-center" style="margin-top: 150px">
    <div class="col-lg-6">
        <main class="form-registration">
            <h1 class="bi bi-app-indicator text-center"></h1>
            <h1 class="h3 mb-3 fw-normal text-center">{{ $tittle }} Form</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" required value="{{ old('name') }}" placeholder="Name">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror   
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" required value="{{ old('username') }}" placeholder="Username">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror   
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{ old('email') }}" placeholder="name@example.com">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror   
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" required placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror   
                </div>

                <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
            </form>
            <small class="d-block mt-3">Have an account? <a class="text-danger" href="/login"> Login Here</a></small>
            <p class="mt-2 mb-3 text-muted"><a class="text-decoration-none text-dark" href="https://github.com/haloalfii">@haloalfii</a></p>
        </main>
    </div>
</div>
@endsection