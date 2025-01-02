<div class="bg-custom-gradient py-16">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center">
            <h2 class="text-5xl font-bold font-ebfont text-white">Meet Our Team</h2>
            <p class="text-lg text-gray-300 mt-4">
                Get to know the talented individuals who make our company thrive.
                Our diverse team brings together a wealth of expertise.
            </p>
        </div>

        {{-- Team Members Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-12">
            {{-- Team Member 01 --}}
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                {{-- Member Image --}}
                <img src="{{ asset('resources/images/team/member1.jpg') }}" alt="Team Member"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                {{-- Overlay --}}
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="text-lg font-bold text-white">
                        Alhaz Mondal Hredhay
                    </h3>
                    <p class="text-sm text-gray-300">COO</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Team Member 02 --}}
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                {{-- Member Image --}}
                <img src="{{ asset('resources/images/team/member2.jpg') }}" alt="Team Member"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                {{-- Overlay --}}
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="text-lg font-bold text-white">
                        Anika Afrina Anta
                    </h3>
                    <p class="text-sm text-gray-300">COO</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Team Member 03 --}}
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                {{-- Member Image --}}
                <img src="{{ asset('resources/images/team/member1.jpg') }}" alt="Team Member"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                {{-- Overlay --}}
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="text-lg font-bold text-white">
                        Md Alhaz Mondal Hredhay
                    </h3>
                    <p class="text-sm text-gray-300">COO</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- See More Link -->
        <div class="text-center mt-8">
            <a href="#" class="text-purple-500 hover:text-purple-300 font-medium">See More →</a>
        </div>
    </div>
</div>
