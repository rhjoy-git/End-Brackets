<section class="container mx-auto px-4 py-16 max-w-screen-xl">
    <h2 class="text-5xl sm:text-4xl font-bold text-purple-600 mb-8">Have Questions?</h2>
    <!-- FAQ Item 1 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            What types of websites can you design and develop?
            <span class="icon">+</span>
        </h5>
        <p>
            We specialize in designing and developing various types of websites, including business websites, e-commerce
            stores, portfolio sites, and blogs. Whether you need a custom Shopify store, a Wix design, or a WordPress
            site, we have the expertise to bring your vision to life.
        </p>
    </div>

    <!-- FAQ Item 2 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            How long does it take to complete a website project?
            <span class="icon">+</span>
        </h5>
        <p>
            The timeline depends on the complexity and requirements of your project. On average, a basic website takes
            1-2 weeks, while more complex e-commerce or custom designs may take 3-6 weeks. We always work with you to
            establish clear timelines.
        </p>
    </div>

    <!-- FAQ Item 3 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            Do you offer ongoing website maintenance and support?
            <span class="icon">+</span>
        </h5>
        <p>
            Yes, we provide ongoing maintenance and support services to keep your website running smoothly. This
            includes updates, security checks, backups, and resolving any issues that may arise.
        </p>
    </div>

    <!-- FAQ Item 4 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            Can you help with redesigning an existing website?
            <span class="icon">+</span>
        </h5>
        <p>
            Absolutely! We can revamp your existing website to give it a modern, professional look while ensuring
            improved functionality and user experience. We work on platforms like WordPress, Shopify, Wix, and more.
        </p>
    </div>

    <!-- FAQ Item 5 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            Do you provide custom designs or use templates?
            <span class="icon">+</span>
        </h5>
        <p>
            We offer both custom designs tailored to your unique requirements and template-based solutions for faster
            delivery and budget-friendly options. We ensure every design aligns with your brand's identity.
        </p>
    </div>

    <!-- FAQ Item 6 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            Can you integrate third-party tools like payment gateways or analytics?
            <span class="icon">+</span>
        </h5>
        <p>
            Yes, we can integrate a variety of third-party tools, including payment gateways, CRM systems, analytics
            platforms, and other APIs, to enhance the functionality of your website.
        </p>
    </div>

    <!-- FAQ Item 7 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            Do you offer Figma prototypes before starting development?
            <span class="icon">+</span>
        </h5>
        <p>
            Yes, we create detailed Figma prototypes to give you a clear visualization of the final design before
            development begins. This allows for feedback and revisions at an early stage.
        </p>
    </div>

    <!-- FAQ Item 8 -->
    <div class="faq-item" onclick="toggleFAQ(this)">
        <h5>
            What platforms do you specialize in for website development?
            <span class="icon">+</span>
        </h5>
        <p>
            We specialize in popular platforms like Shopify, Wix, WordPress, and custom-built websites using modern
            technologies. We choose the platform that best fits your project's needs and goals.
        </p>
    </div>

</section>
<script>
    function toggleFAQ(faqItem) {
        const isOpen = faqItem.classList.contains("open");
        // Close all other FAQ items
        document
            .querySelectorAll(".faq-item")
            .forEach((item) => item.classList.remove("open"));
        // Toggle the clicked FAQ item
        if (!isOpen) faqItem.classList.add("open");
    }
</script>
