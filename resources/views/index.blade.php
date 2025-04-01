<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorito's Garden</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener("scroll", function () {
                let navbar = document.getElementById("navbar");
                if (window.scrollY > window.innerHeight - 100) {
                    navbar.classList.add("bg-black", "shadow-lg");
                    navbar.classList.remove("bg-transparent");
                } else {
                    navbar.classList.add("bg-transparent");
                    navbar.classList.remove("bg-black", "shadow-lg");
                }
            });
        });
    </script>
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 w-full transition-all duration-500 bg-transparent text-white py-4 px-6 flex justify-between items-center z-50">
    <h1 class="text-2xl font-bold">Senorito's Garden</h1>
    <ul class="hidden md:flex space-x-6">
        <li><a href="{{ route('home') }}" class="hover:text-green-400 transition">HOME</a></li>
        <li><a href="#gallery" class="hover:text-green-400 transition">ABOUT US</a></li>
        <li><a href="#contact" class="hover:text-green-400 transition">GALLERY</a></li>
        <li><a href="#contact" class="hover:text-green-400 transition">SERVICES</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-green-400 transition">CONTACT</a></li>
    </ul>
    <button class="md:hidden text-white text-3xl">☰</button>
</nav>

<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center flex items-center justify-center text-white text-center px-6"
         style="background-image: url('img/bg-hero.jpg');">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/30"></div>

    <div class="relative z-10 max-w-3xl">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-wide leading-tight font-serif drop-shadow-lg">
            Step Into a World of Tranquility at <span class="text-green-400">Señorito's Garden</span>
        </h1>
        <p class="mt-4 text-lg md:text-xl font-light tracking-wide opacity-90">
            Escape the hustle and bustle of everyday life. Let nature's beauty rejuvenate your senses. Explore hidden
            paths, discover breathtaking landscapes, and experience unforgettable moments in a serene garden like no other.
        </p>
        <a href="#explore"
           class="mt-6 inline-block bg-green-500 hover:bg-green-600 px-8 py-3 rounded-full text-lg font-semibold transition shadow-lg hover:shadow-xl hover:scale-105">
            Begin Your Journey
        </a>
    </div>
</section>

<section class="relative py-16 bg-white">
    <!-- Dark Overlay -->
    <div class="relative container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-6">
                    Discover Serenity in Nature at Señorito's Garden
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Experience the beauty and tranquility of Senorito's
                    Garden, a modern oasis nestled in nature.
                    Perfect for events or a peaceful retreat, our
                    garden blends lush greenery with elegant design.
                </p>
                <ul class="space-y-6 text-white">
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Breathtaking Landscapes</h4>
                            <p class="text-base text-gray-600">
                                Stroll through beautifully landscaped gardens filled with vibrant flowers, lush greenery, and calming water features.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Perfect for Special Occasions</h4>
                            <p class="text-base text-gray-600">
                                Host weddings, birthdays, and corporate events in a picturesque setting designed to create unforgettable memories.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">A Place to Unwind</h4>
                            <p class="text-base text-gray-600">
                                Enjoy a peaceful retreat with nature, perfect for meditation, reading, or simply taking in the fresh air.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative text-center">
                <div class="relative rounded-lg overflow-hidden w-full max-w-md mx-auto">
                    <img src="{{ asset('img/landing-page-1.png') }}" alt="Image" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
@include('footer')
</body>
</html>
