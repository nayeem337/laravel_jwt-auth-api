<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'JWT Auth API')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ route('login') }}">
                JWT Auth API
            </a>

            <div class="ms-auto d-flex gap-2">

                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
                    Login
                </a>

                <a href="{{ route('register') }}" class="btn btn-primary btn-sm">
                    Register
                </a>

            </div>

        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-5">

        @yield('content')

    </main>

    <!-- Bootstrap 5 JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
