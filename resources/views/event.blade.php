<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Events</title>
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
    <div class=" my-5 justify-center px-8 py-5 mx-auto">
        <div class="relative overflow-hidden">
            <img class="object-cover w-full h-full" src="{{ URL('images/gunung.jpg') }} "/>
        </div>
    </div>

    <a href="/home" class="my-5 px-8 py-5 font-bold font-poppins hover:text-gray-400">
    ← kembali
    </a></br></br>

    <h1 class="text-3xl font-bold my-5 px-8 py-5 font-Poppins">Event</h1>
    <img src="{{ URL('images/gunung.jpg') }}" class="object-cover w-full h-full my-5 px-8 py-5 mx-auto justify-center">
    <h1 class="my-5 px-8 py-5 font-bold text-3xl">Bau Nyale</h1>
    <div class="content flex py-2">
            <img class="my-5 right-[60px] left-[60px] w-[45px] h-[45px] " src="{{ URL('images/lokasi.png') }}" alt="">
            <div class="item-body px-2 ">
                Central Lombok, Pantai Kuta Seger
            </div>
    </div>
    
    <h1 class="text-3xl font-bold my-5 px-8 py-5 font-Poppins">Details</h1>
    <p class="my-5 px-8 py-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames ac turpis. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Nulla posuere sollicitudin aliquam ultrices sagittis orci. Mattis enim ut tellus elementum sagittis. Nulla at volutpat diam ut. Et malesuada fames ac turpis egestas sed tempus. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Id ornare arcu odio ut sem nulla pharetra diam sit. Aliquet sagittis id consectetur purus ut faucibus. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Risus pretium quam vulputate dignissim suspendisse. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Ut placerat orci nulla pellentesque dignissim enim sit. Libero nunc consequat interdum varius sit amet mattis vulputate enim. Cras pulvinar mattis nunc sed. Eu augue ut lectus arcu bibendum at varius vel.</p>
    <p class="my-5 px-8 py-5">Venenatis tellus in metus vulputate eu scelerisque felis. Tincidunt ornare massa eget egestas. Dolor sit amet consectetur adipiscing elit duis. Ligula ullamcorper malesuada proin libero. Feugiat in fermentum posuere urna nec tincidunt praesent. Vestibulum morbi blandit cursus risus at. Vel pharetra vel turpis nunc eget lorem dolor. In fermentum posuere urna nec. Interdum consectetur libero id faucibus nisl tincidunt eget. Viverra maecenas accumsan lacus vel. Dolor purus non enim praesent elementum facilisis leo vel. Sagittis purus sit amet volutpat consequat mauris nunc congue. Dignissim sodales ut eu sem. Faucibus nisl tincidunt eget nullam non nisi est sit amet. Vitae et leo duis ut diam. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Magna sit amet purus gravida. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Nunc aliquet bibendum enim facilisis gravida neque. Dictum sit amet justo donec enim diam.</p>


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