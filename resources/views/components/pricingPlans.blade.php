<div class="text-center px-2 md:px-5 py-10">
    <h1 class="md:text-5xl text-2xl font-bold text-[#6B21A8] mb-2">Pricing Plans</h1>
    <p class="text-base text-gray-600 mt-4">
        Select the pricing option that fits your needs, or contact us for a custom offer tailored to your requirements.
    </p>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-2 my-5">
        <button
            class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
            data-filter="app" onclick="filterPlans('app')">
            App
        </button>
        <button
            class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
            data-filter="shopify" onclick="filterPlans('shopify')">
            Shopify
        </button>
        <button
            class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
            data-filter="wordpress" onclick="filterPlans('wordpress')">
            WordPress
        </button>
        <button
            class="filter-btn px-4 py-2 text-sm sm:text-base text-white bg-[#6B21A8] rounded font-medium hover:bg-[#581C87] active:bg-[#4A148C] transition-colors duration-300"
            data-filter="uiux" onclick="filterPlans('uiux')">
            UI/UX
        </button>
    </div>

    <!-- Plan Cards -->
    <div class="flex flex-wrap justify-center gap-2 md:gap-6"
        id="plans-container">
        <!-- Shopify Basic Plan -->
        <div
            class="plan shopify bg-white border border-purple-500 snap-start rounded-lg max-w-[350px] min-w-[335px] p-5 text-center shadow-md transform group md:hover:scale-105 transition-transform duration-300">
            <h3 class="text-3xl font-medium">Basic</h3>
            <div class="flex justify-between text-lg font-600 mt-4">
                <h3 class="title">Basic Shopify website</h3>
                <div class="price-wrapper"><span class="price text-2xl">$95</span></div>
            </div>
            <p class="text-gray-500 mt-3 text-left">One Page Wix Website Design + Mobile Responsive + Support</p>

            <div class="additional-info flex justify-between mt-4">
                <div class="delivery-wrapper inline-flex items-center"><span class="glAQDp5 delivery-icon"
                        aria-hidden="true" style="width: 16px; height: 16px;"><svg width="16" height="16"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z">
                            </path>
                            <path d="M9 4H7v5h5V7H9V4z"></path>
                        </svg></span><b class="delivery ml-1">4day delivery</b></div>
                <div class="revisions-wrapper inline-flex items-center"><span class="glAQDp5 revisions-icon"
                        aria-hidden="true" style="width: 16px; height: 16px;"><svg width="16" height="16"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.50001 11.4999C6.40001 13.3999 9.60001 13.3999 11.5 11.4999C12.2 10.7999 12.7 9.7999 12.9 8.7999L14.9 9.0999C14.7 10.5999 14 11.8999 13 12.8999C10.3 15.5999 5.90001 15.5999 3.10001 12.8999L0.900012 15.0999L0.200012 8.6999L6.60001 9.3999L4.50001 11.4999Z">
                            </path>
                            <path
                                d="M15.8 7.2999L9.40001 6.5999L11.5 4.4999C9.60001 2.5999 6.40001 2.5999 4.50001 4.4999C3.80001 5.1999 3.30001 6.1999 3.10001 7.1999L1.10001 6.8999C1.30001 5.3999 2.00001 4.0999 3.00001 3.0999C4.40001 1.6999 6.10001 1.0999 7.90001 1.0999C9.70001 1.0999 11.5 1.7999 12.8 3.0999L15 0.899902L15.8 7.2999Z">
                            </path>
                        </svg></span><b class="revisions ml-1">Unlimited Revisions</b></div>
            </div>
            <div class="collapsable-package-item text-left mt-4">
                <h4 class="font-bold flex justify-between cursor-pointer">What's included? <span
                        class="inline-block collapsable-icon" aria-hidden="true" style="width: 16px; height: 16px;"><svg
                            width="11" height="7" viewBox="0 0 11 7" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.4636 6.38899L0.839326 1.769C0.692474 1.62109 0.692474 1.38191 0.839326 1.23399L1.45798 0.61086C1.60483 0.462945 1.84229 0.462945 1.98915 0.61086L5.72919 4.34021L9.46923 0.61086C9.61608 0.462945 9.85354 0.462945 10.0004 0.61086L10.619 1.23399C10.7659 1.38191 10.7659 1.62109 10.619 1.769L5.99477 6.38899C5.84792 6.5369 5.61046 6.5369 5.4636 6.38899Z">
                            </path>
                        </svg></span>
                </h4>
                <ul class="mt-4 space-y-2 text-left">
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Functional website</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> 2 pages</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> E-commerce functionality
                    </li>

                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Responsive design</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Speed optimization</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Social media icons</li>
                </ul>
            </div>

            <button class="bg-purple-600 text-white mt-4 px-4 py-2 rounded hover:bg-purple-700">Contact Us</button>
        </div>
        <!-- Shopify Standard Plan -->
        <div
            class="plan shopify bg-white border border-purple-500 snap-start rounded-lg max-w-[350px] min-w-[335px] p-5 text-center shadow-md transform group md:hover:scale-105 transition-transform duration-300">
            <h3 class="text-3xl font-medium">Standard</h3>
            <div class="flex justify-between text-lg font-600 mt-4">
                <h3 class="title">Peofessional Shopify website</h3>
                <div class="price-wrapper"><span class="price text-2xl">$285</span></div>
            </div>
            <p class="text-gray-500 mt-3 text-left">One Page Wix Website Design + Mobile Responsive + Support</p>

            <div class="additional-info flex justify-between mt-4">
                <div class="delivery-wrapper inline-flex items-center"><span class="glAQDp5 delivery-icon"
                        aria-hidden="true" style="width: 16px; height: 16px;"><svg width="16" height="16"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z">
                            </path>
                            <path d="M9 4H7v5h5V7H9V4z"></path>
                        </svg></span><b class="delivery ml-1">4day delivery</b></div>
                <div class="revisions-wrapper inline-flex items-center"><span class="glAQDp5 revisions-icon"
                        aria-hidden="true" style="width: 16px; height: 16px;"><svg width="16" height="16"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.50001 11.4999C6.40001 13.3999 9.60001 13.3999 11.5 11.4999C12.2 10.7999 12.7 9.7999 12.9 8.7999L14.9 9.0999C14.7 10.5999 14 11.8999 13 12.8999C10.3 15.5999 5.90001 15.5999 3.10001 12.8999L0.900012 15.0999L0.200012 8.6999L6.60001 9.3999L4.50001 11.4999Z">
                            </path>
                            <path
                                d="M15.8 7.2999L9.40001 6.5999L11.5 4.4999C9.60001 2.5999 6.40001 2.5999 4.50001 4.4999C3.80001 5.1999 3.30001 6.1999 3.10001 7.1999L1.10001 6.8999C1.30001 5.3999 2.00001 4.0999 3.00001 3.0999C4.40001 1.6999 6.10001 1.0999 7.90001 1.0999C9.70001 1.0999 11.5 1.7999 12.8 3.0999L15 0.899902L15.8 7.2999Z">
                            </path>
                        </svg></span><b class="revisions ml-1">Unlimited Revisions</b></div>
            </div>
            <div class="collapsable-package-item text-left mt-4">
                <h4 class="font-bold flex justify-between cursor-pointer">What's included? <span
                        class="inline-block collapsable-icon" aria-hidden="true" style="width: 16px; height: 16px;"><svg
                            width="11" height="7" viewBox="0 0 11 7" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.4636 6.38899L0.839326 1.769C0.692474 1.62109 0.692474 1.38191 0.839326 1.23399L1.45798 0.61086C1.60483 0.462945 1.84229 0.462945 1.98915 0.61086L5.72919 4.34021L9.46923 0.61086C9.61608 0.462945 9.85354 0.462945 10.0004 0.61086L10.619 1.23399C10.7659 1.38191 10.7659 1.62109 10.619 1.769L5.99477 6.38899C5.84792 6.5369 5.61046 6.5369 5.4636 6.38899Z">
                            </path>
                        </svg></span>
                </h4>
                <ul class="mt-4 space-y-2 text-left">
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Functional website</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> 2 pages</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> E-commerce functionality
                    </li>

                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Responsive design</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Speed optimization</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Social media icons</li>
                </ul>
            </div>

            <button class="bg-purple-600 text-white mt-4 px-4 py-2 rounded hover:bg-purple-700">Contact Us</button>
        </div>
        <!-- Shopify Premium Plan -->
        <div
            class="plan shopify bg-white border border-purple-500 snap-start rounded-lg max-w-[350px] min-w-[335px] p-5 text-center shadow-md transform group md:hover:scale-105 transition-transform duration-300">
            <h3 class="text-3xl font-medium">Premium</h3>
            <div class="flex justify-between text-lg font-600 mt-4">
                <h3 class="title">Advance Shopify website</h3>
                <div class="price-wrapper"><span class="price text-2xl">$495</span></div>
            </div>
            <p class="text-gray-500 mt-3 text-left">One Page Wix Website Design + Mobile Responsive + Support</p>

            <div class="additional-info flex justify-between mt-4">
                <div class="delivery-wrapper inline-flex items-center"><span class="glAQDp5 delivery-icon"
                        aria-hidden="true" style="width: 16px; height: 16px;"><svg width="16" height="16"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z">
                            </path>
                            <path d="M9 4H7v5h5V7H9V4z"></path>
                        </svg></span><b class="delivery ml-1">4day delivery</b></div>
                <div class="revisions-wrapper inline-flex items-center"><span class="glAQDp5 revisions-icon"
                        aria-hidden="true" style="width: 16px; height: 16px;"><svg width="16" height="16"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.50001 11.4999C6.40001 13.3999 9.60001 13.3999 11.5 11.4999C12.2 10.7999 12.7 9.7999 12.9 8.7999L14.9 9.0999C14.7 10.5999 14 11.8999 13 12.8999C10.3 15.5999 5.90001 15.5999 3.10001 12.8999L0.900012 15.0999L0.200012 8.6999L6.60001 9.3999L4.50001 11.4999Z">
                            </path>
                            <path
                                d="M15.8 7.2999L9.40001 6.5999L11.5 4.4999C9.60001 2.5999 6.40001 2.5999 4.50001 4.4999C3.80001 5.1999 3.30001 6.1999 3.10001 7.1999L1.10001 6.8999C1.30001 5.3999 2.00001 4.0999 3.00001 3.0999C4.40001 1.6999 6.10001 1.0999 7.90001 1.0999C9.70001 1.0999 11.5 1.7999 12.8 3.0999L15 0.899902L15.8 7.2999Z">
                            </path>
                        </svg></span><b class="revisions ml-1">Unlimited Revisions</b></div>
            </div>
            <div class="collapsable-package-item text-left mt-4">
                <h4 class="font-bold flex justify-between cursor-pointer">What's included? <span
                        class="inline-block collapsable-icon" aria-hidden="true"
                        style="width: 16px; height: 16px;"><svg width="11" height="7" viewBox="0 0 11 7"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.4636 6.38899L0.839326 1.769C0.692474 1.62109 0.692474 1.38191 0.839326 1.23399L1.45798 0.61086C1.60483 0.462945 1.84229 0.462945 1.98915 0.61086L5.72919 4.34021L9.46923 0.61086C9.61608 0.462945 9.85354 0.462945 10.0004 0.61086L10.619 1.23399C10.7659 1.38191 10.7659 1.62109 10.619 1.769L5.99477 6.38899C5.84792 6.5369 5.61046 6.5369 5.4636 6.38899Z">
                            </path>
                        </svg></span>
                </h4>
                <ul class="mt-4 space-y-2 text-left">
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Functional website</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> 2 pages</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> E-commerce functionality
                    </li>

                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Responsive design</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Speed optimization</li>
                    <li class="flex items-center gap-2"><span class="text-green-500">✔</span> Social media icons</li>
                </ul>
            </div>

            <button class="bg-purple-600 text-white mt-4 px-4 py-2 rounded hover:bg-purple-700">Contact Us</button>
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
