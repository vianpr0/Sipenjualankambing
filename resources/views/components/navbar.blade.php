<div class="">
    <div class="navbar bg-sbase-100 md:w-[90%S] mx-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <div id="menu-button" tabindex="0" role="button" class="btn btn-ghost lg:hidden" onclick="toggleMenu()">
                    <svg id="icon-hamburger" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <ul id="dropdown-menu" tabindex="0" class="menu menu-sm dropdown-content text-lg mt-3 z-50 p-3  shadow text-black rounded-md w-screen h-screen hidden bg-white">
                    <li class="w-fit p-2"><a>Rilis Network</a></li>
                    <li class="w-fit p-2 "><a>Index</a></li>
                    <li class="w-fit p-2"><a>Subscribe</a></li>
                </ul>
            </div>
            <a href="/"><img class="w-24" src="https://lampung.rilis.id/image/logoRilislampung.png" alt=""></a>
        </div>
        <div class="navbar-center hidden lg:flex text-black">
            <ul class="menu menu-horizontal px-1 text-lg items-center gap-4">
                <a href="/">Rilis Network</a>
                <a href="/">Subscribe</a>
                <a href="/index">Index</a>
            </ul>
        </div>
        <div class="navbar-end">
            <input type="text" placeholder="Cari Berita" class="input border-base-100 w-24 md:w-auto bg-white text-black border-2" />
        </div>
    </div>
</div>

<script>
function toggleMenu() {
    const menuButton = document.getElementById('menu-button');
    const iconHamburger = document.getElementById('icon-hamburger');
    const iconClose = document.getElementById('icon-close');
    const dropdownMenu = document.getElementById('dropdown-menu');

    dropdownMenu.classList.toggle('hidden');
    iconHamburger.classList.toggle('hidden');
    iconClose.classList.toggle('hidden');
}
</script>
