<div class="container mx-auto px-4 py-16 max-w-screen-xl">
    <!-- Portfolio Header -->
    <div class="flex flex-col sm:flex-row justify-between items-center sm:items-end mb-8">
        <div class="text-center sm:text-left">
            <h2 class="text-5xl sm:text-4xl font-bold text-[#6B21A8] mb-2">Our Portfolio</h2>
            <h3 class="text-lg sm:text-xl text-gray-800">Recent Projects</h3>
        </div>
        <div class="filter-buttons flex flex-wrap justify-center sm:justify-end gap-2 mt-4 sm:mt-0">
            <button
                class="filter-btn active px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded hover:bg-[#581C87] active:bg-[#581C87]"
                data-filter="all">All</button>
            <button
                class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded hover:bg-[#581C87] active:bg-[#581C87]"
                data-filter="app">App</button>
            <button
                class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded hover:bg-[#581C87] active:bg-[#581C87]"
                data-filter="shopify">Shopify</button>
            <button
                class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded hover:bg-[#581C87] active:bg-[#581C87]"
                data-filter="wordpress">WordPress</button>
            <button
                class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded hover:bg-[#581C87] active:bg-[#581C87]"
                data-filter="uiux">UI/UX</button>
            <button
                class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded hover:bg-[#581C87] active:bg-[#581C87]"
                data-filter="marketing">Marketing</button>
        </div>
    </div>


    <!-- Portfolio Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="uiux app">
            <img src="{{ asset('resources/images/portfolio/portfolio1.png') }}" alt="Clothing Website"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md ">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">Clothing Website</h4>
                <p class="text-base px-4 mb-2 text-center">Promoting brand and displaying products for summer.</p>
                <span class="text-yellow-400 font-semibold">UI/UX</span>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="app">
            <img src="{{ asset('resources/images/portfolio/portfolio2.png') }}" alt="Mobile App"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">Mobile App</h4>
                <p class="text-base px-4 mb-2 text-center">A sleek mobile application for tracking fitness goals.</p>
                <span class="text-yellow-400 font-semibold">App Development</span>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="shopify">
            <img src="{{ asset('resources/images/portfolio/portfolio3.png') }}" alt="E-Commerce Store"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">E-Commerce Store</h4>
                <p class="text-base px-4 mb-2 text-center">A Shopify store designed for modern online shopping.</p>
                <span class="text-yellow-400 font-semibold">Shopify</span>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="wordpress">
            <img src="{{ asset('resources/images/portfolio/portfolio4.png') }}" alt="WordPress Blog"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">WordPress Blog</h4>
                <p class="text-base px-4 mb-2 text-center">A content-rich blog built for seamless reading.</p>
                <span class="text-yellow-400 font-semibold">WordPress</span>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="marketing">
            <img src="{{ asset('resources/images/portfolio/portfolio5.png') }}" alt="Marketing Campaign"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">Marketing Campaign</h4>
                <p class="text-base px-4 mb-2 text-center">A vibrant campaign driving brand awareness.</p>
                <span class="text-yellow-400 font-semibold">Marketing</span>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="uiux app">
            <img src="{{ asset('resources/images/portfolio/portfolio6.png') }}" alt="Mobile Banking App"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">Mobile Banking App</h4>
                <p class="text-base px-4 mb-2 text-center">A secure app for managing finances with intuitive UI.</p>
                <span class="text-yellow-400 font-semibold">UI/UX • App</span>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="wordpress">
            <img src="{{ asset('resources/images/portfolio/portfolio7.png') }}" alt="Personal Blog"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">Personal Blog</h4>
                <p class="text-base px-4 mb-2 text-center">A minimalist WordPress blog for sharing thoughts.</p>
                <span class="text-yellow-400 font-semibold">WordPress</span>
            </div>
        </div>
        <!-- Card 8 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="marketing shopify">
            <img src="{{ asset('resources/images/portfolio/portfolio8.png') }}" alt="E-Commerce Campaign"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">E-Commerce Campaign</h4>
                <p class="text-base px-4 mb-2 text-center">A targeted Shopify campaign to boost online sales.</p>
                <span class="text-yellow-400 font-semibold">Marketing • Shopify</span>
            </div>
        </div>
        <!-- Card 9 -->
        <div class="portfolio-card relative overflow-hidden rounded-lg group group-hover:rounded-md"
            data-category="uiux app">
            <img src="{{ asset('resources/images/portfolio/portfolio9.png') }}" alt="Health Tracker App"
                class="w-full h-auto transition-transform duration-300 group-hover:scale-110 rounded-lg group-hover:rounded-md">
            <div
                class="card-overlay absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/90 text-white flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <h4 class="text-2xl font-semibold mb-2">Health Tracker App</h4>
                <p class="text-base px-4 mb-2 text-center">A comprehensive app for monitoring health metrics.</p>
                <span class="text-yellow-400 font-semibold">UI/UX • App</span>
            </div>
        </div>

    </div>
</div>


<script>
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.portfolio-card');

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            // Remove active class and reset styles from all buttons
            filterButtons.forEach((btn) => {
                btn.classList.remove('active', 'bg-[#581C87]');
                btn.classList.add('bg-[#6B21A8]');
            });

            // Add active class and styles to the clicked button
            button.classList.add('active', 'bg-[#581C87]');
            button.classList.remove('bg-[#6B21A8]');

            // Filter cards based on the data-category
            const filter = button.dataset.filter;
            cards.forEach((card) => {
                if (filter === 'all' || card.dataset.category.includes(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
