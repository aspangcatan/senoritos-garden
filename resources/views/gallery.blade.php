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

<section id="hero" class="relative text-white bg-cover" style="background-image: url('{{ asset('img/lakegallery.jpg') }}')">
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

<section class="bg-white py-16 px-4 md:px-10">
  <div class="max-w-7xl mx-auto space-y-24">
    
    <!-- Category 1: Playland Adventures -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's Playland Adventures</h2>
      <p class="text-lg text-gray-600 mb-12">Experience thrilling rides and adventures for all ages at Señorito's Playland.</p>

      <!-- Gallery Grid for Playland Adventures -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/playlandadventures/playland1.jpg') }}" alt="Playland Adventure 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Playland Adventure 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/playlandadventures/playland2.jpg') }}" alt="Playland Adventure 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Playland Adventure 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/playlandadventures/playland3.jpg') }}" alt="Playland Adventure 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Playland Adventure 3</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Category 2: Serenity Lake -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's Serenity Lake</h2>
      <p class="text-lg text-gray-600 mb-12">A peaceful lakeside escape surrounded by lush greenery, perfect for quiet reflection or scenic strolls.</p>

      <!-- Gallery Grid for Serenity Lake -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/serenitylake/lake1.jpg') }}" alt="Serenity Lake 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Serenity Lake 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/serenitylake/lake2.jpg') }}" alt="Serenity Lake 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Serenity Lake 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/serenitylake/lake3.jpg') }}" alt="Serenity Lake 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Serenity Lake 3</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Repeat similar structure for other categories: Nature's Retreat, Botanical Haven, Aquatic Oasis, DinoLand, Grand Event Hall -->

    <!-- Category 3: Nature's Retreat -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's Nature's Retreat</h2>
      <p class="text-lg text-gray-600 mb-12">The ultimate camping experience where you can reconnect with nature under the stars.</p>

      <!-- Gallery Grid for Nature's Retreat -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/naturesretreat/retreat1.jpg') }}" alt="Nature's Retreat 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/naturesretreat/retreat2.jpg') }}" alt="Nature's Retreat 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/naturesretreat/retreat3.jpg') }}" alt="Nature's Retreat 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Category 4: Botanical Haven -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's Botanical Haven</h2>
      <p class="text-lg text-gray-600 mb-12">A Sanctuary of Nature’s Beauty – Explore a vibrant tapestry of flora where every path blooms with wonder and fragrance.</p>

      <!-- Gallery Grid for Nature's Retreat -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/botanicalhaven/botanical1.jpg') }}" alt="Nature's Retreat 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/botanicalhaven/botanical2.jpg') }}" alt="Nature's Retreat 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/botanicalhaven/botanical3.jpg') }}" alt="Nature's Retreat 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Category 5: Aquatic Oasis -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's Aquatic Oasis</h2>
      <p class="text-lg text-gray-600 mb-12">A Washroom with a View – Redefining relaxation, this scenic space offers luxury, cleanliness, and beauty with every visit.</p>

      <!-- Gallery Grid for Nature's Retreat -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/aquaticoasis/aquaticoasis1.jpg') }}" alt="Nature's Retreat 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/aquaticoasis/aquaticoasis2.jpg') }}" alt="Nature's Retreat 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/aquaticoasis/aquaticoasis3.jpg') }}" alt="Nature's Retreat 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Category 6: Dino Land -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's DinoLand</h2>
      <p class="text-lg text-gray-600 mb-12">Step Back in Time – Meet life-size dinosaurs and fossil adventures in this prehistoric wonderland.</p>

      <!-- Gallery Grid for Nature's Retreat -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/dinoland/dinoland1.jpg') }}" alt="Nature's Retreat 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/dinoland/dinoland2.jpg') }}" alt="Nature's Retreat 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/dinoland/dinoland3.jpg') }}" alt="Nature's Retreat 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Category 7: Grand Event Hall -->
    <div>
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Señorito's Grand Event Hall</h2>
      <p class="text-lg text-gray-600 mb-12">Celebrating Life’s Special Moments – A timeless venue for weddings, reunions, and milestone celebrations.</p>

      <!-- Gallery Grid for Nature's Retreat -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Image 1 -->
        <div class="relative group">
          <img src="{{ asset('img/grandeventhall/grandeventhall1.jpg') }}" alt="Nature's Retreat 1" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 1</p>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative group">
          <img src="{{ asset('img/grandeventhall/grandeventhall2.jpg') }}" alt="Nature's Retreat 2" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 2</p>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative group">
          <img src="{{ asset('img/grandeventhall/grandeventhall3.jpg') }}" alt="Nature's Retreat 3" class="w-full h-full object-cover rounded-xl shadow-lg transform group-hover:scale-105 transition duration-300" />
          <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
            <p class="text-white text-lg font-semibold">Nature's Retreat 3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- You can repeat this structure for the remaining categories: Botanical Haven, Aquatic Oasis, DinoLand, Grand Event Hall -->

  </div>
</section>


<section class="bg-gradient-to-r from-green-200 via-green-100 to-green-50 py-16 px-4 md:px-10 rounded-lg shadow-inner mt-0">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Inspired by the Experience?</h2>
    <p class="text-lg md:text-xl text-gray-700 mb-8">
      Discover more of what Señorito's Paradise has to offer—from magical playlands to serene retreats. Let your next unforgettable memory begin here.
    </p>
    <div class="flex flex-col md:flex-row justify-center gap-6">
      <a href="/services" class="inline-block bg-green-600 text-white text-lg font-semibold px-8 py-3 rounded-full shadow hover:bg-green-700 transition duration-300">
        View Our Services
      </a>
      <a href="/contact" class="inline-block bg-white text-green-700 border border-green-600 text-lg font-semibold px-8 py-3 rounded-full shadow hover:bg-green-100 transition duration-300">
        Book a Reservation
      </a>
    </div>
  </div>
</section>

@include('footer')
</body>
</html>
