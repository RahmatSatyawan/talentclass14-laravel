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

    <header>
    <x-main-header :categories="$categories" slug="slug">
        <!-- Add your slot content here -->
    </x-main-header>

    @if (request()->is('/'))
        <div class="bg-white shadow dark:bg-black dark:text-white">
            <div class="mx-auto max-w-7xl px-0 py-6 sm:px-0 lg:px-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Welcome to Laravel News</h1>
            </div>
        </div>
    @elseif (request()->is('/news'))
        <div class="bg-white shadow dark:bg-black dark:text-white">
            <div class="mx-auto max-w-7xl px-0 py-6 sm:px-0 lg:px-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-700 dark:text-white">Detail News</h1>
            </div>
        </div>
    @endif
    </header>

    <main>
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="max-w-6xl mx-auto">
                <!-- Title Section -->
                <div class=" dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                    <h1 class="text-4xl font-bold mb-4 text-gray-900 dark:text-white">{{ $newsItem['title'] }}</h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">
                        {{ \Carbon\Carbon::parse($newsItem['date'])->format('F j, Y') }} - {{ $newsItem['category'] }}
                    </p>
                    <!-- Image Section -->
                    <div class="relative w-full h-96 overflow-hidden rounded-lg shadow-lg mb-4">
                        <img class="absolute inset-0 w-full h-full object-cover" src="{{ $newsItem['image_url'] }}" alt="{{ $newsItem['title'] }}">
                    </div>
                    <!-- Image Caption -->
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4 text-center">{{ $newsItem['image_caption'] }}</p>
                    <!-- Content Section -->
                    <div class="prose dark:prose-dark max-w-none">
                        <p class="text-lg text-gray-800 dark:text-gray-300 leading-relaxed">{{ $newsItem['body'] }}</p>
                    </div>
                </div>

                
                <div class="flex justify-between">
                    <a href="{{ route('category', ['category' => $newsItem['category']]) }}" class="flex items-center bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 p-2">
                        <div class="ml-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Back to Category</h3>
                        </div>
                    </a>
                    <a href="/" class="flex items-center bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 p-2">
                        <div class="ml-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Back to Home</h3>
                        </div>
                    </a>
                </div>
    
                <!-- Related News Section -->
              {{--   <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Related News</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($news->take(3) as $related)
                            <a href="{{ route('news.detail', $related['id']) }}" class="flex items-center bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 p-2">
                                <img class="w-16 h-16 object-cover rounded-lg" src="{{ $related['image_url'] }}" alt="{{ $related['title'] }}">
                                <div class="ml-3">
                                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white">{{ $related['title'] }}</h3>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">{{ \Carbon\Carbon::parse($related['date'])->format('F j, Y') }}</p>
                                </div>
                            </a>
                        @endforeach --}}
                    </div>
                </div>
            </>
        </div>
    </main>

    
    <x-main-footer />

    
    @livewireScripts
</body>
</html>