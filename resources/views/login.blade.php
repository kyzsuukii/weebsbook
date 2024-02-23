<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
</head>

<body>
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
        <span class="d-inline-block mt-4">Don't have an account? <a href="{{ route("register") }}">Register</a></span>
    </div>
    @if ($errors->any())
        <script>
            alert("{{ implode('', $errors->all(':message')) }}")
        </script>
    @endif

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
