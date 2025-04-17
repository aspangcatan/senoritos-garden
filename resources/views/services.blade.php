@extends('layouts.app')

@section('content')

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


<section class="bg-gray-100 py-16 px-4 md:px-10">
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
</section>
@endsection
