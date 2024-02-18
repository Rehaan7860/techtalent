<section
    class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
    <div
        class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"
    ></div>

    <div class="z-10">
        <h1 class="text-4xl md:text-6xl font-bold uppercase text-white">
            Tech<span class="text-black">Talent</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find or post Software Development jobs & projects
        </p>
        <div>
            @auth
            <a
                href="/job/create"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black hover:bg-black hover:text-white"
            >Create A Job Post</a>
            @else
                <a
                    href="/job/create"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black hover:bg-black hover:text-white"
                >Sign Up To Post A Job </a>
            @endauth
        </div>
    </div>
</section>
