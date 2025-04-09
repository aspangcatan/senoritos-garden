<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senorito's Garden</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
<script>
    function loadContent(url, push = true) {
        $('#loading').fadeIn();

        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                const newContent = $(data).find("#content").html();
                $("#content").fadeOut(200, function () {
                    $(this).html(newContent).fadeIn(200);
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
        // Remove active class from all links
        $('#navbar a').removeClass('text-green-400 font-extrabold');

        // Get the current path and remove any trailing slashes
        const currentPath = window.location.href.replace(/\/$/, ''); // Removes trailing slash if present

        $('#navbar a').each(function () {
            const linkHref = $(this).attr('href').replace(/\/$/, ''); // Also remove trailing slash from linkHref
            console.log(currentPath + " <=>" + linkHref);

            // Compare normalized URLs
            if (linkHref === currentPath) {
                $(this).addClass('text-green-400 font-extrabold');
            }
        });
    }

</script>
</body>
</html>
