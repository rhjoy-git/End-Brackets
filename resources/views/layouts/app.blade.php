<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>End Brackets</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Garamond:wght@400;700&display=swap" rel="stylesheet">
    <!-- Include Animate style CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Include WOW js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
    <!-- Include Bootstrap/Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('resources/js/main.js')}}"></script>
</head>

<body style="background-color: #ececec;">


    @include('components.header')
    @include('components.serviceSlide')
    @include('components.videoSection')
    @include('sections.services')
    @include('sections.portfolio')
    @include('components.pricingPlans')
    @include('components.team')
    @include('components.hAndq')
    @include('components.newsletter')
    @include('particles.footer')

    @include('components.chatBot')


    <script src="{{ asset('resources/js/main.js') }}"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>