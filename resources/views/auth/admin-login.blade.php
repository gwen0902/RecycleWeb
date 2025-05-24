<!DOCTYPE html>
<html class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/img/logo_icon.png"/>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
        <title>Recycle | Login</title>
    </head>
    <body class ="h-full">
        <div class="min-h-full">
            <nav class="sticky top-0 z-50 bg-green-700 shadow" x-data="{ isOpen: false }">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <!-- Logo -->
                        <a href="/" class="flex-shrink-0"><div class="flex items-center space-x-3">
                            <img src="/img/logo_icon.png" alt="Recycle Logo" class="w-10 h-10">
                            <span class="font-bold text-xl text-white tracking-wide">Recycle | Login</span>
                        </div></a>
                    </div>
                </div>
            </nav>            
            <main>
                <form method="POST" action="/admin/login" class="max-w-md mx-auto mt-30 p-6 bg-white rounded-xl shadow-lg">
                    @csrf
                    <h2 class="text-2xl font-bold mb-6 text-center text-green-700">Login Admin</h2>
                    <div class="flex justify-center mb-4">
                        <div class="w-25 h-25 rounded-full bg-green-700 flex items-center justify-center shadow-lg">
                            <img src="/img/logo_icon.png" alt="Admin Icon" class="w-12 h-12 object-contain">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1" for="email">Email</label>
                        <div class="relative">
                            <span class="absolute left-3 top-2.5 text-green-600">
                                <img src="https://img.icons8.com/ios-filled/50/007906/mail.png" alt="Password" class="w-5 h-5" />
                            </span>
                            <input name="email" type="email" id="email" placeholder="admin@email.com"
                                class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-700 transition"
                                required autofocus>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1" for="password">Password</label>
                        <div class="relative">
                            <span class="absolute left-3 top-2.5 text-green-600">
                                <img src="https://img.icons8.com/ios-filled/50/007906/lock.png" alt="Password" class="w-5 h-5" />
                            </span>
                            <input name="password" type="password" id="password" placeholder="Password"
                                class="pl-10 pr-4 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-700 transition"
                                required>
                        </div>
                    </div>
                    @error('email')
                        <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="w-full py-2 mt-2 bg-green-700 hover:bg-green-800 text-white font-semibold rounded-lg shadow transition">
                        Login
                    </button>
                </form>
            </main>
         
            </div>
            <x-footer></x-footer>
    </body>
</html>
