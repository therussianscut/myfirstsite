<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>



<ul>


    <li><a href="/contact"> Contact Page</a></li>
    <li><a href="/about"> About</a></li>
    <li><a href="/"> Welcome</a></li>
    <li><a href="/projects/create"> Create</a></li>
    <li><a href="/projects"> List</a></li>


</ul>
@yield('content')
</body>
</html>