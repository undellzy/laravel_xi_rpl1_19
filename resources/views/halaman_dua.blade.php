<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Sederhana</title>
    @vite ('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <section
        style="background-image: url('{{ asset('images/wallhaven-1q2ldw_1920x1200.png') }}'); background-size: cover; background-position: center; height: 100vh; background-repeat: no-repeat;"
    >
        <header>
            <nav class="flex gap-6 items-center text-white h-20">
                <i data-feather="send" class="w-8 h-8 ml-12"></i>
                <h1 class="text-2xl flex flex-col text-justify">
                    WanderWorld
                    <span class="text-xs uppercase"
                        >Explore Dream Discover</span
                    >
                </h1>
                <div
                    class="text-md flex flex-row gap-5 items-center mr-11 ml-auto"
                >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >DESTINATIONS</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >EXPERIENCES</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >DEALS</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >ABOUT</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >BLOG</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >CONTACT</a
                    >
                    <button
                        type="button"
                        class="px-4 py-2 bg-blue-900 text-md rounded-lg text-white hover:bg-blue-700 transition duration-150 ease-in-out cursor-pointer"
                    >
                        BOOK NOW
                    </button>
                    <i data-feather="heart" class="w-5 h-5"></i>
                </div>
            </nav>
        </header>
        <main>
            <section class="text-white pl-12">
                <div class="mt-30">
                    <h1 class="text-6xl max-w-lg">
                        Explore The World. Create
                        <span class="text-blue-500">Memories.</span>
                    </h1>
                    <p class="max-w-lg mt-10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis non delectus ratione, deleniti tempora corporis nobis magni.</p>
                </div>
                <div
                    class="bg-white w-160 h-20 rounded-xl text-black flex items-center justify-center gap-7 mt-10"
                >
                    <div class="flex gap-2">
                        <i data-feather="search" class="text-black"></i>
                        <h4 class="text-lg flex flex-col">
                            Where To?
                            <span class="text-[14px]">Search Destinations</span>
                        </h4>
                    </div>
                    <div class="flex gap-2">
                        <i data-feather="calendar" class="text-black"></i>
                        <h4 class="text-lg flex flex-col">
                            Check in <span class="text-[14px]">Add dates</span>
                        </h4>
                    </div>
                    <div class="flex gap-2">
                        <i data-feather="user" class="text-black"></i>
                        <h4 class="text-lg flex flex-col">
                            Travelers
                            <span class="text-[14px]">2 Adult, 0 Children</span>
                        </h4>
                    </div>
                    <button
                        class="flex items-center gap-2 px-4 py-2 bg-blue-900 text-md rounded-lg text-white hover:bg-blue-700 transition duration-150 ease-in-out cursor-pointer"
                    >
                        <i data-feather="search" class="w-5 h-5"></i>
                        Search
                    </button>
                </div>
            </section>
        </main>
    </section>
    <script>
        feather.replace();
    </script>
</body>
</html>
