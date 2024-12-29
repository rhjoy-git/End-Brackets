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
    @include('components.services')
    @include('components.portfolio')
    @include('components.pricingPlans')
    @include('components.team')
    @include('components.hAndq')
    @include('components.newsletter')
    @include('components.footer')

    @include('components.chatBot')


    <script src="{{ asset('resources/js/main.js') }}"></script>

</body>

</html>