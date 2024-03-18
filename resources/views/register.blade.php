@extends('layouts.page')
@section('title', 'Register')
@section('body')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white py-3">
                        <h3 class="text-center"><i class="fas fa-user-plus"></i> Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Fullname</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="fullname" id="fullname" class="form-control" required
                                        placeholder="Enter your fullname">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" name="gender" id="gender" required>
                                    <option value="">Select gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    <input type="text" name="phone" id="phone" class="form-control" required
                                        placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    <input type="text" name="username" id="username" class="form-control" required
                                        placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" required
                                        placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" required
                                        placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Confirm password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password2" id="password2" class="form-control" required
                                        placeholder="Confirm your password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i>
                                Register</button>
                        </form>

                    </div>
                    <div class="card-footer text-center">
                        <span class="d-inline-block">Already have an account? <a
                                href="{{ route('login') }}">Login</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
