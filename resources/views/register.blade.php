<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
</head>

<body>
    <div class="container mb-4">
        <h1>Register</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required />
            </div>
            <p>Gender</p>
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input" type="radio" name="gender" id="male" value="M" checked
                    required />
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="F" required />
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <div class="mb-4">
                <label for="phone" class="form-label">Phone number</label>
                <input type="text" name="phone" id="phone" class="form-control" required />
            </div>
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required />
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required />
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required />
            </div>
            <div class="mb-4">
                <label for="password2" class="form-label">Confirm password</label>
                <input type="password" name="password2" id="password2" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    @if ($errors->any())
        <script>
            alert("{{ implode('', $errors->all(':message')) }}")
        </script>
    @endif

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
