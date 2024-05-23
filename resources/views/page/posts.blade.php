<x-layout title="Kategori dan Artikel">

    
    
    
    <div class="container mx-auto py-3">
        <div class="md:flex">
            <div class="w-3/4 bgs-white p-2 shadow mr-8">
                
                {{-- @foreach ($posts as $post ) --}}
                <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-whsite dark:bg-gray-900 antialiased">
                    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                        <article
                            class="px-4 mx-auto max-w-screen-xl">
                            <header class="mb-4 lg:mb-6 not-format">
                                <address class="flex items-center mb-6 not-italic">
                                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                        <img class="mr-4 w-16 h-16 rounded-full"
                                            src={{ $post->user->Foto }}
                                            alt="Jese Leos">
                                        <div>
                                            <a href="#" rel="author"
                                                class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name}}</a>
                                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->Kota }}
                                                </p>
                                                <p>{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('j F Y') }}</p>
                                        </div>
                                    </div>
                                </address>
                                <h1
                                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                    {{ $post ['Nama_Article'] }}</h1>
                            </header>
                            <img class="w-full" src={{ $post->Image }} alt={{ $post->ImageCaption }}>
                           <p>{!! $post->Isi_Article !!}</p>
                           {{-- {{ dd($post->paginator) }} --}}

                           {{-- <p>{{ $post->Isi_Article }}</p> --}}
                           {{-- <a href="/index/{{ $post ['id'] }}">read more</a> --}}

                        </article>
                    </div>
                </main>
                {{-- @endforeach --}}


               
            </div>
            <div class="w-1/4 bg-whilte p-8 shadow">


                    <img src="https://lampung.rilis.id/image/Iklan/2024/04/19rumahdijualaddnew2024add.jpg" alt="">

            </div>
        </div>
    </div>

</x-layout>
