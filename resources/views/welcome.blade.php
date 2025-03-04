<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite([
        'resources/css/app.css',
        'resources/scss/app.scss',
        'resources/js/app.js'
    ])
</head>

<body class="flex items-center lg:justify-center min-h-screen flex-col">
    <header class="bg-black text-white  fixed inset-x-0 top-0 z-10">
        <nav class="flex justify-between gap-4">
            <div class="flex-none branding">
                <h1 class="flex justify-between gap-4 px-8 py-4">
                    <a href="">{{ env('APP_NAME') }}</a>
                </h1>
            </div>
            <div class="navigation grow">
                <ul class="list-none flex justify-normal">
                    <li class="inline relative">
                        <a class="p-4 hover:bg-indigo-300 active" href="#">Menu 1</a>
                    </li>
                    <li class="inline">
                        <a class="p-4 hover:bg-indigo-300" href="#">Menu 2</a>
                    </li>
                    <li class="inline">
                        <a class="p-4 hover:bg-indigo-300" href="#">Menu 3</a>
                    </li>
                    <li class="inline">
                        <a class="p-4 hover:bg-indigo-300" href="#">Menu 4</a>
                    </li>
                    <li class="inline">
                        <a class="p-4 hover:bg-indigo-300" href="#">Menu 5</a>
                    </li>
                </ul>
            </div>
        @if (Route::has('login'))
            <div class="profile" x-data="{ open: false }">
                <div class="py-2 px-8 relative" x-on:click="open=true">
                    <span class="cursor-pointer hover:text-indigo-300 inline-flex shrink-0 rounded-full border border-grey-300 bg-grey-500 p-2 dark:border-grey-300/10 dark:bg-grey-400/10">
                        <svg class="size-5 stroke-grey-700 dark:stroke-grey-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </svg>
                    </span>
                    <div x-show="open" @click.outside="open = false" 
                    class="absolute bg-black right-8 top-14">
                    <ul>
                        <li>
                            <button x-on:click="profile_archive"
                            class="py-4 px-8 w-full hover:bg-indigo-300 min-w-48 text-left cursor-pointer">Archive</button>
                        </li>
                        <li>
                            <button x-on:click="profile_delete"
                            class="py-4 px-8 w-full hover:bg-indigo-300 min-w-48 text-left cursor-pointer">Delete</button>
                        </li>
                    </ul>

                    </div>
                </div>
                
                @auth
                <!-- <a href="{{ url('/dashboard') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Dashboard
                </a> -->
                @else
                <!-- <a href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                    Log in
                </a> -->

                @if (Route::has('register'))
                <!-- <a href="{{ route('register') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                    Register
                </a> -->
                @endif
                @endauth
            </div>
        </nav>
        @endif
    </header>
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">


        </main>
    </div>

    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>