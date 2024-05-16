<div class="w-[90%] mx-auto p-2">
  <div class="container mx-auto flex items-center">
      <span class="font-bold mr-2 ">Breaking News:</span>
      <div class="overflow-hidden whitespace-nowrap">
          <div class="inline-block animate-marquee">
              <span class="mr-10">Berita terbaru pertama...</span>
              <span class="mr-10">Berita terbaru kedua...</span>
              <span class="mr-10">Berita terbaru ketiga...</span>
              <!-- Tambahkan lebih banyak berita sesuai kebutuhan -->
          </div>
      </div>
  </div>
</div>

<style>
@keyframes marquee {
  0% {
      transform: translateX(100%);
  }
  100% {
      transform: translateX(-100%);
  }
}

.animate-marquee {
  display: inline-block;
  white-space: nowrap;
  will-change: transform;
  animation: marquee 10s linear infinite;
}
</style>
