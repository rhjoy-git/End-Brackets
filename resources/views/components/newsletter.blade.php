
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<section class="container mx-auto px-4 pt-10 pb-24 md:max-w-screen-2xl">
    <div class="flex justify-center items-center">
        <div class="w-full md:max-w-4xl bg-black rounded-3xl text-center p-6 md:p-16 relative">
            <div class="absolute inset-0 bg-cover bg-center rounded-3xl opacity-50"
                style="background-image: url('{{ asset('resources/images/services/newsletter.png') }}');">
            </div>
            <div class="relative z-10">
                <h2 class="text-white text-lg md:text-3xl xlg:text-4xl font-semibold md:mb-8 mb-3">
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
