<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard - BusinessFlow ERP')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-light">

    <div class="d-flex min-vh-100">

        {{-- Sidebar --}}
        @include('dashboard.components.sidebar')

        {{-- Main Content Area --}}
        <div class="flex-grow-1">

            {{-- Navbar --}}
            @include('dashboard.components.navbar')

            {{-- Page Content --}}
            <main class="container-fluid px-4 py-4">

                @yield('content')

            </main>

        </div>

    </div>

    {{-- Bootstrap JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
