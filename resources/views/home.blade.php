@extends('layouts.page')
@section('title', 'Home')
@section('body')
    <div class="container mb-4">
        <h1>Welcome {{ $u->fullname }}</h1>
        <span class="d-inline-block mt-4"><a href="{{ route('logout') }}">Logout</a></span>
        <span class="d-inline-block mt-4"><a href="{{ route('profile') }}">Profile</a></span>

    </div>
@endsection
