@extends('layouts.app')

@section('content')
<!-- AOS Animate on Scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<section id="hero" class="relative text-white bg-cover" style="background-image: url('{{ asset('img/services.jpg') }}')">
    <div class="relative w-full h-[70vh] flex items-center justify-center overflow-hidden">
        <!-- Reduced black overlay opacity from 40% to 10% -->
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black to-black opacity-10"></div>
        
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

        <!-- Optional content can go here -->
        <!-- <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                About Senorito's Garden
            </h1>
        </div> -->
    </div>
</section>


{{-- <section class="bg-gray-100 py-16 px-4 md:px-10">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Services</h2>
    <p class="text-lg text-gray-600 mb-12">We are still making or creating the available services for the best experience. Stay tuned for updates!</p>
    
    <!-- Optional: Add an image or icon to emphasize the message -->
    <div class="flex justify-center mb-6">
      <img src="{{ asset('img/underconstruction.jpg') }}" alt="Under Construction" class="w-70 h-32 object-contain">
    </div>
    
    <!-- Optional: A button to redirect to a contact page or social media -->
    <div>
      <a href="{{ route('contact') }}" class="inline-block bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">Contact Us</a>
    </div>
  </div>
</section> --}}


<section class="bg-gradient-to-br from-white to-gray-100 py-20 px-6 sm:px-12 lg:px-32">
  <div class="text-center mb-16">
      <h1 class="text-5xl font-extrabold text-gray-900 mb-4 tracking-tight leading-tight" data-aos="fade-up">Experience Our World-Class Amenities</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Every corner is designed to spark joy, comfort, and unforgettable moments — explore what awaits you.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
    <!-- Amenity Card -->
    @php
        $amenities = [
            ['title' => 'Playground', 'desc' => 'Safe and fun for kids of all ages — let them run wild while you relax.', 'img' => 'playground.jpg'],
            ['title' => 'Event Area', 'desc' => 'Perfect for weddings, birthdays, corporate events, and more — celebrate in style.', 'img' => 'eventarea.jpg'],
            ['title' => 'Bougainvillea Garden', 'desc' => 'A vibrant garden bursting with color — perfect for strolls and selfies.', 'img' => 'Bougainvillea.jpg'],
            ['title' => 'Botanical Garden', 'desc' => 'A lush paradise of exotic plants and calming beauty.', 'img' => 'botanical.jpg'],
        ];
    @endphp

    @foreach($amenities as $index => $item)
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transform hover:scale-[1.02] transition-all duration-500" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <img src="{{ asset('img/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-56 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $item['title'] }}</h2>
                <p class="text-gray-600">{{ $item['desc'] }}</p>
                <br>
                <a href="{{ route('contact') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-xl transition duration-300">
                  Book Us Now
              </a>
            </div>
        </div>
    @endforeach
</div>
</section>


@endsection
