@extends('layouts.app')
@section('content')
    <section class="relative h-screen text-white">
        <!-- Static Text for All Slides -->
        <div class="absolute inset-0 flex items-center justify-center z-10 px-4">
            <div class="text-center max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                    Step into <br /><span class="text-green-400">Señorito’s Garden</span>
                </h1>
                <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                    A sanctuary where time slows and nature speaks
                </p>
                </p>
            </div>
        </div>

        <!-- Swiper -->
        <div class="swiper h-screen">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide relative h-screen bg-cover bg-center"
                     style="background-image: url('{{ asset('img/hero-4.png') }}'); background-size: cover; background-position: center;"
                     loading="lazy">
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative h-screen bg-cover bg-center"
                     style="background-image: url('{{ asset('img/hero-2.jpg') }}'); background-size: cover; background-position: center;"
                     loading="lazy">
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative h-screen bg-cover bg-center"
                     style="background-image: url('{{ asset('img/hero-1.jpg') }}'); background-size: cover; background-position: center;"
                     loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-12 md:py-24">
        <div class="container mx-auto px-6 md:px-16">
            <div class="flex flex-col gap-12">
                <!-- Top: Text -->
                <div>
                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                        Señorito’s Garden is more than a destination — it’s a living story of serenity, beauty, and
                        connection.
                        Rooted in our passion for nature and inspired by community, we aim to provide an immersive
                        garden
                        experience where guests can slow down, reconnect with nature, and celebrate life’s most
                        meaningful
                        moments.
                        <br><br>
                        Whether you're here to wander, learn, or celebrate, our garden welcomes you with open arms and
                        blooming hearts.
                    </p>
                    <p class="text-lg md:text-xl text-gray-600 mt-6"
                       style="font-family: 'Open Sans', sans-serif;">
                        🎥 Watch the video and get a glimpse of what makes Señorito’s Garden truly magical.
                    </p>
                </div>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Your Oasis Awaits
                    </h2>
                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                        From floral trails to shaded pavilions, each visit promises peace and beauty.
                    </p>
                    <ul class="space-y-4 mt-5">
                        <li class="flex items-start">
                            <span class="inline-block w-6 h-6 mt-1 mr-3 text-green-600">🌼</span>
                            <div>
                                <h4 class="text-xl md:text-xl font-bold text-gray-900">Immersive Plant Life</h4>
                                <p class="text-sm md:text-lg text-gray-700">Over 200 species of plants curated for your
                                    sensory
                                    delight and educational exploration.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-6 h-6 mt-1 mr-3 text-green-600">🎉</span>
                            <div>
                                <h4 class="text-xl md:text-xl font-bold text-gray-900">Garden Events</h4>
                                <p class="text-sm md:text-lg text-gray-700">Celebrate weddings, birthdays, or corporate
                                    gatherings in the heart of nature’s beauty.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-6 h-6 mt-1 mr-3 text-green-600">🧘</span>
                            <div>
                                <h4 class="text-xl md:text-xl font-bold text-gray-900">Mindful Retreats</h4>
                                <p class="text-sm md:text-lg text-gray-700">Enjoy moments of mindfulness with garden
                                    yoga,
                                    meditation
                                    zones,
                                    and shaded reading nooks.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Right: Collaged Images (2x2 grid) -->
                <div class="md:w-1/2 grid grid-cols-2 gap-6">
                    <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                        <img src="{{ asset('img/section-2-a.jpg') }}" alt="Garden Entrance"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                        <img src="{{ asset('img/section-2-b.jpg') }}" alt="Garden Path"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                        <img src="{{ asset('img/section-2-c.jpg') }}" alt="Event Setup"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                        <img src="{{ asset('img/section-2-d.jpg') }}" alt="Yoga Area"
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-24">
        <div class="container mx-auto px-6 md:px-16">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    What Makes Señorito’s Garden Special
                </h2>
                <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                    Experience an enchanting blend of nature, elegance, and heartfelt moments through our curated
                    offerings.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Feature 1 -->
                <div
                    class="text-center p-6 rounded-3xl shadow-lg hover:shadow-2xl bg-gradient-to-br from-green-100 to-green-50 transition">
                    <div class="text-5xl mb-4">🌿</div>
                    <h4 class="text-xl md:text-xl font-bold text-gray-900">Botanical Wonders</h4>
                    <p class="mt-4 text-sm md:text-lg text-gray-700">
                        Explore over 200 curated plant species set within tranquil, photo-worthy landscapes.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="text-center p-6 rounded-3xl shadow-lg hover:shadow-2xl bg-gradient-to-br from-pink-100 to-pink-50 transition">
                    <div class="text-5xl mb-4">💍</div>
                    <h4 class="text-xl md:text-xl font-bold text-gray-900">Elegant
                        Celebrations</h4>
                    <p class="mt-4 text-sm md:text-lg text-gray-700">
                        Host intimate weddings, grand birthdays, and memorable corporate events in a garden paradise.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="text-center p-6 rounded-3xl shadow-lg hover:shadow-2xl bg-gradient-to-br from-yellow-100 to-yellow-50 transition">
                    <div class="text-5xl mb-4">🧘‍♀️</div>
                    <h4 class="text-xl md:text-xl font-bold text-gray-900">Mindful Escapes</h4>
                    <p class="mt-4 text-sm md:text-lg text-gray-700">
                        Enjoy peaceful spaces for yoga, quiet contemplation, or simply soaking in nature’s rhythm.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 md:px-16">
            <div class="flex flex-col items-center gap-12">
                <!-- Top: Text -->
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Get in Touch with Us
                    </h2>
                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide max-w-3xl mx-auto">
                        Have questions or want to book an event? We're here to assist you and make your
                        experience memorable.
                    </p>

                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide max-w-3xl mx-auto">
                        Whether you're planning a special event, have questions about our garden, or
                        want to
                        schedule a tour, we're just a click away. Let us help you create unforgettable
                        moments at
                        Señorito's Garden.
                    </p>

                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide max-w-3xl mx-auto">
                        Reach out to us, and our team will be happy to answer any inquiries or assist
                        with booking
                        your next event. We can't wait to hear from you!
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
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper', {
                loop: true, // Optional: If you want the fade to loop
                effect: 'fade', // Set the effect to 'fade'
                fadeEffect: {
                    crossFade: true // Optional: This ensures a smooth transition
                },
                autoplay: {
                    delay: 5000, // Delay between slides (adjust to your preference)
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
@endsection
