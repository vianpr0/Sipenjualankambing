<!-- resources/views/categories/index.blade.php -->
<x-layout>
    <div class="container mx-auto py-8 flex">
        <!-- Sidebar: List of Categories -->
        <div class="w-1/4 h-screen sticky top-24 px-4 overflow-y-auto">
            <h2 class="text-2xl font-bold mb-4">Categories</h2>
            <ul class="space-y-2">
                @foreach ($sections as $section)
                    <li>
                        <a href="/index/{{ $section->Nama_Section }}"
                            class="block p-2 rounded hover:bg-gray-200 border-b">
                            {{ $section->Nama_Section }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Main Content: Articles -->
        @if ($articles->count())
            <div class="w-3/4 px-4 overflow-y-auto">
                @if ($articles)
                    <div class="space-y-8">
                        @foreach ($articles as $article)
                            <div
                                class="flex flex-col md:flex-row items-center md:items-start overflow-hidden rounded-lg border">
                                <a href="/index/berita/{{ $article->Url }}"
                                    class="group relative block h-72 w-full md:w-48 lg:w-64 shrink-0 self-start overflow-hidden bg-gray-100">
                                    <img src={{ $article->Image }} loading="lazy" alt="{{ $article->Nama_Article }}"
                                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                </a>
                                <div class="flex flex-col gap-2 p-4 lg:p-6 md:flex-grow">
                                    <span
                                        class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('j F Y H:i') }}
                                        WIB</span>
                                    <h2 class="text-xl font-bold text-gray-800">
                                        <a href="/index/berita/{{ $article->Url }}"
                                            class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $article->Nama_Article }}</a>
                                    </h2>
                                    <p class="text-gray-500">{!! Str::limit($article->Isi_Article, 100) !!}</p>
                                    <div>
                                        <a href="/index/berita/{{ $article->Url }}"
                                            class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        {{ $articles->links() }} <!-- Pagination links -->
                    </div>
                @else
                    <p class="text-center">Select a category to view articles.</p>
                @endif
            </div>
        @else
        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
            <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
                <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                    <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
                </div>
                <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                    <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        Not Found
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                        Berita tidak ditemukan !!
                    </p>
                </div>
            </div>
        </section>

        @endif
    </div>
</x-layout>
