<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default</title>
</head>

<body>
    <h1>Default</h1>
    <a href="{{ route("comics.index") }}">Comics Index</a>
    <br />
    @yield('content')


</body>

</html>