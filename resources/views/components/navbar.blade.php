<div class="bg-sky-950 sticky top-0 z-50">
    <div class="navbar  md:w-[72%] mx-auto md:pt-4 bgs-red-400">
        <div class="navbar-start bg-sblack">
            <div class="dropdown">
                <div id="menu-button" tabindex="0" role="button" class="btn btn-ghost lg:hidden"
                    data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation" onclick="toggleMenu()">
                    <svg id="icon-hamburger" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                    <svg id="icon-close" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div id="drawer-navigation"
                    class="fixed top-0 left-0 z-50 w-screen h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
                    tabindex="-1" aria-labelledby="drawer-navigation-label">
                    <h5 id="drawer-navigation-label"
                        class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400 ">Menu</h5>
                    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <div class="py-4 overflow-y-auto">
                        <ul class="space-y-2 font-medium">
                            <li x-data="{ open: false }">
                                <a href="#" @click.prevent="open = !open"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 22 21">
                                        <path
                                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                        <path
                                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                    </svg>
                                    <span class="ms-3">Rilis Network</span>
                                    <svg :class="{ 'rotate-180': open }"
                                        class="w-5 h-5 ml-auto transition-transform transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <ul x-show="open" x-transition class="pl-8 mt-2 space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <span class="ms-3">Rilis Lampung</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                            <span class="ms-3">Rilis ID</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="/index"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 18 18">
                                        <path
                                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                    </svg>

                                    <span class="flex-1 ms-3 whitespace-nowrap">Index</span>

                                </a>
                            </li>
                            <li>
                                <a href="/"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Subscribe</span>

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
            <a href="/"><img class="w-24 hadow-sm " src="{{ asset('img/rilis-logo.png') }}" alt=""></a>
        </div>
        <div class="navbar-center hidden bg-oransge-900 z-50  lg:flex text-white">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btns m-1 flex items-center "> <svg
                        class="w-6 h-6 text-white dark:text-white" aria-hidden="true" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                    </svg>Rilis Network</div>
                <ul tabindex="0"
                    class="dropdown-content z-[1] menu p-2 shadow-sm shadow-green-700 text-wkhite bg-sky-800 rounded-t-sm w-52">
                    <li><a>Rilis Lampung</a></li>
                    <li><a>Rilis ID</a></li>
                </ul>
            </div>
            <ul class="menu menu-horizontal px-1 text-lg items-center gap-4 z-50">

                <li><a href="/">Subscribe</a></li>
                <li><a href="/index">Index</a></li>
            </ul>

        </div>
        <div class="navbar-end bg-blsack items-center justify-center ptS-4 m-3s ">

            <form action="/index" class="">
                <div class="flex relative rounded-md md:w-80 px-4 max-w-xl">
                    <input type="text" name="search" id="query" placeholder="Cari berita"
                        value="{{ request('search') }}"
                        class="w-full p-2 rounded-md border-2 border-r-white rounded-r-none border-gray-300 placeholder-gray-500 dark:placeholder-gray-300 dark:bg-gray-500dark:text-gray-300 dark:border-none " />
                    <button
                        class="inline-flex items-center gap-2 bg-green-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md">

                        <span class=" md:block">
                            <svg class="text-gray-200 h-5 w-5 p-0 fill-current"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>


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
