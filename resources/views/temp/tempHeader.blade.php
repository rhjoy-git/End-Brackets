<header class="relative text-white h-screen bg-cover bg-center" style="background-image: url('{{ asset('resources/images/Hero image.png') }}');">
    <!-- Top Bar -->
    <div class="py-3 hidden md:block">
        <div class="container mx-auto flex flex-wrap justify-between items-center px-4">
            <!-- Left Side: Location, Call, Email -->
            <div class="flex flex-wrap items-center text-sm space-x-4">
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
    <nav class="flex items-center justify-between container mx-auto px-4 py-3">
        <!-- Logo -->
        <a href="#">
            <img src="{{ asset('/resources/images/eblogo.png') }}" alt="Eb Logo" class="h-11">
        </a>

        <!-- Hamburger Menu -->
        <div class="block md:hidden">
            <button id="menu-toggle" class="focus:outline-none text-white">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Links -->
        <div id="menu" class="hidden md:flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-6 text-lg">
            <a href="#" class="text-white hover:text-purple-500 duration-300">Portfolio</a>
            <a href="#" class="text-white hover:text-purple-500 duration-300">Our Team</a>
            <a href="#" class="text-white hover:text-purple-500 duration-300">About Us</a>
            <a href="#" class="text-white hover:text-purple-500 duration-300">Services</a>
            <a href="#" class="text-white hover:text-purple-500 duration-300">Pricing</a>
            <a href="#" class="text-white hover:text-purple-500 duration-300">Contact Us</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mx-auto text-center py-12 px-4">
        <h1 class="text-4xl md:text-6xl font-light mb-4 lg:my-14" style="font-family: 'Inria Sans', sans-serif;">We Develop</h1>
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

<!-- JavaScript for Mobile Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>