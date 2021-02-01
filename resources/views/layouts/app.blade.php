<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laracasts Video Games</title>
        <link rel="stylesheet" href="/css/main.css">
        <livewire:styles>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>

    <body class="bg-gray-900 text-white">
        <header class="border-b border-gray-800">
            <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
                <div class="flex flex-col lg:flex-row items-center">
                    <a href="">
                        <img src="/laracasts-logo.svg" alt="logo" class="w-32 flex-none">
                    </a>
                    <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                        <li><a href="#" class="hover:text-gray-400">Games</a></li>
                        <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                        <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                    </ul>
                </div>
                <div class="flex items-center mt-6 lg:mt-0">
                    <livewire:search-dropdown/>
                    <div class="ml-6">
                        <a href="#"><img class="rounded-full w-8" src="/avatar.jpg" alt="search"></a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6">
                Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
            </div>
        </footer>

        <livewire:scripts>
        <script src="/js/app.js"></script>
        @stack('scripts')

    </body>
</html>