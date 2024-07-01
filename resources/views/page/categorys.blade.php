<x-app>
    <div class=" justify-betweesn items-center bg-sky-800 hidden md:flex">
        <div class="flex justify-center w-[70%] mx-auto items-center">

            <a href="/">
                <img class="w-24 shadow-sm" src="{{ asset('img/rilis-logo.png') }}" alt="">
            </a>
            <x-categorycom />
        </div>
    </div>
    {{-- <img src="{{ asset('img/imagea.png') }}" alt=""> --}}

    <div class="relative bg-sky-900 h-64 flex justify-center items-center rounded-sm"
        style="background-image: url({{ asset('img/gedungMpr.jpg') }}); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-cyan-800 opacity-60 rounded-sm"></div>
        <div class="text-center relative z-10">
            <h1 class="text-4xl lg:text-8xl font-bold text-white">{{ $section->Nama_Section }}</h1>
            <div class="flex gap-4 mt-5 justify-center">
                @foreach ($section->subsection as $ff)
                    <a href="#{{ $ff->Nama_SubSection }}">

                        <h3 class="text-xl font-bold text-white">{{ $ff->Nama_SubSection }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>




    <div class="md:w-[70%] mx-auto md:grid md:grid-cols-3 lg:grid lg:grid-cols-3">
        <div class="col-span-2">
            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-1 xl:grid-cols-1 xl:gap-8">
                        @foreach ($articles as $article)
                            <div class="flex flex-col items-center overflow-hidden rounded-lg border md:flex-row">
                                <a href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}"
                                    class="group relative block h-48 w-full shrink-0 self-start overflow-hidden bg-gray-100 md:h-full md:w-32 lg:w-48">
                                    <img src={{ $article->Image }} loading="lazy" alt="{{ $article->Nama_Article }}"
                                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                </a>
                                <div class="flex flex-col gap-2 p-4 lg:p-6">
                                    <span class="text-sm text-gray-400">{{ $section->Nama_Section }}
                                        {{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('j F Y H:i') }}
                                        WIB</span>
                                    <h2 class="text-xl font-bold text-gray-800">
                                        <a href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}"
                                            class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $article->Nama_Article }}</a>
                                    </h2>
                                    <p class="text-gray-500">{!! Str::limit($article->Isi_Article, 100) !!}</p>
                                    <div>
                                        <a href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}"
                                            class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="flex justify-center my-8">
                        <a href="/index/{{ $section->Nama_Section }}"
                            class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out">Selengkapnya</a>
                    </div>
                    {{-- <div class="mt-6"> --}}
                    {{-- {{ $articles->links() }} <!-- This will render pagination links --> --}}
                    {{-- {{ dd($section->subsection->articles) }} <!-- This will render pagination links --> --}}
                    {{-- </div> --}}
                </div>
            </div>

            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                    @foreach ($section->subsection as $subsection)
                        <div class="mb-8">
                            <h2 id="{{ $subsection->Nama_SubSection }}" class="text-2xl font-bold text-gray-800 mb-4">
                                {{ $subsection->Nama_SubSection }}</h2>
                            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-1 xl:grid-cols-1 xl:gap-8">
                                @foreach ($subsection->articles->take(5) as $article)
                                    <div
                                        class="flex flex-col items-center overflow-hidden rounded-lg border md:flex-row">
                                        <a href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}"
                                            class="group relative block h-48 w-full shrink-0 self-start overflow-hidden bg-gray-100 md:h-full md:w-32 lg:w-48">
                                            <img src="{{ $article->Image }}" loading="lazy"
                                                alt="{{ $article->Nama_Article }}"
                                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                        </a>
                                        <div class="flex flex-col gap-2 p-4 lg:p-6">
                                            <span class="text-sm text-gray-400">{{ $section->Nama_Section }}
                                                {{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('j F Y H:i') }}
                                                WIB</span>
                                            <h2 class="text-xl font-bold text-gray-800">
                                                <a href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}"
                                                    class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $article->Nama_Article }}</a>
                                            </h2>
                                            <p class="text-gray-500">{!! Str::limit($article->Isi_Article, 100) !!}</p>
                                            <div>
                                                <a href="/{{ $article->section->Nama_Section }}/Berita/{{ $article->Url }}"
                                                    class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read
                                                    more</a>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach

                            </div>
                            <div class="flex justify-center my-8">
                                <a href="/index/{{ $section->Nama_Section }}"
                                    class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-md hover:bg-indigo-700 transition duration-300 ease-in-out">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="sa">
            <div class="w-[90%] mx-auto md:ml-2">
                <div class="divider divider-success divider-stsart text-2xl mb-9 mt-9">Tag Populer</div>
                <ul>
                    @foreach ($toptag as $tag)
                    <a href="/index/Tag/{{ $tag->name }}"><li class="text-lg flex"> # {{ $tag->name }} </li></a>
                        {{-- <li class="text-lg flex"> #{{ $tag->name }} </li> --}}
                    @endforeach
                </ul>
                @if ($adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->Iklan_ID != null)
                    <a
                        href="@if ($adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->Backlink != null) {{ $adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->Backlink }} @endif">
                        <img src="{{ $adconfig->where('Posisi', 'Dibawah Tag Populer')->first()->ad->Url ?? '' }}"
                            alt="" class=" mt-3 d-flex w-100 object-cover object-center ">

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


    <div class="md:w-[90%] mx-auto">
        <x-footer />
    </div>
</x-app>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var scrollLinks = document.querySelectorAll('a[href^="#"]');

        for (var i = 0; i < scrollLinks.length; i++) {
            scrollLinks[i].addEventListener('click', function(event) {
                event.preventDefault();

                var targetId = this.getAttribute('href').substring(1);
                var targetElement = document.getElementById(targetId);

                if (targetElement) {
                    var targetOffset = targetElement.offsetTop;

                    window.scrollTo({
                        top: targetOffset,
                        behavior: 'smooth' // This enables smooth scrolling
                    });
                }
            });
        }
    });
</script>
