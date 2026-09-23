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
        style="background-image: url('{{ asset('images/clyde-he-TEND07a9xDg-unsplash.jpg') }}'); background-size: cover; background-position: center; height: 100vh; background-repeat: no-repeat;"
    >
        <header class="flex justify-center">
            <nav
                class="mt-5 flex gap-21 items-center text-black h-13 bg-white w-152 rounded-full"
            >
                <div class="flex gap-2 items-center">
                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        alt="logo"
                        class="w-8 h-8 ml-4 bg-amber-950"
                    />
                    <h1 class="font-semibold">Haven</h1>
                </div>
                <div
                    class="text-md flex flex-row gap-5 items-center mr-11 ml-auto"
                >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >Home</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >Usecases</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >Pricing</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >Carrers</a
                    >
                    <a
                        href="#"
                        class="hover:text-blue-500 transition duration-150 ease-in-out"
                        >Contact</a
                    >
                    <button
                        type="button"
                        class="px-6 py-2 bg-black text-md rounded-4xl text-white hover:bg-blue-700 transition duration-150 ease-in-out cursor-pointer"
                    >
                        Login
                    </button>
                </div>
            </nav>
        </header>
        <main>
            <section>
                <div class="flex flex-col items-center mt-35">
                    <div class="bg-white/60 rounded-3xl py-2 px-3 w-fit">
                        <h1 class="text-[13px]">We just raised 20M🚀</h1>
                    </div>
                    <h1 class="text-6xl font-semibold mt-5 text-white">
                        Design with ease.
                    </h1>
                    <p class="text-lg max-w-md text-center mt-4 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, optio porro. Quis, fugit!</p>
                    <div class="flex gap-3 mt-12">
                        <button
                            class="flex px-3 py-2 bg-white shadow-md shadow-gray-600 rounded-full items-center gap-2 hover:bg-blue-700 hover:text-white transition duration-150 ease-in-out cursor-pointer"
                        >
                            Get Started
                            <i data-feather="arrow-right" class="w-5 h-5"></i>
                        </button>
                        <button class="px-3 py-2 text-white cursor-pointer">Watch Demo</button>
                    </div>
                </div>
            </section>
        </main>
    </section>
    <script>
        feather.replace();
    </script>
</body>
</html>
