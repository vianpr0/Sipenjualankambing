<x-layout :title="$post->Nama_Article">
    <div class="container mx-auto py-3s">
        <div class="md:flex">
            <div class="md:w-3/4 w-screen flex bgs-blue-900 mx-auto p-2 shadow mr-8">
                <main class="pt-8 pb-16 lg:pt-1s6 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                        <article class="px- mx-auto max-w-screen-xl">
                            <header class="mb-4 lg:mb-6 not-format">
                                <h1
                                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                    {{ $post['Nama_Article'] }}
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
                                    <div class="flex justify-between mt-2">
                                       <span class="text-sm/[10px]"> {{ $published }} WIB</span>
                                        <div class="das">
                                            <a href="/kategori/{{ $post->section->Nama_Section  }}"><span class="font-bold text-sm/[10px]">{{ $post->section->Nama_Section }} </span></a>| Rilis ID

                                        </div>
                                    </div>
                                </address>
                            </header>
                            <div class="bg-red-5s00 items-center justify-center text-center  ">
                                <img class="w-full" src="{{ $post->Image }}" alt="{{ $post->ImageCaption }}">
                                <em class="italic"> <span
                                        class="text-gray-500 text-sm bgsred-400">{{ $post->ImageCaption }}</span> </em>
                            </div>
                            <article class="mt-6">{!! $modifiedContent !!}</article>
                            <article>{!! $post->Isi_Article !!}</article>
                            <div class="mt-7">
                                <div class="divider divider-neutral"></div>
                                <span class="block font-bold uppercase text-blue-900">Editor :
                                    {{ $post->editor->name }}</span>
                                <div class="flex flex-wrap mt-6 gap-3">
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
                </main>
            </div>

            <div class="md:w-1/4 bg-whilte p-8 shadow">
                <img src="https://lampung.rilis.id/image/Iklan/2024/04/19rumahdijualaddnew2024add.jpg" alt="">
            </div>
        </div>
    </div>

</x-layout>
