<div class="w-[90l%]  hidden md:block mx-auto p-2 mt-5 bg-white">
    <div class="container mx-auto p-4 flex items-center overflow-hidden relative ">
        <!-- Previous Button -->
        <button id="prevBtn" class="absolute left-0 z-10 p-2 bg-gray-300 rounded-sm  hover:bg-gray-400 mr-s6">
            &lt;
        </button>

        <!-- Section Names -->
        <div id="carousel" class="flex transition-transform duration-500 overflow-x-auto whitespace-nowrap no-scrollbar">
            @foreach ($sections as $sc)
            <a href="/index/{{ $sc->Nama_Section }}"><span class="mr-5 text-xl font-bold bg-white shadow-sm border-b-2 pl-6 pr-6 pt9 bg-opacity-30"> {{ $sc->Nama_Section }}</a>
                   
                </span>
            @endforeach
        </div>

        <!-- Next Button -->
        <button id="nextBtn" class="absolute right-0 z-10 p-2 bg-gray-300 hover:bg-gray-400 rounded-sm ">
            &gt;
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('carousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        const scrollStep = 300; // Adjust scroll step as needed

        prevBtn.addEventListener('click', () => {
            carousel.scrollBy({
                left: -scrollStep,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener('click', () => {
            carousel.scrollBy({
                left: scrollStep,
                behavior: 'smooth'
            });
        });
    });
</script>

<style>
    .relative img {
        object-fit: cover;
    }
    
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    
    .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
</style>
