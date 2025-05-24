<!DOCTYPE html>
<html class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="img/logo_icon.png"/>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
        <title>Recycle | Blog</title>
    </head>
    <body class ="h-full">
        <div class="min-h-full">
            <x-navbar></x-navbar>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Contact Form -->
                        <div class="bg-white p-8 rounded-lg shadow flex flex-col justify-center">
    <h2 class="text-2xl font-bold mb-4 text-green-700">Contact Information</h2>
    <div class="space-y-4">
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-700 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2h5"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span class="text-gray-700">Jl. Contoh Alamat No. 123, Pontianak, Kalimantan Barat</span>
        </div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-700 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0V8a4 4 0 00-8 0v4m8 0v4a4 4 0 01-8 0v-4"></path>
            </svg>
            <span class="text-gray-700">contact@recycle.com</span>
        </div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-700 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm10-10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
            <span class="text-gray-700">+62 812-3456-7890</span>
        </div>
        <div class="flex items-center">
            <svg class="w-6 h-6 text-green-700 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 15a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v8z"></path>
            </svg>
            <span class="text-gray-700">Senin - Jumat, 08.00 - 17.00</span>
        </div>
    </div>
</div>
                        <!-- Google Maps -->
                        <div class="rounded-lg overflow-hidden shadow">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.544433918887!2d109.28221090777545!3d-0.020925998647522537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d58c16b5202b7%3A0xcf320126f1250a91!2sPontianak%20Barat%2C%20Pontianak%2C%20West%20Kalimantan!5e0!3m2!1sen!2sid!4v1747906346918!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </main>
            </div>
<x-footer></x-footer>
    </body>
</html>
