@extends('layouts.page')
@section('title', 'Profile')
@section('body')
    <div class="container mb-4">
        <h1>Profile</h1>
        @if (isset($_GET['edit']))
            @include('profile.edit')
        @elseif (isset($_GET['change_password']))
            @include('profile.change_password')
        @else
            @include('profile.show')
        @endif
    </div>
@endsection
