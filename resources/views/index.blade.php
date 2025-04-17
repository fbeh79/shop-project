<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>
Course ------------------->
@include('header')
<!--------------------- campus -------------------------->
@yield('content')

<!------------------- FOOTER ---------------------->

@include('footer')
</body>
</html>
