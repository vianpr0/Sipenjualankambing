<x-layout :title="$post->Nama_Article">
    <div class="container mx-auto py-3s">
        <div class="md:flex">
            <div class="md:w-3/4 bg-white p-2 shadow mr-8">
                {{-- @foreach ($posts as $post) --}}
                <main class="pt-8 pb-16 lg:pt-1s6 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                        <article class="px-4 mx-auto max-w-screen-xl">
                            <header class="mb-4 lg:mb-6 not-format">
                                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                    {{ $post['Nama_Article'] }}
                                </h1>
                                <address class="flex items-center mb-6 not-italic">
                                    <div class="inline-flex items-center bg-resd-500 mr-3 text-sm text-gray-900 dark:text-white">
                                        <img class="mr-4 w-10 h-10 rounded-full" src="{{ $post->user->Foto }}" alt="{{ $post->user->name }}">
                                        <div>
                                            <h4 class="uppercase text-lg font-bold">   {{ $post->user->name }}</h4>
                                            <h4 class="text-base text-gray-500 dark:text-gray-400">
                                                {{ $post->Kota }}
                                            </h4>
                                            {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('j F Y') }}
                                        </div>
                                    </div>
                                </address>
                            </header>
                            <img class="w-full" src="{{ $post->Image }}" alt="{{ $post->ImageCaption }}">
                            <article class="mt-6">{!! $modifiedContent!!}</article>
                            <article>{!! $post->Isi_Article !!}</article>
                            {{-- {{ dd($first) }} --}}
                            
                            {{-- {{ dd($modifiedContent) }} --}}
                        </article>
                    </div>
                </main>
            </div>
            
            <div class="md:w-1/4 bg-whilte p-8 shadow">
                <img src="https://lampung.rilis.id/image/Iklan/2024/04/19rumahdijualaddnew2024add.jpg" alt="">
            </div>
        </div>
    </div>

</x-layout>
