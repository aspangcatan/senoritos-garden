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
    <style>
        .bg-custom {
            background-color: #228B22 ;
        }

        .bg-custom:hover {
            background-color: #1C6B1C ;
        }
    </style>
</head>
<body class="bg-gray-100">
<!-- Navbar -->
@include('layouts.header')
<section class="relative h-screen bg-cover bg-center text-white flex items-center justify-center"
         style="background-image: url('{{ asset('img/bg-hero.jpg') }}');">
    <div class="absolute inset-0 bg-gradient-to-br from-green-900/60 to-black/30"></div>
    <div class="relative z-10 text-center px-4 max-w-4xl">
        <h1 class="text-4xl md:text-6xl font-extrabold font-serif leading-tight drop-shadow-lg">
            Reconnect With Nature at <span class="text-green-400">Señorito's Garden</span>
        </h1>
        <p class="mt-4 text-lg md:text-xl font-light text-gray-100">
            Where serenity meets celebration — explore lush landscapes, hidden blooms, and peaceful corners designed for
            rest or grand events.
        </p>
    </div>
</section>
<section class="bg-gray-100 py-12 md:py-24">
    <div class="container mx-auto px-6 md:px-16">
        <div class="flex flex-col gap-12">
            <!-- Top: Text -->
            <div>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed">
                    Señorito’s Garden is more than a destination — it’s a living story of serenity, beauty, and
                    connection.
                    Rooted in our passion for nature and inspired by community, we aim to provide an immersive garden
                    experience where guests can slow down, reconnect with nature, and celebrate life’s most meaningful
                    moments.
                    <br><br>
                    Whether you're here to wander, learn, or celebrate, our garden welcomes you with open arms and
                    blooming hearts.
                </p>
                <p class="text-lg md:text-xl text-gray-600 mt-6">
                    🎥 Watch the video and get a glimpse of what makes Señorito’s Garden truly magical.
                </p>
            </div>

            <!-- Bottom: Video -->
            <div class="rounded-xl overflow-hidden shadow-lg w-full h-[50vh] md:h-[75vh]">
                <iframe class="w-full h-full"
                        src="https://www.youtube.com/embed/3BGSa5O5FX4?si=wCpxaPfmJFg0j9QX"
                        frameborder="0"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-16 md:py-20 relative z-20">
    <div class="container mx-auto px-6 md:px-16">
        <div class="flex flex-col md:flex-row gap-12 items-start">
            <!-- Left: Text -->
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6">Your Oasis Awaits</h2>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed mb-6">
                    Step into Señorito’s Garden, a sanctuary where time slows and nature speaks. From floral trails to
                    shaded pavilions, each visit promises peace and beauty.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="inline-block w-6 h-6 mt-1 mr-3 text-green-600">🌼</span>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-700">Immersive Plant Life</h4>
                            <p class="text-gray-600">Over 200 species of plants curated for your sensory delight and
                                educational exploration.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-6 h-6 mt-1 mr-3 text-green-600">🎉</span>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Garden Events</h4>
                            <p class="text-gray-600">Celebrate weddings, birthdays, or corporate gatherings in the heart
                                of nature’s beauty.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-6 h-6 mt-1 mr-3 text-green-600">🧘</span>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Mindful Retreats</h4>
                            <p class="text-gray-600">Enjoy moments of mindfulness with garden yoga, meditation zones,
                                and shaded reading nooks.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Right: Image -->
            <div class="md:w-1/2">
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[50vh] md:h-[75vh]">
                    <img src="{{ asset('img/img-section-1-a.png') }}" alt="Garden Entrance"
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative py-16 bg-gradient-to-br from-green-50 via-white to-green-100">
    <div
        class="absolute inset-0 bg-[url('{{ asset('img/leaf-pattern.png') }}')] bg-repeat opacity-5 pointer-events-none"></div>

    <div class="relative container mx-auto px-6 md:px-12 lg:px-20">
        <div class="flex flex-col md:flex-row gap-12 items-start">
            <!-- Left: Image -->
            <div class="md:w-1/2 order-last md:order-first">
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[150px] md:h-[300px] lg:h-[700px]">
                    <img src="{{ asset('img/img-section-2-a.png') }}" alt="Garden Entrance"
                         class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Right: Text -->
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6">
                    Discover Serenity in Nature at Señorito's Garden
                </h2>

                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed mb-8">
                    Experience the beauty and tranquility of Senorito's
                    Garden, a modern oasis nestled in nature.
                    Perfect for events or a peaceful retreat, our
                    garden blends lush greenery with elegant design.
                </p>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Breathtaking Landscapes</h4>
                            <p class="text-base text-gray-600">
                                Stroll through beautifully landscaped gardens filled with vibrant flowers, lush
                                greenery, and calming water features.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Perfect Venue for Celebrations</h4>
                            <p class="text-base text-gray-600">
                                Whether you're planning a wedding, corporate event, or a birthday, we offer the perfect
                                venue for any occasion.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-16">
        <div class="flex flex-col gap-12">
            <!-- Top: Text -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                    Get in Touch with Us
                </h2>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed mb-8 text-center">
                    Have questions or want to book an event? We're here to assist you and make your experience memorable.
                </p>

                <!-- CTA Text and Button -->
                <div class="text-center mb-12">
                    <p class="text-lg text-gray-600 mb-4 mx-auto max-w-3xl">
                        Whether you're planning a special event, have questions about our garden, or want to schedule a tour, we're just a click away. Let us help you create unforgettable moments at Señorito's Garden.
                    </p>
                    <p class="text-lg text-gray-600 mb-6 mx-auto max-w-3xl">
                        Reach out to us, and our team will be happy to answer any inquiries or assist with booking your next event. We can't wait to hear from you!
                    </p>

                    <div class="text-center mt-12">
                        <a href="{{ route('contact') }}"
                           class="inline-block px-12 py-4 text-xl font-extrabold text-white rounded-full shadow-2xl
       bg-custom
       transform hover:scale-105 focus:scale-105 transition-transform duration-300 ease-out
       shadow-pink-400/50 tracking-wide
       md:px-16 md:py-6 md:text-3xl
       cursor-pointer">
                            Inquire now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Information Section -->
            <div class="mt-12 text-center">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">
                    Why Choose Señorito's Garden?
                </h3>
                <p class="text-lg text-gray-600 mb-4 mx-auto max-w-3xl">
                    Our garden offers a unique blend of natural beauty, modern amenities, and an elegant setting, making it the perfect venue for any occasion. Whether it's a wedding, corporate event, or personal celebration, Señorito's Garden provides the ideal backdrop for your special day.
                </p>
                <p class="text-lg text-gray-600 mx-auto max-w-3xl">
                    Get in touch today, and let's make your event as beautiful as nature itself.
                </p>
            </div>
        </div>
    </div>
</section>
@include('footer')
</body>
</html>
