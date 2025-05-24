<nav class="sticky top-0 z-50 bg-green-700 shadow" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex-shrink-0"><div class="flex items-center space-x-3">
                <img src="/img/logo_icon.png" alt="Recycle Logo" class="w-10 h-10">
                <span class="font-bold text-xl text-white tracking-wide">Recycle</span>
            </div></a>
            <!-- Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="px-3 py-2 rounded-md text-sm font-medium transition
                    {{ Request::is('/') ? 'bg-green-900 text-white' : 'text-gray-100 hover:bg-green-800' }}">
                    Home
                </a>
                <a href="/about" class="px-3 py-2 rounded-md text-sm font-medium transition
                    {{ Request::is('about') ? 'bg-green-900 text-white' : 'text-gray-100 hover:bg-green-800' }}">
                    About
                </a>
                <a href="/blog" class="px-3 py-2 rounded-md text-sm font-medium transition
                    {{ Request::is('blog') ? 'bg-green-900 text-white' : 'text-gray-100 hover:bg-green-800' }}">
                    Blog
                </a>
                <a href="/product" class="px-3 py-2 rounded-md text-sm font-medium transition
                    {{ Request::is('product') ? 'bg-green-900 text-white' : 'text-gray-100 hover:bg-green-800' }}">
                    Product
                </a>
                <a href="/contact" class="px-3 py-2 rounded-md text-sm font-medium transition
                    {{ Request::is('contact') ? 'bg-green-900 text-white' : 'text-gray-100 hover:bg-green-800' }}">
                    Contact
                </a>
            </div>
            <!-- 2 Buttons -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="/admin/login" class="px-4 py-2 rounded-md bg-white text-green-700 font-semibold hover:bg-green-100 transition
                    {{ Request::is('login') ? 'ring-2 ring-white' : '' }}">
                    Sign In
                </a>
                <a href="/register" class="px-4 py-2 rounded-md bg-green-900 text-white font-semibold hover:bg-green-800 transition
                    {{ Request::is('register') ? 'ring-2 ring-white' : '' }}">
                    Sign Up
                </a>
            </div>
            <!-- Mobile Buttons -->
            <div class="md:hidden flex items-center">
                <button @click="isOpen = !isOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-white">
                    <svg class="h-6 w-6" x-show="!isOpen" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="h-6 w-6" x-show="isOpen" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div x-show="isOpen" x-transition class="md:hidden bg-green-700">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium
                {{ Request::is('/') ? 'bg-green-900 text-white' : 'text-white hover:bg-green-800' }}">
                Home
            </a>
            <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium
                {{ Request::is('about') ? 'bg-green-900 text-white' : 'text-white hover:bg-green-800' }}">
                About
            </a>
            <a href="/blog" class="block px-3 py-2 rounded-md text-base font-medium
                {{ Request::is('blog') ? 'bg-green-900 text-white' : 'text-white hover:bg-green-800' }}">
                Blog
            </a>
            <a href="/product" class="block px-3 py-2 rounded-md text-base font-medium
                {{ Request::is('product') ? 'bg-green-900 text-white' : 'text-white hover:bg-green-800' }}">
                Product
            </a>
            <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium
                {{ Request::is('contact') ? 'bg-green-900 text-white' : 'text-white hover:bg-green-800' }}">
                Contact
            </a>
            <a href="/login" class="block mt-2 px-3 py-2 rounded-md bg-white text-green-700 font-semibold hover:bg-green-100
                {{ Request::is('login') ? 'ring-2 ring-white' : '' }}">
                Sign In
            </a>
            <a href="/register" class="block mt-2 px-3 py-2 rounded-md bg-green-900 text-white font-semibold hover:bg-green-800
                {{ Request::is('register') ? 'ring-2 ring-white' : '' }}">
                Sign Up
            </a>
        </div>
    </div>
</nav>