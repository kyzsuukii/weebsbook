@extends('layouts.page')
@section('title', 'Profile')
@section('body')
    <div class="container mb-4">
        <h1>Profile</h1>
        @if (isset($_GET['edit']))
            @include('profile.edit')
        @else
            @include('profile.show')
        @endif
    </div>
@endsection
