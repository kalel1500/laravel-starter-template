@php /** @var Src\Shared\Domain\Objects\DataObjects\SidebarLinkDo $link */ @endphp
@php /** @var Src\Shared\Domain\Objects\DataObjects\SidebarLinkDo $subLink */ @endphp

<x-sidebar>
    @if($showSearch)
        <x-slot:header>
            <x-sidebar.search-from :action="$searchAction"/>
        </x-slot:header>
    @endif

    @foreach($links as $link)
        @if($link->is_separator)
            <x-sidebar.separator/>
        @else
            <x-sidebar.item
                :href="$link->hasSubLinks() ? null : $link->getHref()"
                :counter="$link->hasCounter() ? $link->getCounter() : null"
            >
                @if(!is_null($link->icon))
                    <x-slot:icon>
                        {!! $link->icon !!}
                    </x-slot:icon>
                @endif
                {{ $link->text }}
                @if($link->hasSubLinks())
                    <x-slot:sublinks :id="$link->getCode()">
                        @foreach($link->sub_links as $subLink)
                            <x-sidebar.item sublink :href="$subLink->getHref()">{{ $subLink->text }}</x-sidebar.item>
                        @endforeach
                    </x-slot:sublinks>
                @endif
            </x-sidebar.item>
        @endif
    @endforeach

    @if($hasBottomLinks)
        <x-slot:footer>
            <x-sidebar.footer>
                @foreach($bottomLinks as $link)
                    <x-sidebar.footer.item
                        :href="$link->hasSubLinks() ? null : $link->getHref()"
                        :id="$link->code ?? null"
                        :tooltip="$link->tooltip ?? null"
                    >
                        {!! $link->icon !!}
                        @if($link->hasSubLinks())
                            <x-slot:subitems>
                                @foreach($link->sub_links as $subLink)
                                    <x-sidebar.footer.subitem>
                                        {!! $subLink->icon !!}
                                        {{ $subLink->text }}
                                    </x-sidebar.footer.subitem>
                                @endforeach
                            </x-slot:subitems>
                        @endif
                    </x-sidebar.footer.item>
                @endforeach
            </x-sidebar.footer>
        </x-slot:footer>
    @endif
</x-sidebar>
