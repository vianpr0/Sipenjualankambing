@php
    $section_place = '';
    if ($post->subsection_id == 0) {
        $section_place = $post->section->Nama_Section;
    } else {
        $section_place = $post->subSection->Nama_SubSection;
    }
@endphp


<x-layout :title="$post->Nama_Article">
    <div class="md:flex">
        <div class="md:w-[70%] w-full flex bgs-blue-900 mx-auto p-2 shadow mr-8">
            <main class="pt-8 pb-16 lg:pt-1s6 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                <div class="flex justify-between px-4 mx-auto max-w-screen-xl">

                    {{-- RILIS ADS --}}
                    @if ($popUp->where('Posisi', 'Pop Up')->first()->Iklan_ID != null && $paragraphs->currentPage() == 1)
                        <div id="default-modal" aria-hidden="true" data-modal-target="default-modal"
                            class="block fixed top-0 right-0 left-0 z-50 justify-center items-center w-fusll md:inset-0 h-creen max-h-96">
                            <div class="relative p-4 lg:w-1/3 lg:max-w-1/3 h-1/2 max-h-full mx-auto justify-center">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            ADS
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="default-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <a
                                        href="@if ($popUp->where('Posisi', 'Pop Up')->first()->Backlink != null) {{ $popUp->where('Posisi', 'Pop Up')->first()->Backlink }} @endif">
                                        <img src="{{ $popUp->where('Posisi', 'Pop Up')->first()->ad->Url ?? "" }}"
                                            class="w-full h-screen" alt="ads">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- END ADS --}}

                    <article class="px- mx-auto max-w-screen-xl">
                        <header class="mb-4 lg:mb-6 not-format">
                            <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white"
                                style="font-family: PoppinsBold">
                                {{ $post->Nama_Article }}
                            </h1>
                            <address class="items-center mb-6 not-italic ">
                                <div
                                    class="inline-flex items-center bg-resd-500 mr-3 text-sm text-gray-900 dark:text-white">
                                    <img class="mr-4 w-10 h-10 rounded-full" src="{{ $post->user->Foto }}"
                                        alt="{{ $post->user->name }}">
                                    <div>
                                        <h4 class="uppercase text-lg font-bold"> {{ $post->user->name }}</h4>
                                    </div>
                                </div>
                                <h4 class="text-base text-gray-500 dark:text-gray-400">
                                    {{ $post->Kota }}
                                </h4>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-sm/[10px]"> {{ $published }} WIB</span>
                                    {{-- <div class="das">
                                            {{ dd($post->section->subsection) }}
                                            <a href="/Kategori/{{ $post->section->Nama_Section }}"><span
                                                    class="font-bold text-sm/[10px]">{{ $post->section->Nama_Section }}
                                                </span></a>| Rilis ID

                                        </div> --}}
                                    <div class="das">
                                        @if ($post->subsection)
                                            <a href="/Kategori/{{ $post->section->Nama_Section }}">
                                                <span
                                                    class="font-bold text-sm/[10px]">{{ $post->subsection->Nama_SubSection }}</span>
                                            </a>
                                        @else
                                            <a href="/Kategori/{{ $post->section->Nama_Section }}">
                                                <span
                                                    class="font-bold text-sm/[10px]">{{ $post->section->Nama_Section }}</span>
                                            </a>
                                        @endif
                                        | Rilis ID
                                    </div>

                                </div>
                            </address>
                        </header>
                        <div class="bg-red-5s00 items-center justify-center text-center  ">
                            <img class="w-full" src="{{ $post->Image }}" alt="{{ $post->ImageCaption }}">
                            <em class="italic w-[40%]"> <span
                                    class=" text-gray-500 text-sm bgsred-400">{{ $post->ImageCaption }}</span>
                            </em>
                        </div>
                        <div class="mt-4" style="font-family: PoppinsLight">
                            @foreach ($paragraphs as $paragraph)
                                {!! $paragraph !!}</p> <!-- Perhatikan tanda penutup </p> -->
                            @endforeach
                        </div>

                        <!-- Pagination links -->
                        <div class="mt-6 justify-end flex">
                            <div class="join">
                                @if ($paragraphs->lastPage() > 1)
                                    @for ($i = 1; $i <= $paragraphs->lastPage(); $i++)
                                        <button
                                            class="join-item btn btn-info {{ $i == $paragraphs->currentPage() ? 'btn-active' : '' }}"
                                            onclick="window.location.href='{{ $paragraphs->url($i) }}'">{{ $i }}</button>
                                    @endfor
                                @endif
                            </div>
                        </div>

                        <div class="mt-7">
                            <div class="divider divider-neutral"></div>
                            <span class="block font-bold uppercase text-blue-900">Editor :
                                {{ $post->editor->name }}</span>
                            <div class="flex flex-wrap mt-6 gap-4 ">
                                @foreach ($tags as $tag)
                                    <span class=" text-white   ">
                                        <span
                                            class="text-sm/[14px] p-2 bg-blue-900 rounded-lg mrs-1">{{ $tag }}</span>
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <x-sosialmedia :post="$post" />

                    </article>
                </div>
                <section class="py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <div>
                        @if ($adconfig->where('Posisi', 'Dibawah Artikel')->first()->Iklan_ID != null)
                          <img class="w-full h-auto object-cover" src="{{ $adconfig->where('Posisi', 'Dibawah Artikel')->first()->ad->Url }}" alt="">
                        @else
                          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851" crossorigin="anonymous"></script>
                          <ins class="adsbygoogle w-full h-12" style="display:inline-block" data-ad-client="ca-pub-2032606674288851" data-ad-slot="3403761188"></ins>
                          <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                        @endif
                      </div>
                      <div>
                        @if ($adconfig->where('Posisi', 'Dibawah Artikel 2')->first()->Iklan_ID != null)
                          <img class="w-full h-auto object-cover" src="{{ $adconfig->where('Posisi', 'Dibawah Artikel 2')->first()->ad->Url }}" alt="">
                        @else
                          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851" crossorigin="anonymous"></script>
                          <ins class="adsbygoogle w-full h-12" style="display:inline-block" data-ad-client="ca-pub-2032606674288851" data-ad-slot="3403761188"></ins>
                          <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                        @endif
                      </div>
                    </div>
                  </section>
            </main>
        </div>

        <div class="md:w-[29%] w-[90%] mx-auto  bg-whilte pt-8 shadow">
            <div class="">
                @php
                $adAbovePopular = $adconfig->where('Posisi', 'Diatas Populer')->first();
            @endphp

            @if ($adAbovePopular && $adAbovePopular->Iklan_ID)
                <a href="{{ $adAbovePopular->Backlink ?? '#' }}">
                    <img class="w-full mb-3 " src="{{ $adAbovePopular->ad->Url ?? '' }}"
                        alt="">
                </a>
            @else
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                    crossorigin="anonymous"></script>
                <ins class="adsbygoogle inline-block w-[320px] h-[50px]"
                    data-ad-client="ca-pub-2032606674288851" data-ad-slot="3403761188"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            @endif
            </div>
            <div class="mt-10">
                <div class="divider divider-start divider-info text-2xl text-sky-700">Tag Populer</div>
                <ul>
                    @foreach ($toptag as $tag)
                    <a href="/index/Tag/{{ $tag->name }}">
                        <li class="text-2xl"> # {{ $tag->name }} </li>
                    </a>    
                    @endforeach
                </ul>
            </div>
            <div class="mt-8">
                <div class="w-full">
                   
                    @php
                    $adAbovePopular = $adconfig->where('Posisi', 'Diatas Populer')->first();
                @endphp

                @if ($adAbovePopular && $adAbovePopular->Iklan_ID)
                    <a href="{{ $adAbovePopular->Backlink ?? '#' }}">
                        <img class="w-full mb-3 " src="{{ $adAbovePopular->ad->Url ?? '' }}"
                            alt="">
                    </a>
                @else
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                        crossorigin="anonymous"></script>
                    <ins class="adsbygoogle inline-block w-[320px] h-[50px]"
                        data-ad-client="ca-pub-2032606674288851" data-ad-slot="3403761188"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                @endif


                    @php
                        $adBelowPilihan = $adconfig->where('Posisi', 'Dibawah Pilihan')->first();
                    @endphp

                    @if ($adBelowPilihan && $adBelowPilihan->Iklan_ID)
                        <a href="{{ $adBelowPilihan->Backlink ?? '#' }}">
                            <img class="w-full mt-3 object-fill" src="{{ $adBelowPilihan->ad->Url ?? '' }}"
                                alt="">
                        </a>
                    @else
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                            crossorigin="anonymous"></script>
                        <ins class="adsbygoogle block" style="display:block" data-ad-client="ca-pub-2032606674288851"
                            data-ad-slot="1098529020" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    @endif

                    @php
                        $adBelowPilihan2 = $adconfig->where('Posisi', 'Dibawah Pilihan 2')->first();
                    @endphp

                    @if ($adBelowPilihan2 && $adBelowPilihan2->Iklan_ID)
                        <a href="{{ $adBelowPilihan2->Backlink ?? '#' }}">
                            <img class="w-full mt-3 object-fill" src="{{ $adBelowPilihan2->ad->Url ?? '' }}"
                                alt="">
                        </a>
                    @else
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                            crossorigin="anonymous"></script>
                        <ins class="adsbygoogle inline-block w-[320px] h-[50px]"
                            data-ad-client="ca-pub-2032606674288851" data-ad-slot="3403761188"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    @endif

                    <section class="beritakanan hidden md:block mt-5">


                        @php
                            $adBesideBeritaLainnya = $adconfig->where('Posisi', 'Disamping Berita Lainnya')->first();
                        @endphp

                        @if ($adBesideBeritaLainnya && $adBesideBeritaLainnya->Iklan_ID)
                            <a href="{{ $adBesideBeritaLainnya->Backlink ?? '#' }}">
                                <img class="w-full mt-3 object-fill"
                                    src="{{ $adBesideBeritaLainnya->ad->Url ?? '' }}" alt="">
                            </a>
                        @else
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                                crossorigin="anonymous"></script>
                            <ins class="adsbygoogle block" style="display:block"
                                data-ad-client="ca-pub-2032606674288851" data-ad-slot="1098529020"
                                data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        @endif

                        @php
                            $adBesideBeritaLainnya2 = $adconfig->where('Posisi', 'Disamping Berita Lainnya 2')->first();
                        @endphp

                        @if ($adBesideBeritaLainnya2 && $adBesideBeritaLainnya2->Iklan_ID)
                            <a href="{{ $adBesideBeritaLainnya2->Backlink ?? '#' }}">
                                <img class="w-full mt-3 object-fill"
                                    src="{{ $adBesideBeritaLainnya2->ad->Url ?? '' }}" alt="">
                            </a>
                        @else
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                                crossorigin="anonymous"></script>
                            <ins class="adsbygoogle block" style="display:block"
                                data-ad-client="ca-pub-2032606674288851" data-ad-slot="1098529020"
                                data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        @endif
                    </section>
                </div>
                <!-- End Kolom Kanan -->
            </div>

        </div>

    </div>


    {{-- Facebook Komnetar --}}
    <div class="lg:w-[70%] w-[80%] msx-auto mt-8">

        <div class="fb-comments"
            data-href="https://lampung.rilis.id/{{ $section_place }}/Berita/{{ $post->Url }}" data-width=""
            data-numposts="5"></div>
    </div>
    {{-- <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%" data-numposts="5"></div> --}}
    {{-- Facebook Komnetar --}}

    {{-- Berita Lainnya --}}
    <div class="divider divider-info text-2xl py-9">Berita Lainnya</div>
    <div class="flex items-center justify-center w-full h-full py-8 sm:py-4 px-4">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward"
                class="absolute z-30 left-0 ml-6 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer text-white"
                id="custom-prev">
                <svg class="dark:text-gray-900 lg:w-14 lg:h-14" width="8" height="14" viewBox="0 0 8 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="custom-slider"
                    class="h-full flex lg:gap-2 md:gap-2 gap-2 items-center justify-start transition ease-out duration-700">
                    @foreach ($random as $pt)
                        <div class="flsex flex-shrink-0 relative w-64 h-60  sm:w-auto">
                            <a href="#">
                                <img class="w-full h-40 object-center object-cover rounded-t-lg"
                                    src="{{ $pt->Image }}" alt="" />
                            </a>
                            <div class="p-5 w-64">
                                <a href="/{{ $pt->section->Nama_Section }}/Berita/{{ $pt->Url }}">
                                    <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $pt->Nama_Article }}</h5>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button aria-label="slide forward"
                class="absolute z-30 right-0 mr-6 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                id="custom-next">
                <svg class="dark:text-gray-900 lg:w-14 lg:h-14" width="8" height="14" viewBox="0 0 8 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
    {{-- berita lain --}}
    <section class="container mx-auto md:hidden">
        <div class="flex flex-col md:flex-row">
            <div class="w-full">
                @php
                    $ad = $adconfig->where('Posisi', 'Dibawah Berita Lain')->first();
                @endphp

                @if ($ad && $ad->Iklan_ID)
                    <a href="{{ $ad->Backlink ?? '#' }}">
                        <img class="w-full max-h-[100pt] object-cover" src="{{ $ad->ad->Url ?? '' }}"
                            alt="">
                    </a>
                @else
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2032606674288851"
                        crossorigin="anonymous"></script>
                    <!-- Artikel Detail -->
                    <ins class="adsbygoogle inline-block w-[320px] h-[50px]" data-ad-client="ca-pub-2032606674288851"
                        data-ad-slot="3403761188"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                @endif
            </div>
        </div>
    </section>

    <script>
        let customDefaultTransform = 0;

        function customGoNext() {
            customDefaultTransform = customDefaultTransform - 398;
            var slider = document.getElementById("custom-slider");
            if (Math.abs(customDefaultTransform) >= slider.scrollWidth / 1.7) customDefaultTransform = 0;
            slider.style.transform = "translateX(" + customDefaultTransform + "px)";
        }
        document.getElementById("custom-next").addEventListener("click", customGoNext);

        function customGoPrev() {
            var slider = document.getElementById("custom-slider");
            if (Math.abs(customDefaultTransform) === 0) customDefaultTransform = 0;
            else customDefaultTransform = customDefaultTransform + 398;
            slider.style.transform = "translateX(" + customDefaultTransform + "px)";
        }
        document.getElementById("custom-prev").addEventListener("click", customGoPrev);
    </script>




    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</x-layout>
