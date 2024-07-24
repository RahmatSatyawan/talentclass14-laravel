<x-default-layout>

    <x-main-carousel :news="$news">
        <!-- Add your slot content here -->
    </x-main-carousel>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold text-black dark:text-white">Latest News</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $newsItem)
                <x-main-card :news="$newsItem">
                    <!-- Add your slot content here -->
                </x-main-card>
            @endforeach
        </div>
        <!-- Your content -->
    </div>

    <x-main-pagination />

</x-default-layout>