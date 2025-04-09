<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorito's Garden</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
@include('layouts.header')
<section id="hero" class="relative text-white bg-cover" style="background-image: url('{{ asset('img/aboutus.jpg') }}')">
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
        <!-- <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                About Senorito's Garden
            </h1>
        </div> -->
    </div>
</section>
<section class="bg-gradient-to-r from-green-100 via-green-200 to-green-300 py-16 px-4 md:px-8">
  <div class="max-w-7xl mx-auto text-center space-y-12">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-8">About Señorito's Garden</h2>

    <!-- Descriptive Paragraphs -->
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">Nestled in the heart of Cebu, Señorito's Garden is where nature’s poetry meets timeless elegance. A sanctuary crafted for moments that transcend the ordinary, our garden is more than a venue—it is a canvas where dreams unfurl, love blossoms, and memories are etched into the very air you breathe.</p>

      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">Born from a vision to harmonize luxury with the raw beauty of the tropics, Señorito’s Garden invites you to step into a world of curated enchantment. Towering palms sway in rhythm with the breeze, vibrant blooms cascade like living art, and the soft murmur of hidden water features whispers stories of serenity. Our Cocktail Garden, crowned by a breathtaking 360-degree aerial vista, transforms sunlit celebrations and starlit soirées into scenes of pure magic. For those seeking intimacy, secluded nooks and lush alcoves offer private havens where every moment feels exclusively yours.</p>

      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">Beyond events, our Garden 2 stands as a muse for storytellers—a paradise for photographers and lovers alike. Here, golden-hour light dances through orchid-laden arches, and every pathway leads to a frame-worthy tableau, perfect for capturing life’s most cherished chapters.</p>

      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">At Señorito’s Garden, we believe in the alchemy of nature and nurture. Our dedicated team—passionate curators of ambiance and detail—works tirelessly to weave your vision into reality, ensuring every petal, every note, and every toast resonates with perfection.</p>

      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">Whether you’re envisioning a fairytale wedding, an unforgettable celebration, or a photographic journey through paradise, let Señorito’s Garden be the backdrop to your extraordinary tale. Where moments bloom into forever.</p>
    </div>

    <div class="relative h-96 md:h-[32rem] w-full">
    <!-- Background Image -->
    <img src="{{ asset('img/vissionary.jpg') }}" alt="Roots of a Visionary" class="absolute inset-0 w-full h-full object-cover" />
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <!-- Text Content -->
        <div class="relative z-10 flex items-center justify-center h-full">
            <h2 class="text-3xl md:text-4xl font-semibold text-white text-center px-4">
            Señorito's Garden: <span class="block mt-2">Roots of a Visionary</span>
            </h2>
        </div>
    </div>

    <!-- Descriptive Paragraphs -->
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">The Landscape of a Dream: Michel Lhuillier's Unfolding Legacy</h2>
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">This is the story of a man who learned that true dreams do not expire—they simply wait for their moment to bloom.</p>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">The Boy Who Loved the Earth</h2>
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">Long before Michel Lhuillier became a titan of Philippine business, he was a young graduate with dirt-stained dreams. Agriculture called to him—a whisper from the soil, a promise of connection. His father's discouragement could not silence this calling. It could only delay it.</p>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">From Ambition to Soil: A Transformation</h2>
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">The M Lhuillier Group became his first canvas—a financial empire built with the same meticulous care he would later devote to his gardens. But beneath the success, a farmer's heart continued to beat. Each business venture was a stepping stone, each achievement a patient preparation for his true calling.</p>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">The Gardens: A Personal Cartography</h2>
    <div class="max-w-3xl mx-auto space-y-6">
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed text-center">
        <strong>Michel's Garden</strong> is not a landscape. It is an autobiography written in living green.
    </p>
    <ul class="list-disc pl-5 text-lg md:text-xl text-gray-700 space-y-2 text-left">
        <li>Terraced walkways that mirror life's carefully constructed paths</li>
        <li>Rare Peruvian orchids collected over 30 years—each a memory, each a testament</li>
        <li>Vanda orchids that speak of global wonder and personal persistence</li>
        <li>Native carabao grass intertwining with exotic specimens—a metaphor of harmony</li>
    </ul>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">More Than Conservation: A Philosophical Revelation</h2>
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">"We live in nature, and what God has given us is in front of us every day." These were not mere words for Michel. They were a manifesto. The Cebu Safari and Adventure Park was not just a project—it was his declaration of love for the earth that had always called to him.</p>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">The Señorito's Promise</h2>
    <div class="max-w-3xl mx-auto space-y-6">
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed text-center">
        In every carefully cultivated space, Michel redefined what it means to be successful:
    </p>
    <ul class="list-disc pl-5 text-lg md:text-xl text-gray-700 space-y-2 text-left">
        <li>Not just building businesses</li>
        <li>But nurturing ecosystems</li>
        <li>Transforming underutilized farmland into living laboratories of biodiversity</li>
        <li>Creating spaces that educate, inspire, and reconnect</li>
    </ul>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">A Garden of Resilience</h2>
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">What began as a deferred dream became a 170-hectare testament to patience. Michel didn't just create a garden. He created a living narrative of possibility—where every plant tells a story of persistence, every path whispers of unsung dreams finally finding their voice.</p>
    </div>
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">Come. Witness. Understand.</h2>
    <div class="space-y-8">
      <p class="text-lg md:text-xl text-gray-700 mb-4 leading-relaxed">Where every leaf is a chapter of Michel Lhuillier's unwritten autobiography. In profound honor of a visionary who understood that the most beautiful empires are grown, not built.
        </p>
    </div>

    <!-- Call to Action Button -->
    <div class="mt-8">
      <a href="{{ route('contact') }}" class="bg-green-600 text-white text-xl font-semibold py-3 px-8 rounded-lg hover:bg-green-700 transition duration-300">Start Your Journey With Us</a>
    </div>
  </div>
</section>


@include('footer')
</body>
</html>
