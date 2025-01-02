{{-- <!-- Newsletter Section -->
<div class="bg-cover bg-center py-16" style="background-image: url('{{asset('resources/images/newsletter bg.png')}}');">
    <div class="container mx-auto text-center">
        <h3 class="text-2xl font-bold text-white mb-4">Subscribe our newsletter to get best advice on Technology</h3>
        <div class="flex justify-center items-center">
            <input type="email" placeholder="Enter Your Email" class="p-3 rounded-l-md focus:outline-none w-1/3">
            <button class="bg-purple-600 text-white px-6 py-3 rounded-r-md">&#10148;</button>
        </div>
    </div>
</div> --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- <section class="newsletter-section">
    <div class="newsletter-content">
        <h2>Subscribe to our newsletter to get the best advice on Technology</h2>
        <form action="{{ route('newsletter.subscribe') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <button type="submit">
                <i class="fa fa-paper-plane"></i>
            </button>
        </form>
    </div>
</section> --}}
<section class="container mx-auto px-4 pt-6 pb-24 max-w-screen-2xl">
    <div class="flex justify-center items-center">
        <div class="w-full max-w-4xl bg-black rounded-3xl text-center p-16 relative">
            <div class="absolute inset-0 bg-cover bg-center rounded-3xl opacity-50"
                style="background-image: url('{{ asset('resources/images/services/newsletter.png') }}');">
            </div>
            <div class="relative z-10">
                <h2 class="text-white text-3xl xlg:text-4xl font-semibold mb-8">
                    Subscribe to our newsletter to get the best advice on Technology
                </h2>
                <form action="{{ route('newsletter.subscribe') }}" method="POST"
                    class="flex justify-center items-center">
                    @csrf
                    <input type="email" name="email" placeholder="Enter Your Email"
                        class="w-full md:w-3/4 p-4 rounded-l-md text-gray-800 focus:outline-none" required />
                    <button type="submit"
                        class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-5 rounded-r-md flex items-center">
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
