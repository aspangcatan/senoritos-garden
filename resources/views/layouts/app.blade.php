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
<div id="loading">Loading...</div>
@yield('content')
@include('footer')
<script>
    $(document).ready(function () {

        $("#mobile-menu a,#navbar a").on("click", function (e) {
            e.preventDefault();
            var url = $(this).attr("href");
            $("#loading").fadeIn();

            $.ajax({
                url: url,
                type: "GET",
                success: function (data) {
                    $("#content").fadeOut(200, function () {
                        $(this).html($(data).find("#content").html()).fadeIn(200);
                        history.pushState(null, "", url);
                    });
                },
                error: function () {
                    alert("Failed to load the content");
                },
                complete: function () {
                    $("#loading").fadeOut();
                }
            });
        });

        window.onpopstate = function () {
            $.get(location.href, function (data) {
                $("#content").html($(data).find("#content").html());
            });
        };
    });

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');

        // Prevent scrolling when sidebar is open
        if (!sidebar.classList.contains('-translate-x-full')) {
            document.body.classList.add('no-scroll');
        } else {
            document.body.classList.remove('no-scroll');
        }
    }

</script>
</body>
</html>
