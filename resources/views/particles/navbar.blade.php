<!-- Navbar -->
<nav class="items-center justify-center h-20 xl:flex hidden">
    <div class="container mx-auto flex justify-center items-center py-4 px-6">
        <!-- Left Links -->
        <div class="hidden md:flex space-x-6">
            <a href=" {{ route('portfolio') }} " class=" text-lg duration-300 text-white">Portfolio</a>
            <a href="#" class=" text-lg duration-300 text-white">Our Team</a>
            <a href="#" class=" text-lg duration-300 text-white">About Us</a>
        </div>

        <!-- Center Brand -->
        <a href=" {{ route('home') }} " class="mx-10">
            <img src="{{ asset('/resources/images/eblogo.png') }}" alt="Eb Logo" class="h-11">
        </a>

        <!-- Right Links -->
        <div class="hidden md:flex space-x-6">
            <a href=" {{ route('services') }} " class=" text-lg duration-300 text-white">Services</a>
            <a href="#" class=" text-lg duration-300 text-white">Pricing</a>
            <a href="#" class=" text-lg duration-300 text-white">Contact Us</a>
        </div>
    </div>
</nav>

<!-- Mobile View Navbar -->
<nav class="xl:hidden">
    <div class="flex items-center justify-between h-20 px-6 md:px-10">
        <!-- Left (Logo) -->
        <a href=" {{ route('home') }} " class="h-9">
            <img src="{{ asset('/resources/images/eblogo.png') }}" alt="Eb Logo" class="h-full">
        </a>

        <!-- Hamburger Button -->
        <button id="hamburgerButton" type="button"
            class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-white rounded-lg dark:text-white">
            <span class="sr-only">Open main menu</span>
            <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>

    <!-- Navbar Links -->
    <div class="fixed top-0 left-0 h-screen w-full z-50 bg-[#6A0DAD] dark:bg-[#6A0DAD] transform translate-x-full opacity-0 transition-transform  duration-500 ease-in-out"
        id="navLinks">
        <div class="flex-col text-base font-medium mt-20 rounded-lg p-4">
            <a href=" {{ route('portfolio') }} "
                class="block py-2 px-3 text-white rounded hover:bg-purple-600 dark:text-white dark:hover:bg-purple-600 dark:hover:text-white"
                aria-current="page">Portfolio</a>
            <a href="#"
                class="block py-2 px-3 text-white rounded hover:bg-purple-600 dark:text-white dark:hover:bg-purple-600 dark:hover:text-white">Our
                Team</a>
            <a href="#"
                class="block py-2 px-3 text-white rounded hover:bg-purple-600 dark:text-white dark:hover:bg-purple-600 dark:hover:text-white">About
                Us</a>
            <a href=" {{ route('services') }} "
                class="block py-2 px-3 text-white rounded hover:bg-purple-600 dark:text-white dark:hover:bg-purple-600 dark:hover:text-white">Services</a>
            <a href="#"
                class="block py-2 px-3 text-white rounded hover:bg-purple-600 dark:text-white dark:hover:bg-purple-600 dark:hover:text-white">Pricing</a>
            <a href="#"
                class="block py-2 px-3 text-white rounded hover:bg-purple-600 dark:text-white dark:hover:bg-purple-600 dark:hover:text-white">Contact
                Us</a>
        </div>
        <!-- Cross Button -->
        <button id="closeButton" type="button" class="block xl:hidden absolute top-6 right-6 z-[60]">
            <span class="sr-only">Close main menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path
                    d="M27.4501 8.56508C26.8651 7.98008 25.9201 7.98008 25.3351 8.56508L18.0001 15.8851L10.6651 8.55008C10.0801 7.96508 9.13508 7.96508 8.55008 8.55008C7.96508 9.13508 7.96508 10.0801 8.55008 10.6651L15.8851 18.0001L8.55008 25.3351C7.96508 25.9201 7.96508 26.8651 8.55008 27.4501C9.13508 28.0351 10.0801 28.0351 10.6651 27.4501L18.0001 20.1151L25.3351 27.4501C25.9201 28.0351 26.8651 28.0351 27.4501 27.4501C28.0351 26.8651 28.0351 25.9201 27.4501 25.3351L20.1151 18.0001L27.4501 10.6651C28.0201 10.0951 28.0201 9.13508 27.4501 8.56508Z"
                    fill="#ffffff"></path>
            </svg>
        </button>
    </div>
</nav>