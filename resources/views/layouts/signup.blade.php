<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('storage/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    @yield('content')

    <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="{{ asset('js/retina.min.js') }}"></script>
</body>
</html>