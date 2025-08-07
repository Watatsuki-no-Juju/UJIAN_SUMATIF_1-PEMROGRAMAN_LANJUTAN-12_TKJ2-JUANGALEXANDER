<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Daftar Siswa')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 p-4 text-white font-bold mb-6">
        <div class="container mx-auto">
            UJIAN SUMATIF 1 - Daftar Siswa
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>