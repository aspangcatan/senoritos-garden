<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorita Garden</title>
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
    <h1 class="text-2xl font-bold">Senorita Garden</h1>
    <ul class="hidden md:flex space-x-6">
        <li><a href="#explore" class="hover:text-green-400 transition">Explore</a></li>
        <li><a href="#gallery" class="hover:text-green-400 transition">Gallery</a></li>
        <li><a href="#contact" class="hover:text-green-400 transition">Contact</a></li>
    </ul>
    <button class="md:hidden text-white text-3xl">☰</button>
</nav>

<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center" style="background-image: url('img/bg-hero.png');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white text-center px-6">
        <h1 class="text-6xl font-bold mb-4">Welcome to Garden Escape</h1>
        <p class="text-xl">Discover the beauty of nature in a modern and serene garden experience.</p>
        <a href="#explore" class="mt-6 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg text-lg font-semibold transition">Explore Now</a>
    </div>
</section>

<!-- About Section -->
<section id="explore" class="py-20 px-6 text-center bg-white">
    <h2 class="text-4xl font-bold text-gray-800">A Modern Garden Paradise</h2>
    <p class="mt-4 text-gray-600 text-lg max-w-3xl mx-auto">Experience the harmony of lush greenery, vibrant flowers, and tranquil landscapes designed to refresh your soul.</p>
</section>

<!-- Gallery Section -->
<section id="gallery" class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 pb-20 bg-gray-100">
    <img src="https://source.unsplash.com/600x400/?garden,plants" class="rounded-lg shadow-lg w-full h-60 object-cover" alt="Garden 1">
    <img src="https://source.unsplash.com/600x400/?nature,park" class="rounded-lg shadow-lg w-full h-60 object-cover" alt="Garden 2">
    <img src="https://source.unsplash.com/600x400/?botanical,garden" class="rounded-lg shadow-lg w-full h-60 object-cover" alt="Garden 3">
</section>

<!-- Footer -->
<footer id="contact" class="bg-gray-900 text-white text-center py-6">
    <p>&copy; 2025 Garden Escape. All Rights Reserved.</p>
</footer>
</body>
</html>
