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
                            <a href="/index/{{ $post['article_id'] }}">

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


<style>
    .relative img {
        object-fit: cover;
    }
</style>
