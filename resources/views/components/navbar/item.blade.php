@props(['subitems', 'text', 'tooltip', 'user', 'dropdownFooter'])

@php
    $isDropdown = isset($subitems);
    $hasTooltip = isset($tooltip);
    $isUser     = isset($user);
    $itemClasses = $isUser
        ? 'mx-3 flex rounded-full text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 md:mr-0'
        : 'mr-1 rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:ring-4 focus:ring-gray-300 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-600';
@endphp

<button type="button"
        @if($isDropdown)
            data-dropdown-toggle="dropdown-{{ $attributes->get('id') }}" class="{{ $itemClasses }}"
        @else
            {{ $attributes->merge(['class' => $itemClasses ]) }}
        @endif
        @if($hasTooltip) data-tooltip-target="tooltip-{{ $attributes->get('id') }}" @endif
        >
    <span class="sr-only">{{ $text }}</span>
    {{ $slot }}
</button>

@if($hasTooltip)
    <x-tooltip id="tooltip-{{ $attributes->get('id') }}">{{ $tooltip }}</x-tooltip>
@endif

@if($isDropdown)

    @php
        $isBig = $subitems->attributes->whereStartsWith('big-')->isNotEmpty();
        $dropdownClasses = 'z-50 my-4 hidden list-none rounded bg-white text-base dark:bg-gray-700';
        $dropdownClasses = $isBig
            ? $dropdownClasses.' max-w-sm overflow-hidden shadow-lg divide-y divide-gray-100 dark:divide-gray-600'
            : $dropdownClasses.' w-56 shadow';
    @endphp

    <!-- Dropdown {{ $attributes->get('id') }} -->
    <div id="dropdown-{{ $attributes->get('id') }}" class="{{ $dropdownClasses }}">
        @if($isBig)
            <div class="block bg-gray-50 px-4 py-2 text-center text-base font-medium text-gray-700 dark:bg-gray-600 dark:text-gray-300">
                {{ $subitems->attributes->get('title') }}
            </div>
        @endif

        <div @class(['grid grid-cols-3 gap-4 p-4' => $subitems->attributes->has('big-square')])>
            {{ $subitems }}
        </div>

        @if($isBig && isset($dropdownFooter))
            <a href="{{ $dropdownFooter->attributes->get('href') ?? '#' }}" class="text-md block bg-gray-50 py-2 text-center font-medium text-gray-900 hover:bg-gray-100 dark:bg-gray-600 dark:text-white dark:hover:underline">
                <div class="inline-flex items-center">
                    {{ $dropdownFooter }}
                </div>
            </a>
        @endif
    </div>

@endif

{{--

<!-- User image -->
<button type="button" data-dropdown-toggle="dropdown-user" class="mx-3 flex rounded-full text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 md:mr-0">
    <span class="sr-only">Open user menu</span>
    <x-icon.user class="h-8 w-8 hover:bg-gray-700 hover:dark:bg-gray-300"/>
</button>
<!-- Dropdown user -->
<div id="dropdown-user" class="z-50 my-4 hidden w-56 list-none rounded bg-white text-base shadow dark:bg-gray-700">
    <div>
        <!-- Name and mail -->
        <div class="px-4 py-3 border-b border-gray-100 dark:border-gray-600">
            <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil Sims</span>
            <span class="block truncate text-sm text-gray-900 dark:text-white">name@flowbite.com</span>
        </div>
        <!-- Other links -->
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <!-- Link 1 -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My profile</a>
            </li>
            <!-- Link 2 -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Account settings</a>
            </li>
            <!-- Separator -->
            <li>
                <hr class="h-px my-2 bg-gray-100 border-0 dark:bg-gray-600">
            </li>
            <!-- Link 3 -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="mr-2 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                    </svg>
                    My likes
                </a>
            </li>
            <!-- Link 4 -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="mr-2 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                    </svg>
                    Collections
                </a>
            </li>
            <!-- Link 5 -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="text-blue-600 dark:text-blue-500 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                    </svg>
                    Pro version
                </a>
            </li>
            <!-- Separator -->
            <li>
                <hr class="h-px my-2 bg-gray-100 border-0 dark:bg-gray-600">
            </li>
            <!-- Link 6 -->
            <li>
                <a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
            </li>
        </ul>
    </div>
</div>--}}
