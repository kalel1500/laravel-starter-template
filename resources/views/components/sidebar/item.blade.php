@use(Illuminate\Support\Facades\Request)
@props(['icon', 'sublinks', 'counter'])

@php
    $isDropdown = isset($sublinks);
    $isSublink = $attributes->has('sublink');
    $linkClasses = 'group flex w-full items-center rounded-lg p-2 text-base font-medium text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700';
    $iconHtml = !isset($icon) ? '' : '<div class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">' . $icon . '</div>';
    $spanClasses = !isset($icon) ? '' : 'ml-3';
    $dropdownId = $isDropdown ? $sublinks->attributes->get('id') : '';

    $currentUrl = Request::fullUrl();
    $linkIsActive = $currentUrl === $attributes->get('href');

    $dropdownIsOpen = false;
    if ($isDropdown) {
        // Expresión regular para encontrar todos los href en los enlaces
        preg_match_all('/<a\s+href=["\']([^"\']+)["\']/', $sublinks, $matches);
        $hrefs = $matches[1]; // $matches[1] contiene todos los href encontrados
        $dropdownIsOpen = in_array($currentUrl, $hrefs); // Comprueba si la URL actual está en la lista
    }

    /*
     * Código interesante por si queremos sobreescribir las clases del svg en lugar de envolverlo con un div
    // Obtén el HTML del SVG desde $icon
    $iconHtml = $icon->toHtml(); // Asegúrate de que $icon puede ser convertido a HTML.
    // Reemplaza la clase del SVG
    $modifiedIconHtml = preg_replace('/class="([^"]*)"/', 'class="h-6 w-6 flex-shrink-0 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white"',$iconHtml);
    */
@endphp

<li>
    @if($isDropdown)
        <button type="button" class="{{ $linkClasses }}" aria-controls="dropdown-{{ $dropdownId }}" data-collapse-toggle="dropdown-{{ $dropdownId }}">
            {!! $iconHtml !!}
            <span @class([$spanClasses, 'flex-1 whitespace-nowrap text-left'])>{{ $slot }}</span>
            <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>

        <ul id="dropdown-{{ $dropdownId }}" @class(['space-y-2 py-2', 'hidden' => !$dropdownIsOpen])>
            {{ $sublinks }}
        </ul>
    @else
        <a {{ $attributes->only('href')->merge(['href' => '#']) }} @class([$linkClasses, 'bg-gray-100 dark:bg-gray-700' => $linkIsActive, 'pl-11' => $isSublink])>
            @if ($isSublink)
                {{ $slot }}
            @else
                {!! $iconHtml !!}
                <span @class([$spanClasses, 'flex-1 whitespace-nowrap' => isset($counter)])>{{ $slot }}</span>
                @isset($counter)
                    <span class="text-blue-800 bg-blue-100 dark:bg-blue-200 dark:text-blue-800 inline-flex h-5 w-5 items-center justify-center rounded-full text-xs font-semibold">{{ $counter }}</span>
                @endisset
            @endif
        </a>
    @endif
</li>
