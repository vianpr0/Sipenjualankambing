<!-- resources/views/categories/index.blade.php -->
<x-layout :title="'Kategori dan Artikel'">
    <div class="flex">
        <!-- Kategori -->
        <div class="w-1/4 bg-white p-4 border-r border-gray-200 h-screen overflow-y-auto">

            <ul class="space-y-2">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 1</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 2</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 3</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 4</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori 5</a></li>
            </ul>
        </div>
        <!-- Artikel -->
        <div class="w-3/4 p-4">
            <h2 class="text-2xl font-semibold mb-4">Artikel</h2>
            <div class="space-y-6">
                <div class="article bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold">Judul Artikel 1</h3>
                    <p>Konten artikel 1...</p>
                </div>
                <div class="article bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold">Judul Artikel 2</h3>
                    <p>Konten artikel 2...</p>
                </div>
                <div class="article bg-white p-4 rounded shadow">
                    <h3 class="text-xl font-semibold">Judul Artikel 3</h3>
                    <p>Konten artikel 3...</p>
                </div>
            </div>
            <div class="join mt-10">
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="1" checked />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="2" />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="3" />
                <input class="join-item btn btn-square" type="radio" name="options" aria-label="4" />
              </div>
        </div>

    </div>
</x-layout>
