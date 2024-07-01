<x-app>
    <x-Navbar />
    <div class="lg:block sm:hidden md:block hidden">
        <x-categorycom />
    </div>

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl p-10 bg-cyan-600 font-bold text-gray-900 md:mb-6 lg:text-3xl">Ads</h2>
                {{-- <p class="mx-auto max-w-screen-md text-center text-gray-700 text-sm md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> --}}
            </div>
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Informasi</h2>
                {{-- <p class="mx-auto max-w-screen-md text-center text-gray-700 text-sm md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> --}}
            </div>
            <!-- text - end -->

            <div class="mx-auto flex max-w-screen-sm flex-col border-t">
                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Platform</span>
                        <span class="text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Platform') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <p>Politik adalah bentala yang digenangi kebajikan. Karena jalan menuju bangsa yang
                            berketuhanan, berperikemanusiaan dan berkeadilan sosial, merupakan kewajiban utama yang
                            diemban oleh para politisi.</p>

                        <p>Tapi kredo profetik itu berangsur luruh, lalu menjadi sebatas uang dan kekuasaan yang silih
                            berganti diperebutkan, dengan cara apa pun! Landasan moral, prestasi dan gagasan sosial kian
                            ranggas.</p>

                        <p>Kehidupan politik, laun kerontang dan mencemaskan. Tentu, tak baik larut apalagi sekedar
                            menyerapah. Semangat itulah yang melecut rilis.id hadir pada Februari 2017.</p>

                        <p>Kami percaya, meski harus berdiri di tengah kerontang, ada altruisme, nilai fundamental dalam
                            politik yang mendorong kebaikan bersama.</p>

                        <p>Juga, kami percaya, ada politisi altruis. Mereka tahu, politik adalah seni pengabdian. Bukan
                            muslihat untuk kekuasaan.</p>

                        <p>Saung kecil ini didedikasikan untuk menyemai intensi itu; merawat dan menjalarkan altruisme
                            politik. Selamat datang!</p>

                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Dewan-Pers</span>
                        <span class="text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Dewan-Pers') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <img src="{{ asset('img/imageb.png') }}" class="w-full object-cover" alt="" />
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Verifikasi-Kominfo</span>
                        <span class="text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Verifikasi-Kominfo') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <img src="{{ asset('img/kominfosurat.jpg') }}" class="w-full object-cover" alt="" />
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Redaksi</span>
                        <span class="rotate-180 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Redaksi') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <div class="space-y-4">
                            <p class="font-bold">Pemimpin Redaksi/Penanggung Jawab<br>
                                <span class="font-normal">Ade Yunarso</span>
                            </p>

                            <p class="font-bold">Redaktur<br>
                                <span class="font-normal">Sulaiman, Juan S, Agus Pamintaher</span>
                            </p>

                            <p class="font-bold">Reporter<br>
                                <span class="font-normal">Tampan Fernando, Kalbi Rikardo, Rimadani Eka Mareta, Pandu
                                    Satria, Novi Balga, Excelcis Deo Simanjuntak, Muhammad Riandito (Bandarlampung), Adi
                                    Herlambang, Muklis (Lampung Timur), Riswan (Metro), Yuda Haryono (Pringsewu), Adi
                                    Yulyandi (Tanggamus), Ari Gunawan, Anton Suryadi (Lampung Barat), Furkon Ari, M.
                                    Riski Andresa (Lampung Utara), Alamsyah (Tulangbawang), Ahmad Kurdy, RMZ
                                    Juliansyah-Non Aktif (Lampung Selatan) Riki Saputra (Pesisir Barat).</span>
                            </p>

                            <p class="font-bold">Desain Grafis<br>
                                <span class="font-normal">Kalbi Rikardo</span>
                            </p>

                            <p class="font-bold">Pengembang IT<br>
                                <span class="font-normal">Imam Noerhenda</span>
                            </p>

                            <p class="font-bold">Sosial Media<br>
                                <span class="font-normal">Kalbi Rikardo</span>
                            </p>

                            <p class="font-bold">Admin Sosial Media<br>
                                <span class="font-normal">Kalbi Rikardo</span>
                            </p>

                            <p class="font-bold">Sekretaris Redaksi<br>
                                <span class="font-normal">Mufidah Mardhiah</span>
                            </p>

                            <p class="font-bold">PT RILIS MULTIMEDIA INDONESIA</p>

                            <p class="font-bold">CEO<br>
                                <span class="font-normal">Rayang Termedate Mendrofa</span>
                            </p>

                            <p class="font-bold">Direktur Utama<br>
                                <span class="font-normal">Wirahadikusumah</span>
                            </p>

                            <p class="font-bold">General Manager<br>
                                <span class="font-normal">Segan Petrus Simanjuntak</span>
                            </p>

                            <p class="font-bold">Pemimpin Perusahaan<br>
                                <span class="font-normal">Mufidah Mardhiah</span>
                            </p>

                            <p class="font-bold">Ombudsman<br>
                                <span class="font-normal">Hengki Irawan</span>
                            </p>

                            <p class="font-bold">Manager Iklan<br>
                                <span class="font-normal">-</span>
                            </p>

                            <p class="font-bold">Staf Iklan<br>
                                <span class="font-normal">Desfita Dewi, Faisol, Herleo Panji Pratama</span>
                            </p>

                            <p class="font-bold">Staf Keuangan<br>
                                <span class="font-normal">Umdhatul Chasanah</span>
                            </p>

                            <p class="font-bold">Penasehat Hukum<br>
                                <span class="font-normal">LP Connection & Partners</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Kode-Etik</span>
                        <span class="rotate-180 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Kode-Etik') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <p>Pembaca Yth,</p>
                        <p>Sebagai bagian dari pers nasional, portal berita rilis.id terikat oleh undang-undang dan kode
                            etik dalam menjalankan tugas dan fungsinya, agar senantiasa menjunjung tinggi
                            prinsip-prinsip jurnalisme.</p>

                        <p>Undang-undang dan kode etik tersebut sakaligus merupakan panduan redaksi dalam melakukan
                            kerja jurnalistik yang independen serta disiplin terhadap prosedur kebenaran dan
                            keberimbangan.</p>

                        <p>Dukungan, kritik dan saran dari para pembaca, sangat diharapkan agar kami dapat menyajikan
                            karya jurnalistik yang baik dan mencerdaskan.</p>

                        <p>Salam hormat,<br>
                            Redaksi RILIS.ID</p>

                        <p>UNDANG-UNDANG</p>

                        <p>Undang-Undang Nomor 40 Tahun 1999 tentang Pers.</p>

                        <p>Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan dan Informasi Publik.</p>

                        <p>Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik.</p>

                        <p>Undang-Undang Nomor 32 Tahun 2002 tentang Penyiaran.</p>


                        <p>KODE ETIK</p>

                        <p>Kode Etik Jurnalistik.</p>

                        <p>Pedoman Hak Jawab.</p>

                        <p>Standar Perlindungan Profesi Wartawan.</p>
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Disclaimer</span>
                        <span class="rotate-180 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Disclaimer') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <p>Seluruh layanan yang diberikan mengikuti aturan main yang berlaku dan ditetapkan oleh
                            RILIS.ID</p>

                        <p>PASAL SANGGAHAN (DISCLAIMER) :</p>

                        <p>RILIS.ID tidak bertanggung jawab atas tidak tersampaikannya data/informasi yang disampaikan
                            oleh pembaca melalui berbagai jenis saluran komunikasi (e-mail, sms, online form) karena
                            faktor kesalahan teknis yang tidak diduga sebelumnya.</p>

                        <p>RILIS.ID berhak untuk memuat, tidak memuat, mengedit, dan/atau menghapus data/informasi yang
                            disampaikan oleh pembaca. Opini penulis adalah tanggung jawab penulis yang tertera, tidak
                            menjadi bagian tanggung jawab redaksi.</p>

                        <p>Data dan/atau informasi yang tersedia di RILIS.ID hanya sebagai rujukan/referensi belaka, dan
                            tidak diharapkan untuk tujuan perdagangan saham, transaksi keuangan/bisnis maupun transaksi
                            lainnya. Walau berbagai upaya telah dilakukan untuk menampilkan data dan/atau informasi
                            seakurat mungkin, RILIS.ID dan semua mitra yang menyediakan data dan informasi, termasuk
                            pengelola halaman konsultasi, tidak bertanggung jawab atas segala kesalahan dan
                            keterlambatan memperbarui data atau informasi, atau segala kerugian yang timbul karena
                            tindakan yang berkaitan dengan penggunaan data/informasi yang disajikan RILIS.ID.</p>
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Karir</span>
                        <span class="rotate-180 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Karir') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <p>Terima kasih atas kunjungan Anda.<br>
                            Mohon maaf, saat ini lowongan kerja sudah ditutup.</p>
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Media-Siber</span>
                        <span class="rotate-180 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Media-Siber') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <p>Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi
                            manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak
                            Asasi Manusia PBB. Keberadaan media siber di Indonesia juga merupakan bagian dari
                            kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.</p>

                        <p>Media siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat
                            dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang
                            Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik. Untuk itu Dewan Pers bersama
                            organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman Pemberitaan Media
                            Siber sebagai berikut:</p>

                        <p>1. Ruang Lingkup</p>

                        <ol>
                            <li>Media Siber adalah segala bentuk media yang menggunakan wahana internet dan melaksanakan
                                kegiatan jurnalistik, serta memenuhi persyaratan Undang-Undang Pers dan Standar
                                Perusahaan Pers yang ditetapkan Dewan Pers.</li>
                            <li>Isi Buatan Pengguna (User Generated Content) adalah segala isi yang dibuat dan atau
                                dipublikasikan oleh pengguna media siber, antara lain, artikel, gambar, komentar, suara,
                                video dan berbagai bentuk unggahan yang melekat pada media siber, seperti blog, forum,
                                komentar pembaca atau pemirsa, dan bentuk lain.</li>
                        </ol>

                        <p>2. Verifikasi dan keberimbangan berita</p>

                        <ol>
                            <li>Pada prinsipnya setiap berita harus melalui verifikasi.</li>
                            <li>Berita yang dapat merugikan pihak lain memerlukan verifikasi pada berita yang sama untuk
                                memenuhi prinsip akurasi dan keberimbangan.</li>
                            <li>Ketentuan dalam butir (a) di atas dikecualikan, dengan syarat:
                                <ol>
                                    <li>Berita benar-benar mengandung kepentingan publik yang bersifat mendesak;</li>
                                    <li>Sumber berita yang pertama adalah sumber yang jelas disebutkan identitasnya,
                                        kredibel dan kompeten;</li>
                                    <li>Subyek berita yang harus dikonfirmasi tidak diketahui keberadaannya dan atau
                                        tidak dapat diwawancarai;</li>
                                    <li>Media memberikan penjelasan kepada pembaca bahwa berita tersebut masih
                                        memerlukan verifikasi lebih lanjut yang diupayakan dalam waktu secepatnya.
                                        Penjelasan dimuat pada bagian akhir dari berita yang sama, di dalam kurung dan
                                        menggunakan huruf miring.</li>
                                </ol>
                            </li>
                            <li>Setelah memuat berita sesuai dengan butir (c), media wajib meneruskan upaya verifikasi,
                                dan setelah verifikasi didapatkan, hasil verifikasi dicantumkan pada berita pemutakhiran
                                (update) dengan tautan pada berita yang belum terverifikasi.</li>
                        </ol>

                        <p>3. Isi Buatan Pengguna (User Generated Content)</p>

                        <ol>
                            <li>Media siber wajib mencantumkan syarat dan ketentuan mengenai Isi Buatan Pengguna yang
                                tidak bertentangan dengan Undang-Undang No. 40 tahun 1999 tentang Pers dan Kode Etik
                                Jurnalistik, yang ditempatkan secara terang dan jelas.</li>
                            <li>Media siber mewajibkan setiap pengguna untuk melakukan registrasi keanggotaan dan
                                melakukan proses log-in terlebih dahulu untuk dapat mempublikasikan semua bentuk Isi
                                Buatan Pengguna. Ketentuan mengenai log-in akan diatur lebih lanjut.</li>
                            <li>Dalam registrasi tersebut, media siber mewajibkan pengguna memberi persetujuan tertulis
                                bahwa Isi Buatan Pengguna yang dipublikasikan:
                                <ol>
                                    <li>Tidak memuat isi bohong, fitnah, sadis dan cabul;</li>
                                    <li>Tidak memuat isi yang mengandung prasangka dan kebencian terkait dengan suku,
                                        agama, ras, dan antargolongan (SARA), serta menganjurkan tindakan kekerasan;
                                    </li>
                                    <li>Tidak memuat isi diskriminatif atas dasar perbedaan jenis kelamin dan bahasa,
                                        serta tidak merendahkan martabat orang lemah, miskin, sakit, cacat jiwa, atau
                                        cacat jasmani.</li>
                                </ol>
                            </li>
                            <li>Media siber memiliki kewenangan mutlak untuk mengedit atau menghapus Isi Buatan Pengguna
                                yang bertentangan dengan butir (c).</li>
                            <li>Media siber wajib menyediakan mekanisme pengaduan Isi Buatan Pengguna yang dinilai
                                melanggar ketentuan pada butir (c). Mekanisme tersebut harus disediakan di tempat yang
                                dengan mudah dapat diakses pengguna.</li>
                            <li>Media siber wajib menyunting, menghapus, dan melakukan tindakan koreksi setiap Isi
                                Buatan Pengguna yang dilaporkan dan melanggar ketentuan butir (c), sesegera mungkin
                                secara proporsional selambat-lambatnya 2 x 24 jam setelah pengaduan diterima.</li>
                            <li>Media siber yang telah memenuhi ketentuan pada butir (a), (b), (c), dan (f) tidak
                                dibebani tanggung jawab atas masalah yang ditimbulkan akibat pemuatan isi yang melanggar
                                ketentuan pada butir (c).</li>
                            <li>Media siber bertanggung jawab atas Isi Buatan Pengguna yang dilaporkan bila tidak
                                mengambil tindakan koreksi setelah batas waktu sebagaimana tersebut pada butir (f).</li>
                        </ol>

                        <p>4. Ralat, Koreksi, dan Hak Jawab</p>

                        <ol>
                            <li>Ralat, koreksi, dan hak jawab mengacu pada Undang-Undang Pers, Kode Etik Jurnalistik,
                                dan Pedoman Hak Jawab yang ditetapkan Dewan Pers.</li>
                            <li>Ralat, koreksi dan atau hak jawab wajib ditautkan pada berita yang diralat, dikoreksi
                                atau yang diberi hak jawab.</li>
                            <li>Di setiap berita ralat, koreksi, dan hak jawab wajib dicantumkan waktu pemuatan ralat,
                                koreksi, dan atau hak jawab tersebut.</li>
                            <li>Bila suatu berita media siber tertentu disebarluaskan media siber lain, maka:
                                <ol>
                                    <li>Tanggung jawab media siber pembuat berita terbatas pada berita yang
                                        dipublikasikan di media siber tersebut atau media siber yang berada di bawah
                                        otoritas teknisnya;</li>
                                    <li>Koreksi berita yang dilakukan oleh sebuah media siber, juga harus dilakukan oleh
                                        media siber lain yang mengutip berita dari media siber yang dikoreksi itu;</li>
                                    <li>Media yang menyebarluaskan berita dari sebuah media siber dan tidak melakukan
                                        koreksi atas berita sesuai yang dilakukan oleh media siber pemilik dan atau
                                        pembuat berita tersebut, bertanggung jawab penuh atas semua akibat hukum dari
                                        berita yang tidak dikoreksinya itu.</li>
                                </ol>
                            </li>
                            <li>Sesuai dengan Undang-Undang Pers, media siber yang tidak melayani hak jawab dapat
                                dijatuhi sanksi hukum pidana denda paling banyak Rp500.000.000 (Lima ratus juta rupiah).
                            </li>
                        </ol>

                        <p>5. Pencabutan Berita</p>

                        <ol>
                            <li>Berita yang sudah dipublikasikan tidak dapat dicabut karena alasan penyensoran dari
                                pihak luar redaksi, kecuali terkait masalah SARA, kesusilaan, masa depan anak,
                                pengalaman traumatik korban atau berdasarkan pertimbangan khusus lain yang ditetapkan
                                Dewan Pers.</li>
                            <li>Media siber lain wajib mengikuti pencabutan kutipan berita dari media asal yang telah
                                dicabut.</li>
                            <li>Pencabutan berita wajib disertai dengan alasan pencabutan dan diumumkan kepada publik.
                            </li>
                        </ol>

                        <p>6. Iklan</p>

                        <ol>
                            <li>Media siber wajib membedakan dengan tegas antara produk berita dan iklan.</li>
                            <li>Setiap berita/artikel/isi yang merupakan iklan dan atau isi berbayar wajib mencantumkan
                                keterangan 'advertorial', 'iklan', 'ads', 'sponsored', atau kata lain yang menjelaskan
                                bahwa berita/artikel/isi tersebut adalah iklan.</li>
                        </ol>

                        <p>7. Hak Cipta</p>

                        <p>Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan
                            yang berlaku.</p>

                        <p>8. Pencantuman Pedoman</p>

                        <p>Media siber wajib mencantumkan Pedoman Pemberitaan Media Siber ini di medianya secara terang
                            dan jelas.</p>

                        <p>9. Sengketa</p>

                        <p>Penilaian akhir atas sengketa mengenai pelaksanaan Pedoman Pemberitaan Media Siber ini
                            diselesaikan oleh Dewan Pers.</p>

                        <p>Jakarta, 3 Februari 2012<br>
                            (Pedoman ini ditandatangani oleh Dewan Pers dan komunitas pers di Jakarta, 3 Februari 2012).
                        </p>
                    </div>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="border-b">
                    <div class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-indigo-500 active:text-indigo-600"
                        data-question>
                        <span class="font-semibold transition duration-100 md:text-lg">Kontak</span>
                        <span class="rotate-180 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div class="mb-4 @if ($post == 'Kontak') block @else hidden @endif text-gray-700 text-sm"
                        data-answer>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.0560350048067!2d105.23913323220914!3d-5.408436596077352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMjQnMzAuNCJTIDEwNcKwMTQnMzYuNiJF!5e0!3m2!1sen!2sid!4v1517727143774"
                            width="100%" height="450" frameborder="0" style="border:0"
                            allowfullscreen=""></iframe>
                        <p><strong>GRAHA RILIS.ID&nbsp;&nbsp;</strong></p>

                        <p>Jln. Sisingamaraja LK 2 RT 003/ RW 05 Kel. Kelapa Tiga Permai Kec. Tanjung Karang Barat <br>
                            Bandar Lampung - Lampung <br>
                            Telp/Fax. +62 821-7974-5809/ &nbsp;+62 813-7959-9699<br>
                            Hotline/Whatsapp: +62 821-7974-5809/ +62 813-7959-9699<br>
                            Email: rilisidlampung@gmail.com </p>

                        <p>Info Iklan dan Berlangganan
                            Whatsapp: 082177591156 | +62 821-7974-5809 | +62 813-7959-9699
                            Email: marketingrilislampung@gmail.com</p>

                        <p>Info Iklan dan Berlangganan E-Paper Rilis.id Lampung
                            Whatsapp: 082177591156 | +62 821-7974-5809 | +62 813-7959-9699
                            Email: marketingrilislampung@gmail.com</p>
                    </div>
                </div>
                <!-- question - end -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const questions = document.querySelectorAll('[data-question]');

            questions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    answer.classList.toggle('hidden');
                    const svg = question.querySelector('svg');
                    svg.classList.toggle('rotate-180');
                });
            });
        });
    </script>
    <div class="W-full md:w-[70%] mx-auto">
        <x-footer />
    </div>
</x-app>
