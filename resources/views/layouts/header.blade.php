<nav id="navbar" class="fixed top-0 left-0 w-full transition-all duration-500 bg-transparent text-white py-4 px-6 flex justify-between items-center z-50">
    <!-- Left Section (Logo for mobile and desktop) -->
    <div class="flex items-center space-x-2 relative z-10">
        <!-- SG Icon - Mobile Only, stacked on top -->
        <div class="block md:hidden absolute top-[-50px] left-0 w-16">
            <img src="{{ asset('img/sg-icon.png') }}" alt="SG Logo" class="w-full h-auto object-contain">
        </div>

        <!-- Home Logo -->
        <a href="{{ route('home') }}" class="block w-40 md:w-48 z-10">
            <img src="{{ asset('img/sg-logo.png') }}" alt="Senorito's Garden Logo" class="w-full h-auto object-contain">
        </a>
    </div>

    <!-- Center Section (SG Icon - Desktop Only) -->
    <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 z-0">
        <img src="{{ asset('img/sg-icon.png') }}" alt="SG Logo" class="w-48 h-auto object-contain">
    </div>


    <!-- Hamburger Button -->
    <button id="mobile-menu-btn" class="flex flex-col space-y-1 md:hidden focus:outline-none z-50 relative">
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar1"></span>
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar2"></span>
        <span class="w-6 h-0.5 bg-white transition-transform" id="bar3"></span>
    </button>

    <!-- Desktop Navigation -->
    <ul id="desktop-nav" class="hidden md:flex space-x-4">
        @php
            $navItems = [
                'home' => 'HOME',
                'about' => 'ABOUT US',
                'gallery' => 'GALLERY',
                'services' => 'AMENITIES',
                'contact' => 'CONTACT',
            ];
        @endphp

        @foreach ($navItems as $route => $label)
            <li>
                <a href="{{ route($route) }}" class="px-3 py-2 rounded-md font-medium text-sm transition
                    {{ request()->routeIs($route)
                        ? 'bg-[#FEC119] text-black font-extrabold'
                        : 'bg-black/60 text-white hover:bg-[#FEC119] hover:text-black' }}">
                    {{ $label }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>

<!-- Mobile Menu -->
<nav id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40 transition-all duration-300 ease-in-out opacity-0 transform scale-95">
    @foreach ($navItems as $route => $label)
        <a href="{{ route($route) }}" class="px-4 py-2 rounded-md text-xl font-medium transition
            {{ request()->routeIs($route)
                ? 'bg-[#FEC119] text-black font-extrabold'
                : 'bg-black/60 text-white hover:bg-[#FEC119] hover:text-black' }}">
            {{ $label }}
        </a>
    @endforeach
</nav>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const bars = document.querySelectorAll('#mobile-menu-btn span');
    const body = document.body;

    document.addEventListener('DOMContentLoaded', function () {
        if (!mobileMenu.classList.contains('hidden')) {
            closeMobileMenu();
        }
    });
    

    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('opacity-100', 'scale-100');
        mobileMenu.classList.add('opacity-0', 'scale-95');
        bars.forEach(bar => bar.classList.remove('bg-green-400'));
        body.style.overflow = '';
    }

    mobileMenuButton.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.contains('hidden');
        if (isHidden) {
            mobileMenu.classList.remove('hidden', 'opacity-0', 'scale-95');
            mobileMenu.classList.add('opacity-100', 'scale-100');
            body.style.overflow = 'hidden';
        } else {
            closeMobileMenu();
        }

        bars.forEach(bar => bar.classList.toggle('bg-green-400'));
    });

    document.querySelectorAll('#mobile-menu a').forEach(item => {
        item.addEventListener('click', closeMobileMenu);
    });

    document.addEventListener('DOMContentLoaded', function () {
        const currentRoute = window.location.pathname;
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.classList.remove('text-green-400', 'font-extrabold');
            if (link.getAttribute('href') === currentRoute) {
                link.classList.add('bg-[#FEC119]', 'text-black', 'font-extrabold');
            }
        });

        window.addEventListener('scroll', function () {
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
