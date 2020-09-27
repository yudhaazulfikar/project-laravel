<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
   @include('master._navigasi')
   @yield('content')
</body>
</html>