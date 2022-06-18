<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @yield('menu')
    @yield('slider')
    @yield('content')
    @yield('footer')
</body>
<script src="app.js"></script>
</html>