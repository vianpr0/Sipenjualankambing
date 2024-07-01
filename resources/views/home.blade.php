<x-layout :title="'RILIS ID - Lampung'">
    <x-breakingnews :posts="$breaking" :quote="$quote" />
    <div class="w-[90%] lg:w-full mx-auto">
        <x-newnews :posts="$posts" :beritaterbaru="$beritaterbaru" />

        {{-- Pilihan Section --}}
        <div class="">
            <div class="md:flex flex-grow ">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <div class="">
                        <div class="divider divider-success divider-start text-2xl mb-9 mt-9"> <button
                                class="bg-sred-500">Pilihan</button> </div>
                        <div id="default-carousel" class="relative w-full " data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-80 overflow-hidden  rounded-none md:h-96 lg:h-96">
                                @foreach ($pilihan as $article)
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <div class="relative w-full h-full">
                                            <img loading="lazy" src="{{ $article->Image }}"
                                                class="absolute block w-full h-full object-cover" alt="...">
                                            <div
                                                class="absolute bottom-0 left-0 w-full h-3/4 bg-gradient-to-t from-black to-transparent">
                                            </div>
                                            <div class="absolute bottom-10 left-8 text-white">
                                                <h3 class="text-sm md:text-base">
                                                    {{ date('l, d F Y', strtotime($article->published_at . ' Asia/Jakarta')) }}
                                                </h3>
                                                <a
                                                    href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}">
                                                    <span
                                                        class="block text-xl font-semibold md:text-2xl">{!! $article->Nama_Article !!}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider indicators -->
                            <div
                                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                @foreach ($pilihan as $index => $post)
                                    <button type="button" class="w-3 h-3 rounded-full"
                                        aria-current="{{ $loop->first ? 'true' : 'false' }}"
                                        aria-label="Slide {{ $index + 1 }}"
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="space-y-5 mt-5  rounded-md">
                        @foreach ($pilihan as $key => $item)
                            @if ($key < 3)
                                <a href="/{{ $item->section->Nama_Section }}/Berita/{{ $item->Url }}" class="block">
                                    <div
                                        class="flex items-center gap-4 bg-cyan-300 p-4 rounded-lg shsadow-md hover:shadow-lg transition-shadow">
                                        <img src="{{ $item->Image }}" class="w-32 h-32 roundesd-full object-cover"
                                            alt="{{ $item->Nama_Article }}">
                                        <div>
                                            <h5 class="text-sm text-gray-500">
                                                {{ \Carbon\Carbon::parse($item->published_at)->isoFormat('dddd, D MMMM Y') }}
                                            </h5>
                                            <p class="text-sm font-medium text-gray-900">{{ $item->Nama_Article }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach

                    </div>

                </div>


                <div class="w-full md:w-1/3 ml-2">
                    <div class="divider divider-success divider-stsart text-2xl mb-9 mt-9">Populer</div>
                    <ul>
                        @foreach ($toptag as $tag)
                            <a href="/index/Tag/{{ $tag->name }}"><li class="text-xl"> # {{ $tag->name }} </li></a>
                        @endforeach
                    </ul>
                    @if ($adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->Iklan_ID != null)
                        <a
                            href="@if ($adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->Backlink != null) {{ $adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->Backlink }} @endif">
                            <img  src="{{ $adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->ad->Url ?? ""  }}" alt="" class=" mt-3 d-flex w-100 object-cover object-center ">
                         
                        </a>
                    @else
                        </script>
                        <!-- R-ADS -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2032606674288851"
                            data-ad-slot="1098529020" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    @endif
                    {{-- {{ dd($adconfig)}} --}}
                   
                </div>

            </div>

        </div>
        {{-- Pilihan Section --}}



        {{-- Ragam --}}
        <section>
            <!-- Judul Ragam -->
            <div class="mt-5">
                <div class="mb-4">
                    <h2 class="text-2xl font-bold divider divider-start divider-success py-8">Ragam</h2>
                </div>
            </div>
            <!-- End Judul Ragam -->

            <!-- Content Ragam -->
            <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Kolom Kiri -->
                <div>
                    <a href="/{{ $ragam[0]->section->Nama_Section }}/Berita/{{ $ragam[0]->Url }}">
                        <div class="card">
                            <img src="{{ $ragam[0]->Image }}" class="w-full h-64 object-cover" alt="...">
                            <div class="p-4">
                                <h5 class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($ragam[0]->published_at)->isoFormat('dddd, D MMMM Y') }}
                                </h5>
                                <p class="text-gray-900"><span class="font-bold">ragam:
                                    </span>{{ $ragam[0]->Nama_Article }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Kolom Kiri -->

                <!-- 2 Kolom Kanan -->
                <div class="space-y-4">
                    @for ($i = 1; $i < 3; $i++)
                        <a href="/{{ $ragam[$i]->section->Nama_Section }}/Berita/{{ $ragam[$i]->Url }}">
                            <div class="flex space-x-4 mb-4">
                                <img src="{{ $ragam[$i]->Image }}" class="w-1/3 h-32 object-cover" alt="...">
                                <div class="flex flex-col justify-between">
                                    <h3 class="text-lg font-bold">
                                        {{ \Carbon\Carbon::parse($ragam[$i]->published_at)->isoFormat('dddd, D MMMM Y') }}
                                    </h3>
                                    <h5 class="text-gray-900"><span class="font-bold">ragam:
                                        </span>{{ $ragam[$i]->Nama_Article }}</h5>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
                <!-- End 2 Kolom Kanan -->
            </div>

            <div class="text-end mt-4">
                <a class="p-3 rounded-md bg-teal-800  text-white hover:text-gray-300" href="/index/{{ $ragam[0]->section->Nama_Section }}" role="button">
                    
                     Selengkapnya
                </a>
            </div>
            <!-- End Content Ragam -->
        </section>



        {{-- Ragam --}}


        {{-- BISNIS --}}
        <section>
            <!-- Judul Bisnis -->
            <div class="mt-5">
                <div class="mb-4">
                    <h2 class="text-2xl font-bold divider divider-start divider-success py-8">Bisnis</h2>
                </div>
            </div>
            <!-- End Judul Bisnis -->

            <!-- Content Bisnis -->
            <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Kolom Kiri -->
                <div>
                    <a href="/{{ $bisnis[0]->section->Nama_Section }}/Berita/{{ $bisnis[0]->Url }}">
                        <div class="card">
                            <img src="{{ $bisnis[0]->Image }}" class="w-full h-64 object-cover" alt="...">
                            <div class="p-4">
                                <h5 class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($bisnis[0]->published_at)->isoFormat('dddd, D MMMM Y') }}
                                </h5>
                                <p class="text-gray-900"><span class="font-bold">bisnis:
                                    </span>{{ $bisnis[0]->Nama_Article }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Kolom Kiri -->

                <!-- 2 Kolom Kanan -->
                <div class="space-y-4">
                    @for ($i = 1; $i < 3; $i++)
                        <a href="/{{ $bisnis[$i]->section->Nama_Section }}/Berita/{{ $bisnis[$i]->Url }}">
                            <div class="flex space-x-4 mb-4">
                                <img src="{{ $bisnis[$i]->Image }}" class="w-1/3 h-32 object-cover" alt="...">
                                <div class="flex flex-col justify-between">
                                    <h3 class="text-lg font-bold">
                                        {{ \Carbon\Carbon::parse($bisnis[$i]->published_at)->isoFormat('dddd, D MMMM Y') }}
                                    </h3>
                                    <h5 class="text-gray-900"><span class="font-bold">bisnis:
                                        </span>{{ $bisnis[$i]->Nama_Article }}</h5>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
                <!-- End 2 Kolom Kanan -->
            </div>

            <div class="text-end mt-4">
                <a class="p-3 rounded-md bg-teal-800" href="/index/{{ $bisnis[0]->section->Nama_Section }}" role="button">
                    <div class="inline-block px-s4 py-s2 bg-teal-8s00 text-white rounded-md">
                        <span>Selengkapnya</span>
                    </div>
                </a>
            </div>
            <!-- End Content Bisnis -->
        </section>
        {{-- BISNIS --}}

        {{-- RILIS TV --}}
        <section class="hiddsen md:block">
            <h4 class="divider divider-start divider-success text-2xl my-6">RILIS TV</h4>
            <div class="mt-2 mb-5">
                <div id="videoslide" class="relative">
                    <div class="carousel-inner">
                        @foreach ($video as $video)
                            <div class="carousel-itema {{ $loop->index == 0 ? 'block' : 'hidden' }}">
                                <div class="flex flex-col mt-3 mb-1">
                                    <iframe class="w-full h-96"
                                        src="https://www.youtube.com/embed/{{ $video->Link }}?autoplay=0&mute=1"
                                        allowfullscreen></iframe>
                                    <a href="https://www.youtube.com/watch?v={{ $video->Link }}" class="mt-2">
                                        <h3 class="text-xl font-bold text-gray-900">{{ $video->Nama_Video }}</h3>
                                        <h5 class="text-lg text-gray-700">
                                            {{ \Carbon\Carbon::parse($video->published_at)->isoFormat('dddd, DD/MM/Y hh:mm') }}
                                        </h5>
                                        @php
                                            $string = substr(
                                                $video->Isi_Article,
                                                strpos($video->Isi_Article, '<p'),
                                                strpos($video->Isi_Article, '</p>') + 4,
                                            );
                                        @endphp
                                        <p class="mt-2 text-gray-600">{!! html_entity_decode($string) !!}</p>
                                        {{-- <h4 class="mt-2 text-gray-600">{!! html_entity_decode(Str::limit($string, 150)) !!} </h4> --}}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button id="prevr"
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </button>
                    <button id="nextr"
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let currentIndex = 0;
                const items = document.querySelectorAll('.carousel-itema');
                const totalItems = items.length;

                document.getElementById('nextr').addEventListener('click', function() {
                    items[currentIndex].classList.add('hidden');
                    currentIndex = (currentIndex + 1) % totalItems;
                    items[currentIndex].classList.remove('hidden');
                });

                document.getElementById('prevr').addEventListener('click', function() {
                    items[currentIndex].classList.add('hidden');
                    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                    items[currentIndex].classList.remove('hidden');
                });
            });
        </script>


        {{-- <section class="md:hidden">
    <div id="videoslidemobile" class="carousel slide rilisidTVmobile" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner" role="listbox">
            @foreach ($video as $video)
                <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                    <div class="mt-3 mb-1">
                        <iframe class="w-full h-72" src="https://www.youtube.com/embed/{{$video->Link}}?autoplay=0&mute=1" allowfullscreen></iframe>
                        <a href="https://www.youtube.com/watch?v={{$video->Link}}">
                            <h3 class="mt-2 text-xl font-bold text-gray-900">{{$video->Nama_Video}}</h3>
                            <h5 class="text-lg text-gray-700">{{\Carbon\Carbon::parse($video->published_at)->isoFormat('dddd, DD/MM/Y hh:mm')}}</h5>
                            @php
                                $string = substr($video->Isi_Article, strpos($video->Isi_Article, "<p"), strpos($video->Isi_Article, "</p>") + 4);
                            @endphp
                            <p class="mt-2 text-gray-600">{!! html_entity_decode($string) !!}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#videoslidemobile" data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="text-gray-800" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#videoslidemobile" data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="text-gray-800" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
    </div>
</section> --}}

        {{-- RILIS TV --}}






        {{-- Rilis Network Section --}}

        <div class="lg:grid grid-cols-3 gap-4 mt-6">
            <div class="col-span-2">
                <h4 class="divider divider-start divider-success text-2xl">RILIS NETWORK</h4>
                <!-- Content Rilis Network -->
                <div class="flex flex-col space-y-3 mt-3 mb-5">
                    <!-- First row -->
                    <div class="flex space-x-5">

                        @foreach ($rilisnetwork as $data)
                            @if ($loop->index == 0)
                                <div class="w-7/12 relative bg-red-500">
                                    <a href="/{{ $data->section->Nama_Section }}/Berita/{{ $data->Url }}"
                                        class="text-white">
                                        <img src="{{ $data->Image }}" class="w-full h-52 object-cover"
                                            alt="...">
                                        <div
                                            class="absolute bottom-0 left-0 w-full h-3/4 bg-gradient-to-t from-black to-transparent">
                                        </div>
                                        <div class="absolute bottom-2 left-4 z-10 bg-blasck bg-opacity-50 p-2 text-sm">
                                            {{ $data->Nama_Article }}</div>
                                    </a>
                                </div>
                            @else
                                <div class="w-5/12 relative bg-green-500">
                                    <a href="/{{ $data->section->Nama_Section }}/Berita/{{ $data->Url }}"
                                        class="text-white">
                                        <img src="{{ $data->Image }}" class="w-full h-52 object-cover"
                                            alt="...">
                                        <div
                                            class="absolute bottom-0 left-0 w-full h-3/4 bg-gradient-to-t from-black to-transparent">
                                        </div>
                                        <div class="absolute bottom-2 left-4 z-10 bg-blasck bg-opacity-50 p-2 text-sm">
                                            {{ $data->Nama_Article }}</div>
                                    </a>
                                </div>
                            @endif
                            @if ($loop->index > 0)
                            @break
                        @endif
                    @endforeach
                </div>

                <!-- Second row -->
                <div class="flex space-x-5">
                    @foreach ($rilisnetwork as $data)
                        @if ($loop->index < 2)
                            @continue
                        @endif

                        @if ($loop->index == 2)
                            <div class="w-5/12 relative">
                            @else
                                <div class="w-7/12 relative">
                        @endif
                        <a href="/{{ $data->section->Nama_Section }}/Berita/{{ $data->Url }}"
                            class="text-white">
                            <img src="{{ $data->Image }}" class="w-full h-52 object-cover" alt="...">
                            <div
                                class="absolute bottom-0 left-0 w-full h-3/4 bg-gradient-to-t from-black to-transparent">
                            </div>
                            <div class="absolute bottom-2 left-4 z-10 bg-blasck bg-opacity-50 p-2 text-sm">
                                {{ $data->Nama_Article }}</div>
                        </a>
                </div>
                @if ($loop->index > 2)
                @break
            @endif
            @endforeach
        </div>
    </div>
    <!-- End Content Rilis Network -->

</div>
<!-- Kolom Kanan: Perspektif -->
<div class="xl:w-full lg:w-full p-4 bg-cyan-300 rounded-lg shadow-md">

    <!-- Judul Perspektif -->
    <div class="mb-4">
        <h2 class="text-2xl font-bold">Perspektif</h2>
    </div>
    <!-- End Perspektif -->

    <!-- Content Perspektif -->
    <div class="space-y-5">
        @foreach ($perspektif as $key => $item)
            @if ($key < 3)
                <a href="/{{ $item->section->Nama_Section }}/Berita/{{ $item->Url }}" class="block">
                    <div
                        class="flex items-center gap-4 bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <img src="{{ $item->Image }}" class="w-10 h-10 rounded-full object-cover"
                            alt="{{ $item->Nama_Article }}">
                        <div>
                            <h5 class="text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($item->published_at)->isoFormat('dddd, D MMMM Y') }}
                            </h5>
                            <p class="text-sm font-medium text-gray-900">{{ $item->Nama_Article }}</p>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
    <!-- End Content Perspektif -->

</div>
<!-- End Kolom Kanan: Perspektif -->

</div>
{{-- Rilis Network Section --}}


{{-- Infografis section --}}

<div class="mt-7" x-data="carousel()">
<h4 class="divider divider-start divider-success text-2xl">INFOGRAFIS</h4>
<div class="relative overflow-hidden">
    <div x-ref="carousel" class="flex transition-transform duration-300 ease-out">
        <!-- image - start -->
        @foreach ($infografis as $if)
            <img class="w-full lg:w-1/3" loading="lazy" src="{{ $if->Image }}" alt="">
        @endforeach
        <!-- image - end -->

    </div>
    <button @click="prev()"
        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">Prev</button>
    <button @click="next()"
        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">Next</button>
</div>
</div>

<script>
    function carousel() {
        return {
            currentIndex: 0,
            itemsPerSlide: 1,
            get totalItems() {
                return this.$refs.carousel.children.length;
            },
            get offset() {
                return -(this.currentIndex * 100) / this.itemsPerSlide;
            },
            updateCarousel() {
                this.itemsPerSlide = window.innerWidth >= 1024 ? 3 : 1;
                this.$refs.carousel.style.transform = `translateX(${this.offset}%)`;
            },
            prev() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                    this.updateCarousel();
                }
            },
            next() {
                if (this.currentIndex < Math.ceil(this.totalItems / this.itemsPerSlide) - 1) {
                    this.currentIndex++;
                    this.updateCarousel();
                }
            },
            init() {
                window.addEventListener('resize', () => this.updateCarousel());
                this.updateCarousel();
            }
        }
    }
</script>

{{-- Infografis section --}}



{{-- INSPIRASI - HOSTORIA --}}




<div class="lg:grid grid-cols-3 gap-4 mt-12">
<div class="col-spasn-2 ">
    <h4 class="divider divider-start divider-success text-2xl">INSPIRASI</h4>
    <div class="mt-2 mb-5">
        <div id="videoslide" class="relative">
            <div class="carousel-inner">
                @foreach ($inspirasi as $data)
                    <div class="carousel-itemh {{ $loop->index == 0 ? 'block' : 'hidden' }}">
                        <a href="/{{ $data->section->Nama_Section }}/Berita/{{ $data->Url }}">
                            <div class="card bg-yelslow-900 flex flex-col justify-between">
                                <div class="card-header text-center bg-rsd-700">
                                    <img src="{{ $data->Image }}"
                                        class="rounded-full w-32 h-32 object-cover mx-auto" alt="...">
                                </div>
                                <div class="card-body text-white bg-sky-900 mt-5">
                                    <h5 class="card-title text-center text-lg font-bold mt-3">
                                        {{ $data->Nama_Article }}</h5>
                                    <p class="card-text text-sm text-center mt-2">
                                        {{ strip_tags($data->GagasanUtama) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button id="prevh"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </button>
            <button id="nexth"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>
    </div>
    @if ($adconfig->where('Posisi', 'Dibawah Inspirasi')->first()->Iklan_ID != null)
        <a
            href="@if ($adconfig->where('Posisi', 'Dibawah Inspirasi')->first()->Backlink != null) {{ $adconfig->where('Posisi', 'Dibawah Inspirasi')->first()->Backlink }} @endif">
            <img class=" mt-3 pe-5 " style="width:100%; object-fit: fill;"
                src="{{ $adconfig->where('Posisi', 'Dibawah Inspirasi')->first() }}" alt="">
        </a>
    @else
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
            crossorigin="anonymous"></script>
        <!-- R-ADS -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2032606674288851"
            data-ad-slot="1098529020" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    @endif
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-itemh');
        const totalItems = items.length;

        document.getElementById('nexth').addEventListener('click', function() {
            items[currentIndex].classList.add('hidden');
            currentIndex = (currentIndex + 1) % totalItems;
            items[currentIndex].classList.remove('hidden');
        });

        document.getElementById('prevh').addEventListener('click', function() {
            items[currentIndex].classList.add('hidden');
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            items[currentIndex].classList.remove('hidden');
        });
    });
</script>

<div class="col-span-2">
    <h4 class="divider divider-success text-2xl">HISTORIA</h4>
    @foreach ($ragam as $index => $item)
        @if ($index < 5)
            <div class="bg-white ">
                <div class="mx-auto max-w-screen-2xl py-2">
                    <div class="flex flex-col overflow-hidden rounded-lg bg-grasy-200 sm:flex-row lg:h-32">
                        <!-- image - start -->
                        <div
                            class="order-first h-48 w-full bg-gray-300 sm:order-none sm:h-auto sm:w-1/2 lg:w-2/5">
                            <a href="/{{ $item->section->Nama_Section }}/Berita/{{ $item->Url }}">
                                <img src="{{ $item->Image }}" alt="{{ $item->Nama_Article }}"
                                    loading="lazy" alt="Photo by Andras Vas"
                                    class="h-full w-full object-cover object-center" />
                            </a>
                        </div>
                        <!-- image - end -->

                        <!-- content - start -->
                        <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-3/5">
                            <h2 class="mb-s4 text-xl font-bold text-gray-800  lg:text-xl">
                                {{ \Carbon\Carbon::parse($item->published_at)->isoFormat('dddd, D MMMM Y') }}
                            </h2>

                            <a href="/{{ $item->section->Nama_Section }}/Berita/{{ $item->Url }}">
                                <h2 class="mb-s8 max-w-md text-gray-600">{{ $item->Nama_Article }}</h2>
                            </a>


                        </div>
                        <!-- content - end -->
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <!-- End Content Historia -->

    <!-- Button Selengkapnya -->
    <div class="text-end mt-8 prs-10">
        <a class="p-3 rounded-md bg-teal-800  text-white hover:text-gray-300"
            href="/Index/{{ $item->section->Nama_Section }}" role="button">
Selengkapnya
        
        </a>
    </div>
</div>
</div>
{{-- INSPIRASI - HOSTORIA --}}

{{-- Budaya --}}

<div class="lg:grid grid-cols-3 gap-4 mt-6">

<div class="col-span-2">
    <h4 class="divider divider-start divider-success text-2xl">BUDAYA</h4>
    @foreach ($budaya as $index => $item)
        @if ($index < 5)
            <div class="bg-white ">
                <div class="mx-auto max-w-screen-2xl py-2">
                    <div class="flex flex-col overflow-hidden rounded-lg bg-grasy-200 sm:flex-row lg:h-32">
                        <!-- image - start -->
                        <div
                            class="order-first h-48 w-full bg-gray-300 sm:order-none sm:h-auto sm:w-1/2 lg:w-2/5">
                            <a href="/{{ $item->section->Nama_Section }}/Berita/{{ $item->Url }}">
                                <img src="{{ $item->Image }}" alt="{{ $item->Nama_Article }}"
                                    loading="lazy" alt="Photo by Andras Vas"
                                    class="h-full w-full object-cover object-center" />
                            </a>
                        </div>
                        <!-- image - end -->

                        <!-- content - start -->
                        <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-3/5">
                            <h2 class="mb-s4 text-xl font-bold text-gray-800  lg:text-xl">
                                {{ \Carbon\Carbon::parse($item->published_at)->isoFormat('dddd, D MMMM Y') }}
                            </h2>

                            <a href="/{{ $item->section->Nama_Section }}/Berita/{{ $item->Url }}">
                                <h2 class="mb-s8 max-w-md text-gray-600">{{ $item->Nama_Article }}</h2>
                            </a>


                        </div>
                        <!-- content - end -->
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <!-- End Content Historia -->

    <!-- Button Selengkapnya -->
    <div class="text-end mt-6 pr-10">
        <a class="p-3 rounded-md bg-teal-800  text-white hover:text-gray-300"
            href="/Index/{{ $item->section->Nama_Section }}" role="button">
          
            Selengkapnya
     
        </a>
    </div>
</div>

<div class="col-span-s2">
    <h4 class="divider divider-success divider-success text-2xl">INSPIRASI</h4>
    <img src="https://lampung.rilis.id/image/Iklan/2024/05/22IMG-20240522-WA0064.jpg" alt="">
</div>
</div>



<x-beritalain :pilihan="$pilihan" />
</div>
</x-layout>
