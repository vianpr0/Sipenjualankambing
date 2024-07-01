<div class=" flex flex-col w-[90%] md:w-full rounded-sm mx-auto">


    {{-- Berita Terbaru --}}
    <div class="divider divider-success text-2xl py-4">Berita Terbaru</div>

    <div class="flex items-center justify-center w-full h-full py-8 sm:py-4 px-4">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward"
                class="absolute z-30 left-0 ml-6 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer text-white"
                id="prev">
                <svg class="dark:text-gray-900 lg:w-14 lg:h-14" width="8" height="14" viewBox="0 0 8 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider"
                    class="h-full flex lg:gap-2 md:gap-2 gap-2 items-center justify-start transition ease-out duration-700">
                    @foreach ($beritaterbaru as $pt)
                        <div class="flsex flex-shrink-0 relative w-60 h-60  sm:w-auto">
                            <a href="#">
                                <img class="w-60 h-40 object-center object-cover rounded-t-lg" src="{{ $pt->Image }}"
                                    alt="" />
                            </a>
                            <div class="p-5 w-64">
                                <a href="/{{ $pt->section->Nama_Section }}/Berita/{{ $pt->Url }}">
                                    <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $pt->Nama_Article }}</h5>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button aria-label="slide forward"
                class="absolute z-30 right-0 mr-6 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                id="next">
                <svg class="dark:text-gray-900 lg:w-14 lg:h-14" width="8" height="14" viewBox="0 0 8 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>
    {{-- Berita Terbaru --}}





