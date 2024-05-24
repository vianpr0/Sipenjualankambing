<div class="w-[8S8%] mx-auto md:flex mt-5">
    <div class="flex flex-grow ">


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-80 overflow-hidden rounded-lg md:h-96 lg:h-96">
                @foreach ($posts as $post)
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="relative w-full h-full">
                            <img src="{{ $post->Image }}" class="absolute block w-full h-full object-cover"
                                alt="...">
                            <div
                                class="absolute bottom-0 left-0 w-full h-3/4 bg-gradient-to-t from-black to-transparent">
                            </div>
                            <a href="/index/berita/{{ $post['Url'] }}">

                                <span
                                    class="absolute bottom-10 left-10 text-xl font-semibold text-white md:text-2xl">{!! $post->Nama_Article !!}</span>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach ($posts as $index => $post)
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"
                        data-carousel-slide-to="{{ $index }}"></button>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>



    </div>
    <div class="w-auto">
        <img class="md:h-96 mt-4 md:mt-0 lg:mt-0  h-[90%] w-[90%] "
            src="https://lampung.rilis.id/image/2024/02/12BDm9Jza_quoterilislampung2024farizalsekprovlampung2024.jpg"
            alt="">
    </div>
</div>
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
         </div>
      <!-- text - end -->

      <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
        <!-- article - start -->
        <a href="#" class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
          <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent"></div>

          <div class="relative mt-auto p-4">
            <span class="block text-sm text-gray-200">July 19, 2021</span>
            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">New trends in Tech</h2>

            <span class="font-semibold text-indigo-300">Read more</span>
          </div>
        </a>
        <!-- article - end -->

        <!-- article - start -->
        <a href="#" class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
          <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent"></div>

          <div class="relative mt-auto p-4">
            <span class="block text-sm text-gray-200">April 07, 2021</span>
            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">Working with legacy stacks</h2>

            <span class="font-semibold text-indigo-300">Read more</span>
          </div>
        </a>
        <!-- article - end -->

        <!-- article - start -->
        <a href="#" class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
          <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent"></div>

          <div class="relative mt-auto p-4">
            <span class="block text-sm text-gray-200">March 15, 2021</span>
            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">10 best smartphones for devs</h2>

            <span class="font-semibold text-indigo-300">Read more</span>
          </div>
        </a>
        <!-- article - end -->

        <!-- article - start -->
        <a href="#" class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent"></div>

          <div class="relative mt-auto p-4">
            <span class="block text-sm text-gray-200">January 27, 2021</span>
            <h2 class="mb-2 text-xl font-semibold text-white transition duration-100">8 High performance Notebooks</h2>

            <span class="font-semibold text-indigo-300">Read more</span>
          </div>
        </a>
        <!-- article - end -->
      </div>
    </div>
  </div>

<style>
    .relative img {
        object-fit: cover;
    }
</style>
