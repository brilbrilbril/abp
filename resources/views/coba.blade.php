<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>

<!-- navbar -->
<header>
    <div class="w-full text-green-700 bg-white font-lato ">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <img src="{{ URL('images/logo.jpg') }}" class="h-10 mr-3 sm:h-9 " />
                <a href="#" class="tracking-widest text-lg font-lato text-zinc-500 ">GoTravelling</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">HOME</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">DESTINATION</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">CONTACT</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">BLOG</a>
                <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> Sign Out</a>
            </nav>
        </div>
    </div>
</header>




<!-- gambar utama -->
<div class="container my-5 justify-center px-8 py-5 mx-auto">
    <div class="relative overflow-hidden">
        <img class="object-cover w-full h-full" src="{{ URL('images/gunung.jpg') }} "/>
    </div>
</div>



<!-- search bar -->
<form action="" class="flex justify-center">
    <div class="relative mb-3 xl:w-2/5 md:w-64">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 fill-green-600"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="voice-search" class="bg-gray-50 border text-green-900 text-sm rounded-xl block w-full pl-10 p-2.5 s " placeholder="Where are you going ?" required>
    </div>
</form>


<p class=" text-left ml-8 my-3 font-poppins font-semibold text-gray-500 text-base md:text-2xl    ">Top Categories</p>
    <ul class="flex justify-start my-8 ml-8 overflow-x-auto md:overflow-y-hidden lg:overflow-hidden">
        <li class="mr-6 ">
            <a class=" text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Beaches</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Deserts</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Mountains</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Waterfall</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Houseboats</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Countryside</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Camping</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-green-700  decoration-green-700 active:text-green-700 active:font-semibold font-poppins" href="#">Tropical</a>
        </li>
    </ul>


<div class=" container ">
        <div class="grid grid-cols-2 gap-5 my-5  md:grid-cols-3 lg:grid-cols-4 ">

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4 ">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                    <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>
        </div>
  </div>

    <h1 class="text-center text-2xl font-poppins mt-20 my-3 md:text-4xl lg:text-5xl">
        <span class="font-semibold"> The</span>
        <span class="font-semibold text-green-800">best place</span>
        <span class="font-semibold">for vacation</span>
    </h1>

    <ul class="flex justify-center  text-sm md:text-lg lg:text-xl">
        <li class="mr-6">
            <a class="text-gray-500 text-center hover:text-black active:text-black active:underline decoration-green-600  font-poppins" href="/event">Special Deals</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-black active:text-black active:underline decoration-green-600 font-poppins" href="#">Populer</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-black active:text-black active:underline decoration-green-600 font-poppins" href="#">Recommendation</a>
        </li>
        <li class="mr-1 lg:mr-6">
            <a class="text-gray-500  hover:text-black active:text-black active:underline decoration-green-600 font-poppins" href="#">Best Price</a>
        </li>
    </ul>

   <div class=" container mx-auto ">
        <div class="grid grid-cols-2 gap-5 my-5  md:grid-cols-3 lg:grid-cols-4 ">

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4 ">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                    <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>

            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ URL('images/cimage.jpg') }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">Rege-Rege</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>4.7</a>
                    </span>

                </header>

                <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">Tempat Wisata</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">keterangan tempat wisata</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">
                            <a class="text-xs text-gray-500 mr-2 lg:text-sm">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>
        </div>
  </div>
    <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
        <button class="bg-transparent hover:bg-blue-500 text-black font-thin hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
        View All
        </button>
    </div>
    <h1 class="font-bold text-2xl mt-10 ml-8 md:text-3xl lg:text-3xl"> Events</h1><br>



    <!-- Slider Component -->
    <div class="w-full garis-merah flex gap-10 overflow-x-auto mt-10 ml-8">
        <!-- Component Events -->
        <div class="w-[420px]">
            <!-- Image and Judul -->
            <a href="/event">
            <div class="w-[420px] h-[362px] rounded-xl bg-[#71C3FD] relative">

                <!-- Judul -->
                <p class="pl-5 pt-5 text-xl font-bold text-white hover:text-black" href="/event"> 21 June 2021</p>

                <!-- Image Container -->
                <div class="w-[372px] h-[296px] absolute right-0 bottom-0">
                    <img class="w-full h-full" src="{{ URL('images/gunung.jpg') }} " alt="ss">
                </div>
            </div>
            </a>
            <!-- Description -->
            <div class="mt-4 p-2">
                <p class="mb-4 text-lg font-bold">The Amazing Difference a Year of Travelling.</p>
                <p>There isn’t a relationship around that can survive without trust. My relationship with my dog Peyton is deep...</p>
            </div>
        </div>
        <!-- Component Events -->
        <div class="w-[420px] ">
            <a href="/event">
            <!-- Image and Judul -->
            <div class="w-[420px] h-[362px] rounded-xl bg-[#FA7436] relative">

                <!-- Judul -->
                <p class="pl-5 pt-5 text-xl font-bold text-white"> 28 June 2021</p>

                <!-- Image Container -->
                <div class="w-[372px] h-[296px] absolute right-0 bottom-0">
                    <img class="w-full h-full" src="{{ URL('images/gunung.jpg') }} " alt="ss">
                </div>
            </div>
            </a>
            <!-- Description -->
            <div class="mt-4 p-2">
                <p class="mb-4 text-lg font-bold">Reflections on 5 Months of Travel: Time to Hang</p>
                <p>Doting pet parents have a relentless need to constantly photograph every adorable pet moment...</p>
            </div>
        </div>
        <!-- Component Events -->
        <div class="w-[420px] ">
            <a href="/event">
            <!-- Image and Judul -->
            <div class="w-[420px] h-[362px] rounded-xl bg-[#FC747B] relative">

                <!-- Judul -->
                <p class="pl-5 pt-5 text-xl font-bold text-white"> 10 July 2021</p>

                <!-- Image Container -->
                <div class="w-[372px] h-[296px] absolute right-0 bottom-0">
                    <img class="w-full h-full" src="{{ URL('images/gunung.jpg') }} " alt="ss">
                </div>
            </div>
            </a>
            <!-- Description -->
            <div class="mt-4 p-2">
                <p class="mb-4 text-lg font-bold">How to Save Money While Visiting Africa .</p>
                <p>It is easy to forget that animals are living creatures with a beating heart.</p>
            </div>
        </div>
    </div>
</body>
</html>
