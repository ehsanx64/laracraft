<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/assets/css/nunito.css"></link>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray dark:bg-gray-700 dark:text-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Sidebar -->
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex">
                    <div class="flex-initial basis-80 bg-gray-100 rounded text-gray-900 p-4 shadow-md">
                        <h3>SideBar</h3>

                        <ul class="list-none">
                            <li>
                                <x-nav-link :href="route('dashboard_postIndex')" :active="request()->routeIs('dashboard_postIndex')">
                                    {{ __('Blog Posts') }}
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('dashboard_categoryIndex')" :active="request()->routeIs('dashboard_categoryIndex')">
                                    {{ __('Blog Categories') }}
                                </x-nav-link>
                            </li>
                            <li>
                                <x-nav-link :href="route('dashboard_tagIndex')" :active="request()->routeIs('dashboard_tagIndex')">
                                    {{ __('Blog Tags') }}
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 grow">
                        <!-- Page Content -->
                        <main>
                            @isset($slot)
                                {{ $slot }}
                            @else
                                @yield('content')
                            @endisset
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
