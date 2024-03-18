@extends('layouts.page')
@section('title', 'Home')
@section('body')
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand mr-auto" href="{{ route('home') }}">WeebsBook</a>
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <img src="{{ asset('assets/img/' . $u->photo()) }}" alt="Avatar"
                            class="rounded-circle border border-primary border-2" style="width: 38px; height: 38px; object-fit: cover;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger" href="{{ route('logout') }}"><i class="fas fa-right-from-bracket mr-3"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="mb-4">Welcome, {{ $u->fullname }}</h1>

        <div class="my-4">
            <a href="{{ route('new_post') }}" class="btn btn-outline-primary">New Post</a>
        </div>
        @foreach ($posts as $post)
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <p class="card-text">{{ $post->content }}</p>
                </div>
                @foreach ($post->getMedia() as $m)
                    @if ($m->type === 'IMAGE')
                        <div class="card-body">
                            <img src="{{ asset('assets/img/user_uploads/' . $u->username . '/' . $m->getFilename()) }}"
                                class="img-fluid" alt="Post Image" style="max-height: 300px; object-fit: cover;">
                        </div>
                    @elseif ($m->type === 'VIDEO')
                        <div class="card-body">
                            <video width="400" controls>
                                <source
                                    src="{{ asset('assets/img/user_uploads/' . $u->username . '/' . $m->getFilename()) }}"
                                    type="video/{{ $m->file_ext }}">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                @endforeach
                <div class="card-footer">
                    <small class="text-muted">Posted {{ $post->created_at->diffForHumans() }}</small>
                </div>
            </div>
        @endforeach
    </div>
@endsection
