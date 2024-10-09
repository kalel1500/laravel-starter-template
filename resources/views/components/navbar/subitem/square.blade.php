@props(['href' => '#', 'text'])

<a href="{{ $href }}" class="group block rounded-lg p-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600">
    <div class="mx-auto mb-1 h-7 w-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400">
        {{ $slot }}
    </div>
    <div class="text-sm text-gray-900 dark:text-white">{{ $text }}</div>
</a>