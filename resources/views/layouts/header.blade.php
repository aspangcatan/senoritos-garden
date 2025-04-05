<nav id="navbar"
     class="fixed top-0 left-0 w-full transition-all duration-500 bg-transparent text-white py-4 px-6 flex justify-between items-center z-50">
    <h1 class="text-2xl font-bold">Senorito's Garden</h1>
    <ul class="hidden md:flex space-x-6">
        <li><a href="{{ route('home') }}" class="hover:text-green-400 transition">HOME</a></li>
        <li><a href="#" class="hover:text-green-400 transition">ABOUT US</a></li>
        <li><a href="#" class="hover:text-green-400 transition">GALLERY</a></li>
        <li><a href="#" class="hover:text-green-400 transition">SERVICES</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-green-400 transition">CONTACT</a></li>
    </ul>
    <button class="md:hidden text-white text-3xl">☰</button>
</nav>
