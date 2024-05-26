<!-- resources/views/categories/index.blade.php -->
<x-layout>
    <div class="bg-gradient-to-bl from-slate-50 via-green-300 to-slate-50 h-64 flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-5xl font-bold">{{ $section->Nama_Section }}</h1>
        </div>
    </div>

    <div class="das">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-2 xl:grid-cols-2 xl:gap-8">
                    @foreach ($articles as $article)
                        <div class="flex flex-col items-center overflow-hidden rounded-lg border md:flex-row">
                             <a href="/index/berita/{{ $article->Url }}" class="group relative block h-48 w-full shrink-0 self-start overflow-hidden bg-gray-100 md:h-full md:w-32 lg:w-48">
                                <img src={{ $article->Image }} loading="lazy" alt="{{ $article->Nama_Article }}" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                            </a>
                            <div class="flex flex-col gap-2 p-4 lg:p-6">
                                <span class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('j F Y H:i') }} WIB</span>
                                <h2 class="text-xl font-bold text-gray-800">
                                     <a href="/index/berita/{{ $article->Url }}" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $article->Nama_Article }}</a>
                                </h2>
                                <p class="text-gray-500">{!! Str::limit($article->Isi_Article, 100) !!}</p>
                                <div>
                                    <a href="/index/berita/{{ $article->Url }}" class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-6">
                    {{ $articles->links() }} <!-- This will render pagination links -->
                </div>
            </div>
        </div>
    </div>
</x-layout>
