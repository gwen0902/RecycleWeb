<!DOCTYPE html>
<html class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo_icon.png"/>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
        <title>Recycle</title>
    </head>
    <body class ="h-full">
        <div class="min-h-full">
            <x-navbar></x-navbar>
            <x-header>Dashboard</x-header> <!-- NGK PAKE!! -->
            <main>
                   {{ $slot }}
            </main>
         
            </div>
            <x-footer></x-footer>
    </body>
</html>
