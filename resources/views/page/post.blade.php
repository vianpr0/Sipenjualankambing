<x-layout title="Kategori dan Artikel">
    <div class="container mx-auto py-3">
        <div class="md:flex">
            <div class="md:w-full w-full bg-white p-2 shadow mr-8">
                @if ($posts->count())
                    <div class="bg-white py-6 sm:py-8 lg:py-12">
                        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                            <div class="mb-10 md:mb-16"></div>
                            <div class="grid gap-8 sm:grid-cols-2 sm:gap-12 lg:grid-cols-2 xl:grid-cols-2 xl:gap-16">
                                @foreach ($posts as $post)
                                    <div class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
                                        <a href="#"
                                            class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-24 md:w-24 lg:h-40 lg:w-40">
                                            <img src="{{ $post->Image }}" loading="lazy"
                                                alt="{{ $post->Nama_Article }}"
                                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                        </a>
                                        <div class="flex flex-col gap-2">
                                            <span
                                                class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('j F Y') }}</span>
                                            <h2 class="text-xl font-bold text-gray-800">
                                                <a href="#"
                                                    class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $post->Nama_Article }}</a>
                                            </h2>
                                            <p class="text-gray-500">{!! Str::limit($post['Isi_Article'], 100) !!}</p>
                                            <div>
                                                <a href="/index/berita/{{ $post['Url'] }}"
                                                    class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
                        <div
                            class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
                            <div
                                class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                                <img src="https://cdn.devdojo.com/images/december2020/productivity.png"
                                    class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
                            </div>
                            <div
                                class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                                <h2
                                    class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                                    Not Found
                                </h2>
                                <p
                                    class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                                    Berita tidak ditemukan !!
                                </p>
                            </div>
                        </div>
                    </section>
                @endif

                <!-- Pagination -->
                <div class="mt-6 flex justify-around">
                    <div class="join grid grid-cols-2 gap-4">
                        @if ($posts->onFirstPage())
                            <button class="join-item btn btn-outline " disabled>Previous page</button>
                        @else
                            <a href="{{ $posts->previousPageUrl() }}"
                                class="join-item btn btn-outline btn-warning">Previous page</a>
                        @endif

                        @if ($posts->hasMorePages())
                            <a href="{{ $posts->nextPageUrl() }}" class="join-item btn btn-outline btn-accent">Next</a>
                        @else
                            <button class="join-item btn btn-outline" disabled>Next</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
