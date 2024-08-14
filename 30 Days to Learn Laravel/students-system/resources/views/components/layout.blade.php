<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $title ?? 'My Website' }}</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="{{request() -> is('/') ? 'active' : '' }} nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="{{request() -> is('contacts') ? 'active' : '' }} nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="{{request() -> is('about') ? 'active' : '' }} nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="{{request() -> is('students') ? 'active' : '' }} nav-link" href="/students">Students</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    {{$slot}}
    <hr>
    {{ $text ?? 'Some text are missing' }}
</div>

</body>
</html>
