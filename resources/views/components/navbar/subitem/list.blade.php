@props(['time', 'icon', 'href' => '#'])

<a href="{{ $href }}" class="flex border-b px-4 py-3 hover:bg-gray-100 dark:border-gray-600 dark:hover:bg-gray-600">
    <div class="flex-shrink-0 h-11 w-11">
        {{ $icon ?? '' }}
    </div>
    <div class="w-full pl-3">
        <div class="mb-1.5 text-sm font-normal text-gray-500 dark:text-gray-400">
            {{ $slot }}
        </div>
        @isset($time)
            <div class="text-blue-600 dark:text-blue-500 text-xs font-medium">{{ $time }}</div>
        @endisset
    </div>
</a>