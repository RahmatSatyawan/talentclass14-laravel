<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
    <title>Laravel :  </title>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="mx-auto bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 min-h-screen items-center selection:bg-[#FF2D20] selection:text-white w-full max-w-2xl px-0 lg:max-w-7xl">

    <head>  
    <x-main-header :categories="$categories" slug="slug">
        <!-- Add your slot content here -->
    </x-main-header>

    @if (request()->is('/'))
        <header class="bg-white shadow dark:bg-black dark:text-white">
            <div class="mx-auto max-w-7xl px-0 py-6 sm:px-0 lg:px-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Welcome to Laravel News</h1>
            </div>
        </header>
    @elseif (request()->is('/category'))
        <header class="bg-white shadow dark:bg-black dark:text-white">
            <div class="mx-auto max-w-7xl px-0 py-6 sm:px-0 lg:px-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Category : {{ category }}</h1>
            </div>
            </div>
        </header>
    @endif
    
    <x-main-caurosel :news="$news">
        <!-- Add your slot content here -->
    </x-main-caurosel>

    </head>

      <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-semibold text-black dark:text-white">Latest News</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($news as $newsItem )
                    <x-main-card :news="$newsItem" >
                        <!-- Add your slot content here -->
                    </x-main-card>
                @endforeach
            </div>
          <!-- Your content -->
        </div>
      </main>

      {{-- {{ $news->links() }} --}}
    {{-- <x-main-pagination /> --}}

    <x-main-footer />

    </div>
    
    @livewireScripts
</body>
</html>