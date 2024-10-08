@props(['href', 'subitems', 'tooltip', 'id' => ''])

@php
    $isDropdown = isset($subitems);
    $hasTooltip = isset($tooltip);
    $itemClasses = 'inline-flex cursor-pointer justify-center rounded p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white';
@endphp

@if(!$isDropdown)

    <a href="{{ $href }}" @if($hasTooltip) data-tooltip-target="tooltip-{{ $id }}" @endif class="{{ $itemClasses }}">
        {{ $slot }}
    </a>

    @if($hasTooltip)
        <div id="tooltip-{{ $id }}" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300">
            {{ $tooltip }}
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    @endif

@else

    <button type="button" data-dropdown-toggle="dropdown-{{ $id }}" class="{{ $itemClasses }}">
        {{ $slot }}
    </button>
    <!-- Dropdown -->
    <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:bg-gray-700" id="dropdown-{{ $id }}">
        <ul class="py-1" role="none">
            {{ $subitems }}
        </ul>
    </div>

@endif
