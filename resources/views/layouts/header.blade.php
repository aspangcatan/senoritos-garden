<nav id="navbar" class="fixed top-0 left-0 w-full transition-all duration-500 bg-transparent text-white py-4 px-6 flex justify-between items-center z-50">
    <a href="{{ route('home') }}" class="block w-40 md:w-48">
        <img src="{{ asset('img/home-logo.png') }}" alt="Senorito's Garden Logo" class="w-full h-auto object-contain">
    </a>

    <!-- Desktop Navigation -->
    <ul class="hidden md:flex space-x-6">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-400 font-extrabold ' : '' }} hover:text-green-400 transition">HOME</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-green-400 font-extrabold ' : '' }} hover:text-green-400 transition">ABOUT US</a></li>
        <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-green-400 font-extrabold ' : '' }} hover:text-green-400 transition">GALLERY</a></li>
        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-green-400 font-extrabold ' : '' }} hover:text-green-400 transition">SERVICES</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-green-400 font-extrabold ' : '' }} hover:text-green-400 transition">CONTACT</a></li>
    </ul>

    <!-- Mobile Menu Button (Hamburger Icon) -->
    <button id="mobile-menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none z-50 relative">
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar1"></span>
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar2"></span>
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar3"></span>
    </button>
</nav>

<!-- Fullscreen Mobile Menu (Hidden by default) -->
<nav id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40 transition-all duration-300 ease-in-out opacity-0 transform scale-95">
    <a href="{{ route('home') }}"
       class="{{ request()->routeIs('home') ? 'text-green-400 font-extrabold' : '' }} text-xl hover:text-green-400 font-medium">
       HOME
    </a>
    <a href="{{ route('about') }}"
       class="{{ request()->routeIs('about') ? 'text-green-400 font-extrabold' : '' }} text-xl hover:text-green-400 font-medium">
       ABOUT US
    </a>
    <a href="{{ route('gallery') }}"
       class="{{ request()->routeIs('gallery') ? 'text-green-400 font-extrabold' : '' }} text-xl hover:text-green-400 font-medium">
       GALLERY
    </a>
    <a href="{{ route('services') }}"
       class="{{ request()->routeIs('services') ? 'text-green-400 font-extrabold' : '' }} text-xl hover:text-green-400 font-medium">
       SERVICES
    </a>
    <a href="{{ route('contact') }}"
       class="{{ request()->routeIs('contact') ? 'text-green-400 font-extrabold' : '' }} text-xl hover:text-green-400 font-medium">
       CONTACT
    </a>
</nav>

<script>
    // Toggle the mobile menu visibility
    const mobileMenuButton = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const bars = document.querySelectorAll('#mobile-menu-btn span');
    const body = document.body;

    // Function to close the mobile menu
    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('opacity-100', 'scale-100');
        mobileMenu.classList.add('opacity-0', 'scale-95');
        bars.forEach(bar => {
            bar.classList.remove('bg-green-400');
        });
        body.style.overflow = ''; // Re-enable scrolling
    }

    // Toggle mobile menu visibility on button click
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');

        // Add transition classes for smooth animation
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('opacity-100', 'scale-100');
            mobileMenu.classList.add('opacity-0', 'scale-95');
        } else {
            mobileMenu.classList.remove('opacity-0', 'scale-95');
            mobileMenu.classList.add('opacity-100', 'scale-100');
        }

        // Toggle the background color of the bars when the menu is open
        bars.forEach(bar => {
            bar.classList.toggle('bg-green-400');
        });

        // Disable or enable body scroll based on menu visibility
        if (mobileMenu.classList.contains('hidden')) {
            body.style.overflow = ''; // Re-enable scrolling when menu is closed
        } else {
            body.style.overflow = 'hidden'; // Disable scrolling when menu is open
        }
    });

    // Close mobile menu when a menu item is clicked
    const menuItems = document.querySelectorAll('#mobile-menu a');
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            closeMobileMenu(); // Close the mobile menu
        });
    });

    // Ensure the active class stays after navigating
    document.addEventListener('DOMContentLoaded', function () {
        const currentRoute = window.location.pathname;
        const menuLinks = document.querySelectorAll('#mobile-menu a');

        menuLinks.forEach(link => {
            // Reset active class for all links
            link.classList.remove('text-green-400', 'font-extrabold');

            // Add active class for the current route
            if (link.getAttribute('href') === currentRoute) {
                link.classList.add('text-green-400', 'font-extrabold');
            }
        });
    });

    // Handle scroll and navbar style changes
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

