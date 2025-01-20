<header class="relative text-white h-dvh md:h-screen bg-cover bg-center"
    style="background-color:#1B012B; background-image: linear-gradient(319deg, #3E005F 0%, #6A0DAD 50%, #9B4DCC 100%);">

    <!-- Top Bar -->
    <div class="py-4 px-10 xl:flex hidden">
        <div class="container mx-auto flex flex-wrap justify-between items-center px-4">
            <!-- Left Side: Location, Call, Email -->
            <div class="flex flex-wrap items-center text-md space-x-4">
                <!-- Location -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="https://www.google.com/maps?q=Mirpur+DOHS,+Dhaka,+Bangladesh" target="_blank"
                        class="text-white ">
                        Mirpur DOHS, Dhaka, Bangladesh
                    </a>
                </div>
                <!-- Call -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+880123456789" class="text-white ">
                        +880 123456789
                    </a>
                </div>
                <!-- Email -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@endbrackets.com" class="text-white ">
                        info@endbrackets.com
                    </a>
                </div>
            </div>

            <!-- Right Side: Social Icons -->
            <div class="flex space-x-4 mt-3 md:mt-0">
                <!-- WhatsApp -->
                <a href="https://wa.me/+8801978743947" target="_blank"
                    class="bg-green-500 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <!-- Facebook -->
                <a href="https://www.facebook.com/TheEndBrackets" target="_blank"
                    class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- LinkedIn -->
                <a href="#" target="_blank"
                    class="bg-blue-800 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

    @include('particles.navbar')

    <!-- Hero Section -->
    <div class="container mx-auto text-center py-12 px-4 relative">
        <h1 class="wow animate__animated animate__pulse mt-3 mb-10 md:mb-4 lg:my-14">
            <span class="text-3xl md:text-7xl font-light">We Develop</span>
            <br>
            <span class="text-6xl md:text-7xl lg:text-8xl font-bold block mt-3 md:mt-6 lg:mt-10">Innovative
                Products</span>
        </h1>
        <p class="my-10 md:my-6 text-lg md:text-xl">Software Development • UI/UX Design • Digital Marketing</p>

        <!-- Buttons -->
        <div class="flex justify-center space-x-2 md:space-x-4 mt-6">
            <!-- Portfolio Button -->
            <a href="portfolio"
                class="bg-[#9B4DCC] hover:bg-[#6A0DAD] text-white py-2 px-6 rounded-lg text-lg shadow-lg shadow-indigo-500/50 flex items-center space-x-2">
                <span>Portfolio</span>
            </a>
            <!-- Schedule a Call Button -->
            <a href="{{ route('schedulecall') }}" target="_blank"
                class="schedule-btn relative bg-gray-700 hover:bg-gray-800 text-white py-2 px-6 rounded-lg text-lg flex items-center space-x-2 animate-rotate-border">
                <span>Schedule a Call</span>
                <i class="fas fa-external-link-alt"></i>
            </a>

        </div>
    </div>

    <!-- SVG Animation: Left Middle 9B4DCC -->
    <svg class="absolute left-0 top-24 lg:left-10 lg:top-1/4 w-24 h-24 lg:w-72 lg:h-72 opacity-50 animate-wave"
        xmlns="http://www.w3.org/2000/svg" fill="#6A0DAD" viewBox="-2.4 -2.4 28.80 28.80">
        <g id="SVGRepo_iconCarrier">
            <path
                d="M4.29 12l4.48-5.36a1 1 0 1 0-1.54-1.28l-5 6a1 1 0 0 0 0 1.27l4.83 6a1 1 0 0 0 .78.37 1 1 0 0 0 .78-1.63z">
            </path>
            <path
                d="M21.78 11.37l-4.78-6a1 1 0 0 0-1.56 1.26L19.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 16 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z">
            </path>
            <path
                d="M15.72 11.41a1 1 0 0 0-1.41 0L13 12.64V8a1 1 0 0 0-2 0v4.59l-1.29-1.3a1 1 0 0 0-1.42 1.42l3 3A1 1 0 0 0 12 16a1 1 0 0 0 .69-.28l3-2.9a1 1 0 0 0 .03-1.41z">
            </path>
        </g>
    </svg>

    <!-- SVG Animation: Right bottom -->
    <svg class="absolute right-0 bottom-1/3 lg:right-12 lg:bottom-12 w-16 h-16 lg:w-48 lg:h-48 opacity-80 animate-fire-flicker"
        viewBox="-33 0 255 255" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        preserveAspectRatio="xMidYMid" fill="#000000">
        <defs>
            <style>
                .cls-3 {
                    fill: url(#material-gradient);
                }

                .cls-4 {
                    fill: #8748c4;
                    /* Muted purple, matches middle of the background */
                }

                .cls-5 {
                    fill: #b26ae3;
                    /* Slightly brighter, complements background */
                }
            </style>
            <!-- Unified gradient to align with background -->
            <linearGradient id="material-gradient" gradientUnits="userSpaceOnUse" x1="94.141" y1="255" x2="94.141"
                y2="0.188">
                <stop offset="0" stop-color="#3E005F"></stop> <!-- Dark purple from background -->
                <stop offset="50%" stop-color="#6A0DAD"></stop> <!-- Mid purple -->
                <stop offset="100%" stop-color="#9B4DCC"></stop> <!-- Bright purple -->
            </linearGradient>
        </defs>
        <g id="fire">
            <path
                d="M187.899,164.809 C185.803,214.868 144.574,254.812 94.000,254.812 C42.085,254.812 -0.000,211.312 -0.000,160.812 C-0.000,154.062 -0.121,140.572 10.000,117.812 C16.057,104.191 19.856,95.634 22.000,87.812 C23.178,83.513 25.469,76.683 32.000,87.812 C35.851,94.374 36.000,103.812 36.000,103.812 C36.000,103.812 50.328,92.817 60.000,71.812 C74.179,41.019 62.866,22.612 59.000,9.812 C57.662,5.384 56.822,-2.574 66.000,0.812 C75.352,4.263 100.076,21.570 113.000,39.812 C131.445,65.847 138.000,90.812 138.000,90.812 C138.000,90.812 143.906,83.482 146.000,75.812 C148.365,67.151 148.400,58.573 155.999,67.813 C163.226,76.600 173.959,93.113 180.000,108.812 C190.969,137.321 187.899,164.809 187.899,164.809 Z"
                id="path-1" class="cls-3" fill-rule="evenodd"></path>
            <path
                d="M94.000,254.812 C58.101,254.812 29.000,225.711 29.000,189.812 C29.000,168.151 37.729,155.000 55.896,137.166 C67.528,125.747 78.415,111.722 83.042,102.172 C83.953,100.292 86.026,90.495 94.019,101.966 C98.212,107.982 104.785,118.681 109.000,127.812 C116.266,143.555 118.000,158.812 118.000,158.812 C118.000,158.812 125.121,154.616 130.000,143.812 C131.573,140.330 134.753,127.148 143.643,140.328 C150.166,150.000 159.127,167.390 159.000,189.812 C159.000,225.711 129.898,254.812 94.000,254.812 Z"
                id="path-2" class="cls-4" fill-rule="evenodd"></path>
            <path
                d="M95.000,183.812 C104.250,183.812 104.250,200.941 116.000,223.812 C123.824,239.041 112.121,254.812 95.000,254.812 C77.879,254.812 69.000,240.933 69.000,223.812 C69.000,206.692 85.750,183.812 95.000,183.812 Z"
                id="path-3" class="cls-5" fill-rule="evenodd"></path>
        </g>
    </svg>
</header>

<!-- Tailwind Keyframes -->
<style>
    @keyframes wave {

        0%,
        100% {
            transform: rotate(-35deg) translate(0);
        }

        50% {
            transform: rotate(-35deg) translate(20px, -20px);
        }
    }

    .animate-wave {
        animation: wave 4s ease-in-out infinite;
    }

    @keyframes fire-flicker {
        0% {
            transform: scale(1) translateY(0);
            opacity: 0.9;
        }

        25% {
            transform: scale(1.02) translateY(-2px);
            opacity: 0.85;
        }

        50% {
            transform: scale(1.03) translateY(-4px);
            opacity: 1;
        }

        75% {
            transform: scale(1.02) translateY(-2px);
            opacity: 0.8;
        }

        100% {
            transform: scale(1) translateY(0);
            opacity: 0.9;
        }
    }

    .animate-fire-flicker {
        animation: fire-flicker 2.5s ease-in-out infinite;
        will-change: transform, opacity;
        /* Prevent layout reflow */
        transform-origin: center center;
        /* Anchor the animation */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navLinks = document.getElementById("navLinks");
        const hamburgerButton = document.getElementById("hamburgerButton");
        const closeButton = document.getElementById("closeButton");

        // Show the navbar links when the hamburger button is clicked
        hamburgerButton.addEventListener("click", () => {
            navLinks.classList.remove("translate-x-full", "opacity-0");
            navLinks.classList.add("translate-x-0", "opacity-100");
        });

        // Hide the navbar links when the cross button is clicked
        closeButton.addEventListener("click", () => {
            navLinks.classList.remove("translate-x-0", "opacity-100");
            navLinks.classList.add("translate-x-full", "opacity-0");
        });
    });
</script>