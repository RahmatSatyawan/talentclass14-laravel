<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      
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
      
      <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
		<div class="mx-auto bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 min-h-screen items-center selection:bg-[#FF2D20] selection:text-white w-full max-w-2xl px-0 lg:max-w-7xl">
	
	
		{{-- <head>  
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
     
		</head> --}}
	
		<main> {{ $slot }} </main>

		<x-main-footer> 
			<!-- Add your slot content here -->
		</x-main-footer>

		</div>
		
		@livewireScripts
	</body>

</html>
