@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[70vh] text-white bg-cover bg-center" style="background-image: url('{{ asset('img/contact/img-contact.jpg') }}')">
        <!-- Top Gradient Overlay for Navbar Contrast -->
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-black/70 to-transparent z-20"></div>

        <!-- Static Text Overlay with Full Width Background -->
        <div class="absolute inset-0 w-full h-full flex items-center justify-center z-30">
            <div class="w-full bg-gray-900 bg-opacity-40 py-6">
                <div class="text-center max-w-4xl mx-auto px-6">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                        WELCOME TO <br /><span class="text-green-400">Señorito’s Garden</span>
                    </h1>
                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                        Have questions? We're here to help.
                    </p>
                    <p class="mt-2 text-sm md:text-lg tracking-wide text-gray-200">
                        Reach out and we'll get back to you as soon as possible.
                    </p>
                </div>
            </div>
        </div>

        <!-- Optional SVG Pattern for Decoration -->
        <div class="absolute inset-0 flex justify-center items-center pointer-events-none z-10">
            <svg class="w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="wave-pattern" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0 50 Q25 0 50 50 T100 50" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="2" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#wave-pattern)" />
            </svg>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Contact Us</h2>
                    <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">We'd love to hear from you! Reach out through the details below or fill out the form.</p>
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
                    <p class="text-sm md:text-lg tracking-wide">
                        Please fill out the form below with your details, and we'll respond as soon as possible. We look forward to assisting you!
                    </p>

                    <form id="contactForm" action="{{ route('sendContactEmail') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="full_name"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Full Name" required>
                        <input type="email" name="email"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Email" required>
                        <input type="text" name="phone"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Contact Number" required>
                        <textarea name="address"
                                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                                  placeholder="Address" rows="4" required></textarea>
                        <input type="text" name="subject"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Subject" required>
                        <textarea name="message"
                                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                                  placeholder="Your Message" rows="4" required></textarea>
                        <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-lg text-lg font-medium hover:bg-gray-800 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="flex flex-col items-center">
            <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-white"></div>
            <p class="text-white mt-2">Sending...</p>
        </div>
    </div>

    <!-- Success Modal (Ensuring It Stays in Front) -->
    <div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <h2 class="text-lg font-semibold text-green-600">Message Sent Successfully!</h2>
            <p class="text-gray-600 mt-2">Thank you for reaching out. We will get back to you soon.</p>
            <button id="closeModal" class="mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
                OK
            </button>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            const $contactForm = $('#contactForm');
            const $successModal = $('#successModal');
            const $loadingOverlay = $('#loadingOverlay');

            // ✅ AJAX Contact Form Submission (Fetch API + Loading Indicator)
            $contactForm.on('submit', function (event) {
                event.preventDefault(); // Prevent default form submission

                let formData = new FormData(this);

                // Show loading overlay
                $loadingOverlay.removeClass('hidden');

                fetch("{{ url('/contact') }}", {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('input[name="_token"]').val()
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        $loadingOverlay.addClass('hidden'); // Hide loading
                        if (data.success) {
                            $successModal.removeClass('hidden'); // Show success modal
                            $successModal.css('z-index', '9999'); // Ensure modal is in front
                            $contactForm[0].reset(); // Clear form fields
                        } else {
                            alert("Error sending message. Please try again.");
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        $loadingOverlay.addClass('hidden'); // Hide loading
                        alert("An error occurred. Please try again later.");
                    });
            });

            // ✅ Close Success Modal
            $('#closeModal').on('click', function () {
                $successModal.addClass('hidden');
            });
        });
    </script>
@endsection
