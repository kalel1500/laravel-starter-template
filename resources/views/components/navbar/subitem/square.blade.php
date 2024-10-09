@props(['href' => '#', 'text'])

<a href="{{ $href }}" class="group block rounded-lg p-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600">
    {{ $slot }}
    <div class="text-sm text-gray-900 dark:text-white">{{ $text }}</div>
</a>