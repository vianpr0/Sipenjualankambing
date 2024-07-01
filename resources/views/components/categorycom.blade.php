<div class="bg-sky-800">
    <div class="p-2 mx-auto w-[70%] bsg-red-800 justify-saround">
      <ul class="flex gap-2 text-xl justify-evenly text-white ">
        @foreach ( $sections as $sc )
          <li class="uppercase" style="font-family: Bebas Kai"><a href="/Kategori/{{ $sc->Nama_Section }}">{{ $sc->Nama_Section }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
  