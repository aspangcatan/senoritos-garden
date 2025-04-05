<nav id="navbar" class="fixed top-0 left-0 w-full transition-all duration-500 bg-transparent text-white py-4 px-6 flex justify-between items-center z-50">
    <h1 class="text-2xl font-bold">Senorito's Garden</h1>

    <!-- Desktop Navigation -->
    <ul class="hidden md:flex space-x-6">
        <li><a href="{{ route('home') }}" class="hover:text-green-400 transition">HOME</a></li>
        <li><a href="#gallery" class="hover:text-green-400 transition">ABOUT US</a></li>
        <li><a href="#contact" class="hover:text-green-400 transition">GALLERY</a></li>
        <li><a href="#contact" class="hover:text-green-400 transition">SERVICES</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-green-400 transition">CONTACT</a></li>
    </ul>

    <!-- Mobile Menu Button (Hamburger Icon) -->
    <button id="mobile-menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none z-50 relative">
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar1"></span>
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar2"></span>
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar3"></span>
    </button>
</nav>

<!-- Fullscreen Mobile Menu (Hidden by default) -->
<nav id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
    <a href="{{ route('home') }}" class="text-xl hover:text-green-400 font-medium">HOME</a>
    <a href="#gallery" class="text-xl hover:text-green-400 font-medium">ABOUT US</a>
    <a href="#contact" class="text-xl hover:text-green-400 font-medium">GALLERY</a>
    <a href="#contact" class="text-xl hover:text-green-400 font-medium">SERVICES</a>
    <a href="{{ route('contact') }}" class="text-xl hover:text-green-400 font-medium">CONTACT</a>
</nav>
<script>
    // Toggle the mobile menu visibility
    const mobileMenuButton = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const bars = document.querySelectorAll('#mobile-menu-btn span');
    const body = document.body;

    mobileMenuButton.addEventListener('click', () => {
        // Toggle mobile menu visibility
        mobileMenu.classList.toggle('hidden');

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

