<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End Brackets</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Include Bootstrap/Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Top Bar -->
    <div class="bg-gray-800 text-white py-2">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Left Side: Location, Call, Email -->
            <div class="flex items-center space-x-4">
                <!-- Location -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Mirpur DOHS, Dhaka, Bangladesh</span>
                </div>
                <!-- Call -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-phone-alt"></i>
                    <span>+880 123456789</span>
                </div>
                <!-- Email -->
                <div class="flex items-center space-x-1">
                    <i class="fas fa-envelope"></i>
                    <span>info@endbrackets.com</span>
                </div>
            </div>

            <!-- Right Side: Social Icons -->
            <div class="flex items-center space-x-4">
                <!-- WhatsApp -->
                <a href="#" class="bg-gray-700 hover:bg-purple-600 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <!-- Facebook -->
                <a href="#" class="bg-gray-700 hover:bg-purple-600 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- LinkedIn -->
                <a href="#" class="bg-gray-700 hover:bg-purple-600 text-white w-8 h-8 flex items-center justify-center rounded">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="bg-gray-900 text-white">
        <div class="container mx-auto flex justify-center items-center py-4 px-6">
            <!-- Left Links -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-purple-500">Portfolio</a>
                <a href="#" class="hover:text-purple-500">Our Team</a>
                <a href="#" class="hover:text-purple-500">About Us</a>
            </div>
    
            <!-- Center Brand -->
            <a href="#" class="text-2xl font-bold mx-10">End Brackets</a>
    
            <!-- Right Links -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-purple-500">Services</a>
                <a href="#" class="hover:text-purple-500">Pricing</a>
                <a href="#" class="hover:text-purple-500">Contact Us</a>
            </div>
        </div>
    </nav>
    

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-purple-700 to-black text-white">
        <div class="container mx-auto text-center py-16 px-4">
            <h1 class="text-4xl font-bold mb-4">We Develop</h1>
            <h2 class="text-3xl mb-6">Innovative Products</h2>
            <p class="mb-8">Software Development • UI/UX Design • Digital Marketing</p>
            <a href="#" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-6 rounded">Learn More</a>
        </div>
    </header>

    <!-- Yield for other content -->
    @yield('content')
</body>
</html>
