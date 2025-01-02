<header class="relative text-white h-screen bg-cover bg-center"
    style="background-image: url('{{ asset('resources/images/Hero image.png') }}');">

    <!-- Top Bar -->
    <div class="py-4 md:flex hidden">
        <div class="container mx-auto flex flex-wrap justify-between items-center px-4">
            <!-- Left Side: Location, Call, Email -->
            <div class="flex flex-wrap items-center text-md space-x-4">
                <!-- Location -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="https://www.google.com/maps?q=Mirpur+DOHS,+Dhaka,+Bangladesh" target="_blank"
                        class="text-white hover:text-purple-500">
                        Mirpur DOHS, Dhaka, Bangladesh
                    </a>
                </div>
                <!-- Call -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+880123456789" class="text-white hover:text-purple-500">
                        +880 123456789
                    </a>
                </div>
                <!-- Email -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@endbrackets.com" class="text-white hover:text-purple-500">
                        info@endbrackets.com
                    </a>
                </div>
            </div>

            <!-- Right Side: Social Icons -->
            <div class="flex space-x-4 mt-3 md:mt-0">
                <!-- WhatsApp -->
                <a href="https://wa.me/+8801978743947" target="_blank"
                    class="bg-green-500 hover:bg-green-600 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <!-- Facebook -->
                <a href="https://www.facebook.com/TheEndBrackets" target="_blank"
                    class="bg-blue-600 hover:bg-blue-700 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- LinkedIn -->
                <a href="#" target="_blank"
                    class="bg-blue-800 hover:bg-blue-900 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="items-center justify-center h-20 md:flex hidden ">
        <div class="container mx-auto flex justify-center items-center py-4 px-6">
            <!-- Left Links -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-purple-500 text-lg duration-300 text-white">Portfolio</a>
                <a href="#" class="hover:text-purple-500 text-lg duration-300 text-white">Our Team</a>
                <a href="#" class="hover:text-purple-500 text-lg duration-300 text-white">About Us</a>
            </div>

            <!-- Center Brand -->
            <a href="#" class="mx-10">
                <img src="{{ asset('/resources/images/eblogo.png') }}" alt="Eb Logo" class="h-11">
            </a>


            <!-- Right Links -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-purple-500 text-lg">Services</a>
                <a href="#" class="hover:text-purple-500 text-lg">Pricing</a>
                <a href="#" class="hover:text-purple-500 text-lg">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Mobile View Navbar -->
    <nav class="md:hidden">
        <div class="flex items-center justify-between h-20 px-6 md:px-10">
            <!-- Left (Logo) -->
            <a href="#" class="h-11">
                <img src="{{ asset('/resources/images/eblogo.png') }}" alt="Eb Logo" class="h-full">
            </a>

            <!-- Hamburger Button -->
            <button id="menuToggle" type="button"
                class="inline-flex items-center justify-center p-2 w-12 h-12 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open main menu</span>
                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <!-- Navbar Links -->
        <div id="navLinks"
            class="hidden flex-col text-base font-medium mt-4 rounded-lg bg-custom-gradient dark:bg-gray-800 dark:border-gray-700 p-4">
            <a href="#" class="block py-2 px-3 text-white bg-customPurple rounded dark:bg-purple-600"
                aria-current="page">Portfolio</a>
            <a href="#"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Our
                Team</a>
            <a href="#"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">About
                Us</a>
            <a href="#"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
            <a href="#"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Pricing</a>
            <a href="#"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact
                Us</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mx-auto text-center py-12 px-4">
        <h1 class="text-5xl md:text-6xl font-light mb-4 lg:my-14" style="font-family: 'Inria Sans', sans-serif;">We
            Develop</h1>
        <h2 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 lg:mb-16">Innovative Products</h2>
        <p class="my-6 text-lg md:text-xl">Software Development • UI/UX Design • Digital Marketing</p>

        <!-- Buttons -->
        <div class="flex justify-center space-x-4 mt-6">
            <!-- Portfolio Button -->
            <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white py-2 px-6 rounded-lg text-lg">
                Portfolio
            </a>
            <!-- Schedule a Call Button -->
            <a href="#"
                class="bg-gray-700 hover:bg-gray-800 text-white py-2 px-6 rounded-lg text-lg flex items-center space-x-2">
                <span>Schedule a Call</span>
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
</header>


<script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
    });
</script>
