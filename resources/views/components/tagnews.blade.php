<div class="w-[90S%] mx-auto p-2 mt-5  bg-white">
    <div class="container mx-auto flex items-center">
        <span class="font-bold mr-2 md:text-lg bg-psurple-400 p-4s tesxt-white border-y-2">Breaking</span>
        <div class=" overflow-hidden whitespace-nowrap">

            <div class="inline-block animate-marquee text-xl font-bold bg-swhite shadow-sm borsder-y-2 ps-4 bg-opacity-30">
                <span class="mr-10">Berita terbaru pertama...</span>
                <span class="mr-10">Berita terbaru kedua...</span>
                <span class="mr-10">Berita terbaru ketiga...</span>
                <!-- Tambahkan lebih banyak berita sesuai kebutuhan -->
            </div>
        </div>
    </div>

  </div>
  <style>@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
  }
  .relative img {
              object-fit: cover;
          }

  .animate-marquee {
    display: inline-block;
    white-space: nowrap;
    will-change: transform;
    animation: marquee 10s linear infinite;
  }
  </style>
  </style>
