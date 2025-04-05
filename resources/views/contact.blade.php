<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorito's Garden</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery -->
</head>

<body class="bg-gray-100">

@include('layouts.header')

<!-- Hero Section -->
<section id="hero" class="relative text-white bg-cover" style="background-image: url('{{ asset('img/senorita-garden-main.png') }}')">
    <div class="relative w-full h-[70vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black to-black opacity-40"></div>
        <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
            <svg class="w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="wave-pattern" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0 50 Q25 0 50 50 T100 50" fill="none" stroke="rgba(255,255,255,0.12)"
                              stroke-width="2" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#wave-pattern)" />
            </svg>
        </div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                Welcome to Senorito's Garden
            </h1>
            <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                Have questions? We're here to help.
            </p>
            <p class="mt-2 text-sm md:text-lg tracking-wide text-gray-200">
                Reach out and we'll get back to you as soon as possible.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 px-4 sm:px-6 lg:px-20 bg-white">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Contact Us</h2>
                <p class="text-lg text-gray-600 leading-relaxed">We'd love to hear from you! Reach out through the details below or fill out the form.</p>

                <!-- New subtext under the title -->
                <p class="text-base text-gray-600">Whether you have questions, want to book an event, or just want to say hello, we're happy to assist. Please provide your details below and we’ll get back to you as soon as possible.</p>

                <div class="space-y-2">
                    <p class="flex items-center space-x-2 text-gray-800 text-lg">
                        <span>📞</span> <span>233-123</span>
                    </p>
                    <p class="flex items-center space-x-2 text-gray-800 text-lg">
                        <span>✉️</span> <span>company.email@gmail.com</span>
                    </p>
                    <p class="flex items-center space-x-2 text-gray-800 text-lg">
                        <span>📍</span> <span>15 West 3rd St., Palawan, 6080</span>
                    </p>
                </div>

                <!-- Responsive Map -->
                <div class="mt-6 w-full h-64 rounded-lg overflow-hidden shadow-lg">
                    <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?q=Palawan,6080&t=&z=13&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="bg-gray-100 p-6 sm:p-8 rounded-lg shadow-xl">
                <h3 class="text-2xl font-semibold text-gray-900 mb-6">Get In Touch</h3>

                <!-- New subtext for the form -->
                <p class="text-base text-gray-600 mb-4">
                    Please fill out the form below with your details, and we'll respond as soon as possible. We look forward to assisting you!
                </p>

                <form id="contactForm" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="full_name"
                           class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                           placeholder="Full Name">
                    <input type="email" name="email"
                           class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                           placeholder="Email Address">
                    <input type="text" name="phone"
                           class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                           placeholder="Phone">
                    <input type="text" name="subject"
                           class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                           placeholder="Subject">
                    <textarea name="message"
                              class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                              placeholder="Your Message" rows="4"></textarea>
                    <button type="submit"
                            class="w-full bg-black text-white py-3 rounded-lg text-lg font-medium hover:bg-gray-800 transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
@include('footer')

<script>
    $(document).ready(function () {
        const $navbar = $('#navbar');  // Corrected navbar selection
        const $hero = $('#hero'); // Target the hero section

        function toggleNavbarBackground() {
            if ($(window).scrollTop() > $hero.outerHeight() - 60) {  // Scroll after hero section
                $navbar.addClass('bg-black shadow-lg');
                $navbar.removeClass('bg-transparent');
            } else {
                $navbar.removeClass('bg-black shadow-lg');
                $navbar.addClass('bg-transparent');
            }
        }

        $(window).on('scroll', toggleNavbarBackground);
    });
</script>

</body>

</html>
