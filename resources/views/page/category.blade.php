<!-- resources/views/categories/index.blade.php -->
<x-layout :section="$sections">
    <div class="container mx-auto py-8">
        <div class="flex">
            <!-- Sidebar: List of Categories -->
            <div class="w-1/4 px-4">
                <h2 class="text-2xl font-bold mb-4">Categories</h2>
                <ul class="space-y-2">
                    @foreach ($sections as $section)
                        <li>
                            {{-- <a href="{{ route('categories.show', $section->id) }}" class="block p-2 rounded hover:bg-gray-200"> --}}
                                {{ $section->Nama_Section }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Main Content: Articles -->
            <div class="w-3/4 px-4">
                @if ($articles)
                    <h2 class="text-2xl font-bold mb-4">{{ $section->Nama_Section }}</h2>
                    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-2 xl:grid-cols-2 xl:gap-8">
                        @foreach ($articles as $article)
                            <div class="flex flex-col items-center overflow-hidden rounded-lg border md:flex-row">
                                <a href="#" class="group relative block h-48 w-full shrink-0 self-start overflow-hidden bg-gray-100 md:h-full md:w-32 lg:w-48">
                                    <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="{{ $article->Nama_Article }}" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                </a>
                                <div class="flex flex-col gap-2 p-4 lg:p-6">
                                    <span class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('j F Y H:i') }} WIB</span>
                                    <h2 class="text-xl font-bold text-gray-800">
                                        <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">{{ $article->Nama_Article }}</a>
                                    </h2>
                                    <p class="text-gray-500">{{ Str::limit($article->Isi_Article, 100) }}</p>
                                    <div>
                                        <a href="#" class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read more</a>
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
        </div>
    </div>
</x-layout>
