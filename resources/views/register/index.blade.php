@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">{{ $tittle }} Form</h1>
            <form>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>
            </form>
            <small class="d-block mt-3">Have an account? <a class="text-decoration-none text-danger" href="/login"> Login Here</a></small>
            <p class="mt-2 mb-3 text-muted"><a class="text-decoration-none text-dark" href="https://github.com/haloalfii">@haloalfii</a></p>
        </main>
    </div>
</div>
@endsection