@extends('layouts.page')
@section('title', 'Login')
@section('body')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="text-center"><i class="fas fa-sign-in-alt"></i> Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username or Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>
                                Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <span class="d-inline-block">Don't have an account? <a
                                href="{{ route('register') }}">Register</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
