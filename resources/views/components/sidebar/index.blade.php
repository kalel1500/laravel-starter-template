@props(['header','footer'])

<aside class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-14 transition-transform dark:border-gray-700 dark:bg-gray-800 md:translate-x-0" aria-label="Sidenav" id="drawer-navigation">
    <div class="scroller h-[calc(100vh-7rem)] overflow-y-auto bg-white px-3 py-5 dark:bg-gray-800">
        {{ $header ?? '' }}
        <ul class="space-y-2">
            {{ $slot }}
        </ul>
    </div>
    {{ $footer ?? '' }}
</aside>
