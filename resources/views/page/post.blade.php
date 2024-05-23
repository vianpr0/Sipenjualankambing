<x-layout title="Kategori dan Artikel">
    <div class="container mx-auto py-3">
        <div class="md:flex">
            <div class="w-3/4 bg-white p-2 shadow mr-8">
                @if ($posts->count())
                    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                            <article class="px-4 mx-auto max-w-screen-xl">
                                {{-- <header class="mb-4 lg:mb-6 not-format">
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
                                </header> --}}
                                {{-- <p>{{ $post['Isi_Article'] }}</p> --}}
                                {{-- <p>{!! Str::limit($post['Isi_Article'], 100) !!}</p> --}}
                                {{-- <a href="/index/{{ $post['article_id'] }}">read more</a> --}}
                                <div class="container my-4 mx-auto md:px-6">
                                    <!-- Section: Design Block -->
                                    <section class="mb-32 text-center md:text-left">
                                        <h2 class="mb-12 text-center text-3xl font-bold">Berita Terbaru</h2>
                                        @foreach ($posts as $post)
                                            <div class="mb-6 flex flex-wrap">
                                                <div class="mb-6 ml-auto w-full shrink-0 grow-0 basis-auto px-3 md:mb-0 md:w-3/12">
                                                    <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
                                                        <img src={!! $post->Image !!} class="w-full" alt="Louvre" />
                                                        <a href="#!">
                                                            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mb-6 mr-auto w-fusll shrink-0 grow-0 basis-auto px-3 md:mb-0 md:w-9/12 xl:w-9/12">
                                                    <h5 class="mb-3 text-lg font-bold">{{ $post['Nama_Article'] }}</h5>
                                                    <div class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500 md:justify-start">
                                                
                                                        Kategori
                                                    </div>
                                                    <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                                        <small>Diterbitkan <u>{{ $post->published_at }}</u> oleh <a href="#!">{{ $post->user->name }}</a></small>
                                                    </p>
                                                    <p class="text-neutral-500 dark:text-neutral-300">
                                                        {!! Str::limit($post['Isi_Article'], 100) !!}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </section>
                                    <!-- Section: Design Block -->
                                </div>
                                <!-- Container for demo purpose -->
                            </article>
                        </div>
                    </main>
                @else
                    <h1 class="text-center">Tidak ada postingan ditemukan</h1>
                @endif
                {{ $posts->links() }}
            </div>
            <div class="w-1/4 bg-white p-8 shadow">
                <img src="https://lampung.rilis.id/image/Iklan/2024/04/19rumahdijualaddnew2024add.jpg" alt="">
            </div>
        </div>
    </div>
</x-layout>
