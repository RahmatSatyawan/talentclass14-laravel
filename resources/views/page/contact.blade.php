<x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 mb-6 p-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                {!! $contact !!}
            </div>

            <div class="mb-5">
                <a href="/"><x-button>
                Back to Home
                </x-button>
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
