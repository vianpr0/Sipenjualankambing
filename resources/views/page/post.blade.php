<x-layout title="Kategori dan Artikel">
    <div class="container mx-auto py-3">
        <div class="md:flex">
            <div class="md:w-3/4 bg-white p-2 shadow mr-8">
                @if ($posts->count()) @foreach ($posts as $post)
                    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                            <article class="px-4 mx-auto max-w-screen-xl">
                                <header class="mb-4 lg:mb-6 not-format">
                                    <address class="flex items-center mb-6 not-italic">
                                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                            <img class="mr-4 w-16 h-16 rounded-full" src="{{ $post->user->Foto }}" alt="Jese Leos">
                                            <div>
                                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name }}</a>
                                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->Kota }}</p>
                                                <p class="text-base text-gray-500 dark:text-gray-400">
                                                    <time pubdate datetime="{{ $post->published_at }}" title="{{ $post->published_at }}">
                                                        {{ $post->published_at }}
                                                    </time>
                                                </p>
                                            </div>
                                        </div>
                                    </address>
                                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                        {{ $post['Nama_Article'] }}
                                    </h1>
                                </header>
                                {{-- <p>{{ $post['Isi_Article'] }}</p> --}}
                                <p>{!! Str::limit($post['Isi_Article'], 100) !!}</p>
                                <a href="/index/berita/{{ $post['Url'] }}">read more</a>
                                
                                    <!-- Container for demo purpose -->
                                </article>
                            </div>
                        </main>
                        @endforeach
                @else
                    <h1 class="text-center">Tidak ada postingan ditemukan</h1>
                @endif
                {{ $posts->links() }}
            </div>
         
        </div>
    </div>
</x-layout>
