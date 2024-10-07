<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Src\Shared\Domain\Objects\Collections\SidebarLinkCollection;

class Full extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
//        $links = SidebarLinkCollection::fromArray(config('template.sidebar_links'));
//        dd($links);
        return view('components.sidebar.full');
    }
}
