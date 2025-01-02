<div class="text-center px-5 py-12">
    <h1 class="text-5xl sm:text-4xl font-bold text-[#6B21A8] mb-2">Pricing Plans</h1>
    <p class="text-base text-gray-600 mt-4">
      Select the pricing option that fits your needs, or contact us for a custom offer tailored to your requirements.
    </p>
  
    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-2 my-5">
      <button
        class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
        data-filter="app"
        onclick="filterPlans('app')">
        App
      </button>
      <button
        class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
        data-filter="shopify"
        onclick="filterPlans('shopify')">
        Shopify
      </button>
      <button
        class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
        data-filter="wordpress"
        onclick="filterPlans('wordpress')">
        WordPress
      </button>
      <button
        class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
        data-filter="uiux"
        onclick="filterPlans('uiux')">
        UI/UX
      </button>
    </div>
  
    <!-- Plan Cards -->
    <div class="flex flex-wrap justify-center gap-6" id="plans-container">
      <!-- App Plans -->
      <div
        class="plan app bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">App - Basic Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$50</h4>
        <p class="text-gray-500 mt-3">For startups and small businesses</p>
      </div>
      <div
        class="plan app bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">App - Standard Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$100</h4>
        <p class="text-gray-500 mt-3">For growing businesses</p>
      </div>
      <div
        class="plan app bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">App - Premium Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$150</h4>
        <p class="text-gray-500 mt-3">For enterprises</p>
      </div>
  
      <!-- Shopify Plans -->
      <div
        class="plan shopify bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">Shopify - Basic Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$70</h4>
        <p class="text-gray-500 mt-3">For small online stores</p>
      </div>
      <div
        class="plan shopify bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">Shopify - Standard Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$140</h4>
        <p class="text-gray-500 mt-3">For scaling stores</p>
      </div>
      <div
        class="plan shopify bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">Shopify - Premium Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$200</h4>
        <p class="text-gray-500 mt-3">For high-traffic stores</p>
      </div>
  
      <!-- WordPress Plans -->
      <div
        class="plan wordpress bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">WordPress - Basic Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$80</h4>
        <p class="text-gray-500 mt-3">For blogs and portfolios</p>
      </div>
      <div
        class="plan wordpress bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">WordPress - Standard Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$150</h4>
        <p class="text-gray-500 mt-3">For small businesses</p>
      </div>
      <div
        class="plan wordpress bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">WordPress - Premium Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$250</h4>
        <p class="text-gray-500 mt-3">For enterprise websites</p>
      </div>
  
      <!-- UI/UX Plans -->
      <div
        class="plan uiux bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">UI/UX - Basic Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$90</h4>
        <p class="text-gray-500 mt-3">Basic design services</p>
      </div>
      <div
        class="plan uiux bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">UI/UX - Standard Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$180</h4>
        <p class="text-gray-500 mt-3">Enhanced designs for apps</p>
      </div>
      <div
        class="plan uiux bg-white border border-[#6B21A8] rounded-lg w-80 p-6 text-center shadow-lg group hidden">
        <h3 class="text-xl font-semibold">UI/UX - Premium Plan</h3>
        <h4 class="text-lg text-gray-700 group-hover:text-[#6B21A8] mt-2 transition-colors duration-300">$300</h4>
        <p class="text-gray-500 mt-3">Comprehensive design services</p>
      </div>
    </div>
  </div>
  
  <!-- Script -->
  <script>
    function filterPlans(category) {
      // Hide all plans
      const plans = document.querySelectorAll(".plan");
      plans.forEach((plan) => {
        plan.classList.add("hidden");
      });
  
      // Show only selected category's plans
      const selectedPlans = document.querySelectorAll(`.plan.${category}`);
      selectedPlans.forEach((plan) => {
        plan.classList.remove("hidden");
      });
  
      // Highlight the active button
      const buttons = document.querySelectorAll(".filter-btn");
      buttons.forEach((button) => button.classList.remove("bg-[#581C87]"));
      document.querySelector(`[data-filter="${category}"]`).classList.add("bg-[#581C87]");
    }
  </script>
  