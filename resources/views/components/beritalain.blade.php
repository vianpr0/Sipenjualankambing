{{-- Berita Lainnya --}}
<div class="divider divider-info text-2xl py-9">Berita Lainnya</div>
<div class="flex items-center justify-center w-full h-full py-8 sm:py-4 px-4">
    <div class="w-full relative flex items-center justify-center">
        <button aria-label="slide backward"
            class="absolute z-30 left-0 ml-6 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer text-white"
            id="custom-prev">
            <svg class="dark:text-gray-900 lg:w-14 lg:h-14" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M7 1L1 7L7 13" stroke="black" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
            <div id="custom-slider"
                class="h-full flex lg:gap-2 md:gap-2 gap-2 items-center justify-start transition ease-out duration-700">
                @foreach ($pilihan as $pt)
                    <div class="flsex flex-shrink-0 relative w-64 h-60  sm:w-auto">
                        <a href="#">
                            <img class="w-full h-40 object-center object-cover rounded-t-lg" src="{{ $pt->Image }}"
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
            id="custom-next">
            <svg class="dark:text-gray-900 lg:w-14 lg:h-14" width="8" height="14" viewBox="0 0 8 14"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>

<script>
    let customDefaultTransform = 0;

    function customGoNext() {
        customDefaultTransform = customDefaultTransform - 398;
        var slider = document.getElementById("custom-slider");
        if (Math.abs(customDefaultTransform) >= slider.scrollWidth / 1.7) customDefaultTransform = 0;
        slider.style.transform = "translateX(" + customDefaultTransform + "px)";
    }
    document.getElementById("custom-next").addEventListener("click", customGoNext);

    function customGoPrev() {
        var slider = document.getElementById("custom-slider");
        if (Math.abs(customDefaultTransform) === 0) customDefaultTransform = 0;
        else customDefaultTransform = customDefaultTransform + 398;
        slider.style.transform = "translateX(" + customDefaultTransform + "px)";
    }
    document.getElementById("custom-prev").addEventListener("click", customGoPrev);
</script>
