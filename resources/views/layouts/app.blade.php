<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorito's Garden</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<!-- Navbar -->
@include('layouts.header')
<div id="app">
    <div id="content">
        @yield('content')
    </div>
</div>
@include('footer')
<div id="loading" class="fixed inset-0 bg-white bg-opacity-75 hidden z-50 flex items-center justify-center">
    <span class="text-xl font-semibold">Loading...</span>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init();
</script>

<script>
    function loadContent(url, push = true) {
        $('#loading').fadeIn();

        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                const newContent = $(data).find("#content").html();
                $("#content").fadeOut(200, function () {
                    $(this).html(newContent).fadeIn(200, function(){
                        AOS.refresh(); // <-- re-trigger AOS after fade in
                    });
                    history.pushState(null, "", url);
                    updateActiveNav();
                    // Re-run scripts or rebind things if needed
                });
            },
            error: function () {
                alert("Failed to load the content.");
            },
            complete: function () {
                $('#loading').fadeOut();
            }
        });
    }

    $(document).ready(function () {
        // Intercept all internal navigation clicks

        @if(Route::currentRouteName() == "home")
            $("#desktop-nav li:eq(0) a").addClass('bg-[#FEC119] text-black font-extrabold');
            $("#desktop-nav li:eq(0) a").removeClass('bg-black/60 text-white');
        @endif

        $(document).on("click", "#navbar a, #mobile-menu a", function (e) {
            e.preventDefault();
            const href = $(this).attr("href");
            loadContent(href);
        });

        // Handle back/forward button
        window.onpopstate = function () {
            loadContent(location.pathname, false);
        };
    });

    // Optional sidebar toggle
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');

        if (!sidebar.classList.contains('-translate-x-full')) {
            document.body.classList.add('no-scroll');
        } else {
            document.body.classList.remove('no-scroll');
        }
    }

    function updateActiveNav() {
        // Normalize the current path
        const currentPath = window.location.href.replace(/\/$/, '');

        // Select nav links EXCLUDING the logo
        $('#navbar a:not(:has(img)), #mobile-menu a').each(function () {
            const linkHref = $(this).attr('href').replace(/\/$/, '');

            // Reset styles
            $(this)
                .removeClass('bg-[#FEC119] text-black font-extrabold')
                .addClass('bg-black/60 text-white');

            // Match and apply active styles
            if (linkHref === currentPath) {
                $(this)
                    .addClass('bg-[#FEC119] text-black font-extrabold')
                    .removeClass('bg-black/60 text-white');
            }
        });
    }
</script>
</body>
</html>
