<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
</head>

<body>
    @yield("body")
    @if ($errors->any())
        <script>
            alert("{{ implode('', $errors->all(':message')) }}")
        </script>
    @endif

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
