@extends('layouts.page')
@section('title', 'Login')
@section('body')
    <div class="container mb-4">
        <h1>Login</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="form-label">Username or Email</label>
                <input type="text" name="username" id="username" class="form-control" required />
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <span class="d-inline-block mt-4">Don't have an account? <a href="{{ route('register') }}">Register</a></span>
    </div>
@endsection
