<!DOCTYPE html>
<html lang="id">

<head>

    <title>@yield('title', 'Toko Praktikum')</title>

    <style>

        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
        }

        nav {
            margin-bottom: 20px;
        }

    </style>

    @stack('styles')

</head>


<body>

    @include('partials.navbar')

    <main>@yield('content')</main>

    <footer>&copy; {{ date('Y') }}</footer>

    @stack('scripts')

</body>

</html>