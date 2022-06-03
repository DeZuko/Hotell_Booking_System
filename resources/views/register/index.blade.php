@extends('layouts.app')

@section('content')
    <main class="form-registration w-100 m-auto">
        <form action="/register" method="post">
        @csrf

        <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

        <div class="form-floating">
            <input type="text" name='name' class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Aiman Danial" required>
            <label for="name">Name</label>
        </div>

        <div class="form-floating">
            <input type="email" name='email' class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required>
            <label for="email">Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" name='password' class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>        

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        <small class="d-block text-center mt-3">Already have an account? <a href="/login">Log in</a></small>

        </form>
    </main>   
@endsection