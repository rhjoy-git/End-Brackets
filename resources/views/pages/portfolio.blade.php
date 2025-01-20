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
    <link rel="stylesheet" href="{{ asset('/resources/css/portfolio.css') }}">
    <!-- Include Bootstrap/Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{asset('resources/js/main.js')}}"></script>
</head>

<body>
    <section class="relative h-[70vh] bg-cover bg-no-repeat overflow-hidden">
        <!-- Background Image with Grayscale -->
        <div
            class="absolute inset-0 grayscale bg-cover bg-[center_top_-10rem] bg-[url('/resources/images/portfolig-bg.jpg')]">
        </div>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-[#222429] bg-opacity-70"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6 w-full h-full">
            @include('particles.navbar')
            <div class="absolute transform translate-x-1/2 translate-y-1/2 max-w-3xl inset-0">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    Welcome to Our Portfolio
                </h1>
                <nav class="flex justify-center items-center z-20" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-base font-medium text-gray-400 hover:text-purple-600">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#" class="ms-1 text-base font-medium md:ms-2 text-purple-600">Portfolio</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
    </section>
    {{-- Portfolio Section --}}
    @include('sections.portfolio2')
    @include('particles.footer')

    <script src="{{ asset('resources/js/main.js') }}"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>