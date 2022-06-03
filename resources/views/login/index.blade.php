@extends('layouts.app')

@section('content')

    {{-- Alert Successful Registration --}}
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Alert Error  --}}
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 

    <main class="form-signin w-100 m-auto">
        <form action="/login" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>
        
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                <label for="email">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>

            <p class="text-center mt-3 mb-3 text-muted">&copy; 2017–2022</p>

        </form>

    </main>    
@endsection