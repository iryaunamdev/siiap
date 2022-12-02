<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIIAP') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <x-jet-banner />

        <div class="h-screen overflow-auto">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main class="flex items-left justify-left">
                <aside class="hidden md:block md:visible md:w-1/6 " aria-label="Sidebar">
                    @livewire('sys.sidemenu')
                </aside>

                <section class="w-full md:w-5/6">
                    {{ $slot }}

                    <footer class="text-xs text-center text-gray-400 py-4 px-8">
                        Sistema Integral de Información Académica de Posgrado<br>
                        Instituto de Radioastronomía y Astrofísica | UNAM Campus Morelia
                    </footer>
                </section>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        @yield('scripts')
    </body>
</html>
