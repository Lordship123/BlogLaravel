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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/private/@yield('href')">@yield('second-nav-item')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show
<div class="container blog_home_container">
    <h1 class="mt-5 mb-4 text-center">@yield('title')</h1>
    @yield('content')
</div>
<script>
    $(document).on('click','.navbar-collapse.show',function(e) {
        $(this).collapse('hide');
    });
</script>
</body>
</html>
