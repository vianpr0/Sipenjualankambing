<div class=" flex flex-col w-[9A0%] mx-auto">
    <div class="divider divider-info text-2xl p-9">Berita Terbaru</div>


    <div class="">
        <div class="grid  md:grid-cols-5 gap-2">
            @foreach ($posts as $post)
                <div class="card 2-fit rounded-none ">
                    <figure><a href="/index/{{ $post['article_id'] }}"> <img class="h-32" src={{ $post->Image }}
                                alt="Shoes" /></figure>
                    <div class="p-2">

                        <p>{{ Str::limit($post->Nama_Article, 40) }}</p></a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div x-data="{ currentSlide: 0 }" class="relative">
        <div class="carousel carousel-end rounded-box overflow-hidden">
            <div x-ref="carouselItems" class="carousel-item flex space-x-4" style="transform: translateX(-calc(100% * currentSlide))">
                <!-- Card 1 -->
                <div class="card bg-white rounded-lg shadow-md">
                    <!-- Isi Card 1 -->
                </div>
                <!-- Card 2 -->
                <div class="card bg-white rounded-lg shadow-md">
                    <!-- Isi Card 2 -->
                </div>
                <!-- Card 3 -->
                <div class="card bg-white rounded-lg shadow-md">
                    <!-- Isi Card 3 -->
                </div>
                <!-- Card 4 -->
                <div class="card bg-white rounded-lg shadow-md">
                    <!-- Isi Card 4 -->
                </div>
                <!-- Card 5 -->
                <div class="card bg-white rounded-lg shadow-md">
                    <!-- Isi Card 5 -->
                </div>
            </div>
        </div>
        <button @click="currentSlide = Math.max(currentSlide - 1, 0)" class="btn btn-ghost absolute top-1/2 left-0 transform -translate-y-1/2">
            <!-- Tombol navigasi ke kiri -->
        </button>
        <button @click="currentSlide = Math.min(currentSlide + 1, 4)" class="btn btn-ghost absolute top-1/2 right-0 transform -translate-y-1/2">
            <!-- Tombol navigasi ke kanan -->
        </button>
    </div>
    
    <script>
        // Panggil fungsi Alpine.js
        Alpine.start();
    </script>
    
    <div class="">
        <div class="md:flex flex-grow ">
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <div class="">
                    <div class="divider divider-success divider-start text-2xl mb-9 mt-9">Pilihan</div>
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
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 6 10">
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
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-7">
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-10">

                        <div class="sm:col-span-6 lg:col-span-5s">
                            <a href="#">
                                <div class="h-56 bg-cover text-center overflow-hidden"
                                    style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                                    title="Woman holding a mug">
                                </div>
                            </a>
                            <div
                                class="mt-3 bg-white rounded-noneb lg:rounded-noneb-none lg:rounded-noner flex flex-col justify-between leading-normal">
                                <div class="lg:pl-16">
                                    <a href="#"
                                        class="text-xs text-indigo-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                        Fashion
                                    </a>
                                    <a href="#"
                                        class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">The
                                        perfect summer sweater that you can wear! </a>
                                    <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.
                                        Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem
                                        praesentium nihil.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- carausel --}}
                        <div class="sm:col-span-6 lg:col-span-4">
                            {{-- @foreach ($posts as $post) --}}

                            <div class="flex items-start mb-3 pb-3">
                                <a href="#" class="inline-block mr-3">
                                    <div class="w-20 h-20 bg-cover bg-center"
                                        style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&amp;m=1227967060&amp;s=612x612&amp;w=0&amp;h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                                    </div>
                                </a>
                                <div class="text-sm">
                                    <p class="text-gray-600 text-xs">Aug 18</p>
                                    <a href="#"
                                        class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Rerum excepturi natus
                                        numquam. Neque, numquam. </a>
                                </div>
                            </div>
                            <div class="flex items-start mb-3 pb-3">
                                <a href="#" class="inline-block mr-3">
                                    <div class="w-20 h-20 bg-cover bg-center"
                                        style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&amp;m=1227967060&amp;s=612x612&amp;w=0&amp;h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                                    </div>
                                </a>
                                <div class="text-sm">
                                    <p class="text-gray-600 text-xs">Aug 18</p>
                                    <a href="#"
                                        class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Rerum excepturi natus
                                        numquam. Neque, numquam. </a>
                                </div>
                            </div>
                            <div class="flex items-start mb-3 pb-3">
                                <a href="#" class="inline-block mr-3">
                                    <div class="w-20 h-20 bg-cover bg-center"
                                        style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&amp;m=1227967060&amp;s=612x612&amp;w=0&amp;h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                                    </div>
                                </a>
                                <div class="text-sm">
                                    <p class="text-gray-600 text-xs">Aug 18</p>
                                    <a href="#"
                                        class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Rerum excepturi natus
                                        numquam. Neque, numquam. </a>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        </div>
                        {{-- carausel --}}



                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/3 ml-2">
                <div class="divider divider-success divider-stsart text-2xl mb-9 mt-9">Populer</div>
                <img class="w-full h-96 mb-4"
                    src="https://lampung.rilis.id/image/Iklan/2024/04/19IMG-20240418-WA0017.jpg" alt="">
                <div class="tags flex flex-wrap gap-2">
                    <span class="tag bg-blue-500 text-white p-2 rounded">#Lampung</span>
                    <span class="tag bg-blue-500 text-white p-2 rounded">#Bandarlampung</span>
                    <span class="tag bg-blue-500 text-white p-2 rounded">#Polda Lampung</span>
                    <span class="tag bg-blue-500 text-white p-2 rounded">#Polresta Bandarlampung</span>
                    <span class="tag bg-blue-500 text-white p-2 rounded">#IIB Darmajaya</span>
                </div>
            </div>
        </div>
    </div>
