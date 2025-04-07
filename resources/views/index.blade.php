<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorito's Garden</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;800&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>
<body class="bg-gray-100">
<!-- Navbar -->
@include('layouts.header')
<section class="relative h-screen text-white">
    <!-- Swiper -->
    <div class="swiper h-screen">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide relative h-screen bg-cover bg-center"
                 style="background-image: url('{{ asset('img/hero-4.png') }}');">
                <div class="absolute inset-0 bg-gradient-to-br from-green-900/70 to-black/40"></div>
                <div class="relative z-10 flex items-center justify-center h-full px-4">
                    <div class="text-center max-w-4xl">
                        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold leading-tight tracking-wide drop-shadow-xl"
                            style="font-family: 'Cinzel', serif;">
                            Reconnect With Nature at <span class="text-green-400">Señorito's Garden</span>
                        </h1>
                        <p class="mt-6 text-lg sm:text-xl md:text-2xl text-gray-200 font-light max-w-3xl mx-auto">
                            Where serenity meets celebration — explore lush landscapes, hidden blooms, and peaceful
                            corners designed for rest or grand events.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide relative h-screen bg-cover bg-center"
                 style="background-image: url('{{ asset('img/hero-2.jpg') }}');">
                <div class="absolute inset-0 bg-gradient-to-br from-green-900/70 to-black/40"></div>
                <div class="relative z-10 flex items-center justify-center h-full px-4">
                    <div class="text-center max-w-4xl">
                        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold leading-tight tracking-wide drop-shadow-xl"
                            style="font-family: 'Cinzel', serif;">
                            A Journey Through Nature
                        </h1>
                        <p class="mt-6 text-lg sm:text-xl md:text-2xl text-gray-200 font-light max-w-3xl mx-auto">
                            Follow the winding paths, breathe in the scent of fresh blooms, and lose yourself in tranquility.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide relative h-screen bg-cover bg-center"
                 style="background-image: url('{{ asset('img/hero-3.jpg') }}');">
                <div class="absolute inset-0 bg-gradient-to-br from-green-900/70 to-black/40"></div>
                <div class="relative z-10 flex items-center justify-center h-full px-4">
                    <div class="text-center max-w-4xl">
                        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold leading-tight tracking-wide drop-shadow-xl"
                            style="font-family: 'Cinzel', serif;">
                            Celebrate Amidst Petals
                        </h1>
                        <p class="mt-6 text-lg sm:text-xl md:text-2xl text-gray-200 font-light max-w-3xl mx-auto">
                            Your events deserve nature’s backdrop — where elegance and earth come together beautifully.
                        </p>
                    </div>
                </div>
            </div>

        </div>
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

            <!-- Right: Collaged Images (2x2 grid) -->
            <div class="md:w-1/2 grid grid-cols-2 gap-6">
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                    <img src="{{ asset('img/section-2-a.jpg') }}" alt="Garden Entrance" class="w-full h-full object-cover">
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                    <img src="{{ asset('img/section-2-b.jpg') }}" alt="Garden Path" class="w-full h-full object-cover">
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                    <img src="{{ asset('img/section-2-c.jpg') }}" alt="Event Setup" class="w-full h-full object-cover">
                </div>
                <div class="relative rounded-xl overflow-hidden shadow-xl h-[300px] md:h-[200px]">
                    <img src="{{ asset('img/section-2-d.jpg') }}" alt="Yoga Area" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-white py-24">
    <div class="container mx-auto px-6 md:px-16">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                What Makes Señorito’s Garden Special
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Experience an enchanting blend of nature, elegance, and heartfelt moments through our curated offerings.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Feature 1 -->
            <div class="text-center p-6 rounded-3xl shadow-lg hover:shadow-2xl bg-gradient-to-br from-green-100 to-green-50 transition">
                <div class="text-5xl mb-4">🌿</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Botanical Wonders</h3>
                <p class="text-gray-600">
                    Explore over 200 curated plant species set within tranquil, photo-worthy landscapes.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-6 rounded-3xl shadow-lg hover:shadow-2xl bg-gradient-to-br from-pink-100 to-pink-50 transition">
                <div class="text-5xl mb-4">💍</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Elegant Celebrations</h3>
                <p class="text-gray-600">
                    Host intimate weddings, grand birthdays, and memorable corporate events in a garden paradise.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-6 rounded-3xl shadow-lg hover:shadow-2xl bg-gradient-to-br from-yellow-100 to-yellow-50 transition">
                <div class="text-5xl mb-4">🧘‍♀️</div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Mindful Escapes</h3>
                <p class="text-gray-600">
                    Enjoy peaceful spaces for yoga, quiet contemplation, or simply soaking in nature’s rhythm.
                </p>
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
        </div>
    </div>
</section>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
</script>
</body>
</html>
