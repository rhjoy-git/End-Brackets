<div class="bg-custom-gradient dark:bg-[#2c0032] py-10">
    <div class="container mx-auto px-4 py-4 max-w-screen-xl">
        {{-- Section Header --}}
        <div class="text-center">
            <h2 class="md:text-5xl text-2xl font-bold text-white mb-2">
                Meet Our Team
            </h2>
            <p class="text-base md:text-lg text-gray-300 mt-4">
                Get to know the talented individuals who make our company thrive. Our diverse team brings together a wealth of expertise.
            </p>
        </div>

        {{-- Team Members Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-20 mt-12">
            {{-- Team Member 01 --}}
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

            {{-- Team Member 02 --}}
            <div class="relative group overflow-hidden rounded-lg shadow-lg">
                {{-- Member Image --}}
                <img src="{{ asset('resources/images/team/member2.jpg') }}" alt="Team Member"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                {{-- Overlay --}}
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="text-lg font-bold text-white">
                        Masum Billah
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
                <img src="{{ asset('resources/images/team/member3.jpg') }}" alt="Team Member"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />

                {{-- Overlay --}}
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <h3 class="text-lg font-bold text-white">
                        Rakibul Hasan Joy
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

        {{-- See More Link --}}
        <div class="text-center mt-14">
            <a href="#" class="btn border py-3 px-5 rounded-lg text-purple-800 hover:text-white font-medium">
                See More →
            </a>
        </div>
    </div>
</div>
