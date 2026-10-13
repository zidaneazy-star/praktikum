<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Blade')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #333; padding: 8px; }
        th { background: #f0f0f0; }
        nav a { margin-right: 15px; text-decoration: none; }
        .alert { padding: 12px; margin-bottom: 15px; border-radius: 4px; }
        .alert-bahaya { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .alert-sukses { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    <footer style="margin-top: 30px; border-top: 1px solid #ccc; padding-top: 10px;">
        &copy; {{ date('Y') }} Praktikum Laravel
    </footer>
    @stack('scripts')
</body>
</html>
