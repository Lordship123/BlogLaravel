<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
@section('admin_navbar')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/private/@yield('href')">@yield('second-nav-item')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@show
<div class="container blog_home_container">
    <h1 class="mt-5 mb-4 text-center">@yield('title')</h1>
    @yield('content')
</div>
</body>
</html>
