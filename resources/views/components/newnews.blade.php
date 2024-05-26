<div class=" flex flex-col w-[90%] md:w-full rounded-sm mx-auto">
    <div class="divider divider-info text-2xl p-9">Berita Terbaru</div>


    <div class="">
        <div class="md:grid  md:grid-cols-5 gap-2 ">
            @foreach ($posts as $post)
                <div class="card w-full rounded-lg shadow-gresen-200 shadow-lg md:text-center ">
                    <figure><a href="/index/berita/{{ $post->Url }}"> <img class="md:h-32 md:w-full"
                                src={{ $post->Image }} alt="Shoes" /></figure>
                    <div class="mt-2 ">

                        <p class="p-3 md:text-xs/[11px]">{{ Str::limit($post->Nama_Article, 90) }}</p></a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <script>
        // Panggil fungsi Alpine.js
        Alpine.start();
    </script>

    <div class="">
        <div class="md:flex flex-grow ">
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <div class="">
                    <div class="divider divider-success divider-start text-2xl mb-9 mt-9"> <button
                            class="bg-sred-500">Pilihan</button> </div>
                    <div class="carousel w-full h-96">
                        <div id="controls-carousel" class="relative w-full" data-carousel="static">
                            <div class="relative h-56 overflow-hidden rounded-none md:h-96">
                                @foreach ($posts as $post)
                                    <!-- Item -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <div class="relative w-full h-full">
                                            <img src="{{ $post->Image }}"
                                                class="absolute block w-full h-full object-cover"
                                                alt="{{ $post->Nama_Article }}">
                                            <div
                                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-4">
                                                <span
                                                    class="block text-xl font-semibold text-white md:text-2xl">{{ $post->Nama_Article }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>


            </div>

            <div class="w-full md:w-1/3 ml-2">
                <div class="divider divider-success divider-stsart text-2xl mb-9 mt-9">Populer</div>
                <img class="w-full h-96 mb-4"
                    src="https://lampung.rilis.id/image/Iklan/2024/04/19IMG-20240418-WA0017.jpg" alt="">
                <d </div>

            </div>

        </div>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                {{-- <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-12 lg:text-3xl">Collections</h2> --}}

                <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Men</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Business Causual</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1603344797033-f0f4f587ab60?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by engin akyurt"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Women</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Summer Season</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1552668693-d0738e00eca8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Men</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Streetwear</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1560269999-cef6ebd23ad3?auto=format&q=75&fit=crop&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Women</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Sale</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->
                </div>
            </div>
        </div>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <!-- text - start -->

                <!-- text - end -->

                <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
                    <!-- article - start -->
                    <a href="#"
                        class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
                        <img src={{ $post->Image }} loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent">
                        </div>

                        <div class="relative mt-auto p-4">
                            <span class="block text-sm text-gray-200">July 19, 2021</span>
                            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">New trends in
                                Tech</h2>

                            <span class="font-semibold text-indigo-300">Read more</span>
                        </div>
                    </a>
                    <!-- article - end -->

                    <!-- article - start -->
                    <a href="#"
                        class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent">
                        </div>

                        <div class="relative mt-auto p-4">
                            <span class="block text-sm text-gray-200">April 07, 2021</span>
                            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">Working with
                                legacy stacks</h2>

                            <span class="font-semibold text-indigo-300">Read more</span>
                        </div>
                    </a>
                    <!-- article - end -->

                    <!-- article - start -->
                    <a href="#"
                        class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent">
                        </div>

                        <div class="relative mt-auto p-4">
                            <span class="block text-sm text-gray-200">March 15, 2021</span>
                            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">10 best
                                smartphones for devs</h2>

                            <span class="font-semibold text-indigo-300">Read more</span>
                        </div>
                    </a>
                    <!-- article - end -->

                    <!-- article - start -->
                    <a href="#"
                        class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent">
                        </div>

                        <div class="relative mt-auto p-4">
                            <span class="block text-sm text-gray-200">January 27, 2021</span>
                            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">8 High
                                performance Notebooks</h2>

                            <span class="font-semibold text-indigo-300">Read more</span>
                        </div>
                    </a>
                    <!-- article - end -->
                </div>
            </div>
        </div>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <!-- text - start -->

                <!-- text - end -->

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- product - start -->
                    <div>
                        <a href="#" class="group relative block h-96 overflow-hidden rounded-t-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <span
                                class="absolute left-0 top-3 rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white">-50%</span>
                        </a>

                        <div class="flex items-start justify-between gap-2 rounded-b-lg bg-gray-100 p-4">
                            <div class="flex flex-col">
                                <a href="#"
                                    class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-lg">Fancy
                                    Outfit</a>
                                <span class="text-sm text-gray-500 lg:text-base">by Fancy Brand</span>
                            </div>

                            <div class="flex flex-col items-end">
                                <span class="font-bold text-gray-600 lg:text-lg">$19.99</span>
                                <span class="text-sm text-red-500 line-through">$39.99</span>
                            </div>
                        </div>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#" class="group relative block h-96 overflow-hidden rounded-t-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1523359346063-d879354c0ea5?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Nick Karvounis"
                                class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex items-start justify-between gap-2 rounded-b-lg bg-gray-100 p-4">
                            <div class="flex flex-col">
                                <a href="#"
                                    class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-lg">Cool
                                    Outfit</a>
                                <span class="text-sm text-gray-500 lg:text-base">by Cool Brand</span>
                            </div>

                            <div class="flex flex-col items-end">
                                <span class="font-bold text-gray-600 lg:text-lg">$29.99</span>
                            </div>
                        </div>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#" class="group relative block h-96 overflow-hidden rounded-t-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1548286978-f218023f8d18?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex items-start justify-between gap-2 rounded-b-lg bg-gray-100 p-4">
                            <div class="flex flex-col">
                                <a href="#"
                                    class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-lg">Nice
                                    Outfit</a>
                                <span class="text-sm text-gray-500 lg:text-base">by Nice Brand</span>
                            </div>

                            <div class="flex flex-col items-end">
                                <span class="font-bold text-gray-600 lg:text-lg">$35.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#" class="group relative block h-96 overflow-hidden rounded-t-lg bg-gray-100">
                            <img src="https://images.unsplash.com/photo-1566207274740-0f8cf6b7d5a5?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Vladimir Fedotov"
                                class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex items-start justify-between gap-2 rounded-b-lg bg-gray-100 p-4">
                            <div class="flex flex-col">
                                <a href="#"
                                    class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-lg">Lavish
                                    Outfit</a>
                                <span class="text-sm text-gray-500 lg:text-base">by Lavish Brand</span>
                            </div>

                            <div class="flex flex-col items-end">
                                <span class="font-bold text-gray-600 lg:text-lg">$49.99</span>
                            </div>
                        </div>
                    </div>
                    <!-- product - end -->
                </div>
            </div>
        </div>

        <section class="bg-white">
            <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

                <div class="flex flex-col items-center sm:px-5 md:flex-row">
                    <div class="w-full md:w-1/2">
                        <a href="#_" class="block">
                            <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                                src="https://cdn.devdojo.com/images/may2021/cupcakes.jpg">
                        </a>
                    </div>
                    <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                        <div
                            class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                            <div
                                class="bg-pink-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                                <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span>Featured</span>
                            </div>
                            <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a
                                    href="#_">Savory . Sweet Designs.</a></h1>
                            <p class="pt-2 text-sm font-medium">by <a href="#_" class="mr-1 underline">John
                                    Doe</a> · <span class="mx-1">April 23rd, 2021</span> · <span
                                    class="mx-1 text-gray-600">5 min. read</span></p>
                        </div>
                    </div>
                </div>

                <div class="flsex grid grid-cols-12 pb-10 sm:psx-5 md:gap-x-8 gap-y-16">
                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/fruit.jpg">
                        </a>
                        <div
                            class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Lifestyle</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">Creating a Future Worth
                                Living</a></h2>
                        <p class="text-sm text-gray-500">Learn the attributes you need to gain in order to build a
                            future and create a life that you are truly happy with.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mary Jane</a> ·
                            <span class="mx-1">April 17, 2021</span> · <span class="mx-1 text-gray-600">3 min.
                                read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/workout.jpg">
                        </a>
                        <div
                            class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Health</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Healther Version of Yourself</h2>
                        <p class="text-sm text-gray-500">If you want to excel in life and become a better version of
                            yourself, you'll need to upgrade your life.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Fred Jones</a> ·
                            <span class="mx-1">April 10, 2021</span> · <span class="mx-1 text-gray-600">3 min.
                                read</span>
                        </p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/food.jpg">
                        </a>
                        <div
                            class="bg-red-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Food</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Enjoy the Meals of the Kings</h2>
                        <p class="text-sm text-gray-500">Take the time to enjoy the life that you've created. It's
                            totally fine to live like kings and eat like royalty.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mike Roberts</a>
                            · <span class="mx-1">April 6, 2021</span> · <span class="mx-1 text-gray-600">3 min.
                                read</span></p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/books.jpg">
                        </a>
                        <div
                            class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Motivation</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Writing for Success</h2>
                        <p class="text-sm text-gray-500">Writing about your plans for success is extremely helpful for
                            yourself and it will allow you to share your story.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Tom Johnson</a>
                            · <span class="mx-1">May 25, 2021</span> · <span class="mx-1 text-gray-600">3 min.
                                read</span></p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/clock.jpg">
                        </a>
                        <div
                            class="bg-gray-800 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Business</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Simple Time Management</h2>
                        <p class="text-sm text-gray-500">Managing your time can make the difference between getting
                            ahead in life or staying exactly where you are.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Scott
                                Reedman</a> · <span class="mx-1">May 18, 2021</span> · <span
                                class="mx-1 text-gray-600">3 min. read</span></p>
                    </div>

                    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                        <a href="#_" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/lemons.jpg">
                        </a>
                        <div
                            class="bg-yellow-400 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Nutrition</span>
                        </div>
                        <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Fruits Life</h2>
                        <p class="text-sm text-gray-500">Take a moment and enjoy to enjoy the many fruits of life.
                            Relaxation and a healthy diet can go a long way.</p>
                        <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Jake
                                Caldwell</a> · <span class="mx-1">May 15, 2021</span> · <span
                                class="mx-1 text-gray-600">3 min. read</span></p>
                    </div>

                </div>
            </div>
        </section>
        {{-- <div class="divider divider-center divider-neutral">Berita Lain</div> --}}
        <x-categorycom/>
