<!-- Top Bar -->
<div class=" py-2">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Left Side: Location, Call, Email -->
        <div class="flex items-center space-x-4">
            <!-- Location -->
            <div class="flex items-center space-x-1">
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://www.google.com/maps?q=Mirpur+DOHS,+Dhaka,+Bangladesh" target="_blank"
                    class="text-white hover:text-white">
                    <span>Mirpur DOHS, Dhaka, Bangladesh</span>
                </a>
            </div>
            <!-- Call -->
            <div class="flex items-center space-x-1 text-white">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:+880123456789" class="text-white hover:text-white">
                    <span>+880 123456789</span>
                </a>
            </div>
            <!-- Email -->
            <div class="flex items-center space-x-1 text-white">
                <i class="fas fa-envelope"></i>
                <a href="mailto:info@endbrackets.com" class="text-white hover:text-white">
                    <span>info@endbrackets.com</span>
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



<!-- Hero Section -->
<div class="container mx-auto text-center py-12 px-6">
    <h1 class="text-6xl font-light mb-4" style="font-family: 'Inria Sans', sans-serif;">We Develop</h1>
    <h2 class="text-7xl mb-6 iceberg tracking-wide">Innovative Products</h2>
    <p class="my-8 text-xl">Software Development • UI/UX Design • Digital Marketing</p>
    <!-- Buttons -->
    <div class="flex justify-center space-x-4">
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
