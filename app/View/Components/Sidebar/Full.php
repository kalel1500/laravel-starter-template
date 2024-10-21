<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Src\Shared\Domain\Objects\Collections\SidebarLinkCollection;
use Src\Shared\Domain\Objects\DataObjects\SidebarLinkDo;
use Src\Shared\Infrastructure\Facades\LayoutService;

class Full extends Component
{
    public $showSearch;
    public $searchAction;
    public $links;
    public $hasBottomLinks;
    public $bottomLinks;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->showSearch = config('template.sidebar.search.show');
        $this->searchAction = getUrlFromRoute(config('template.sidebar.search.route'));
        $this->links = SidebarLinkCollection::fromArray(config('template.sidebar.links'));
        $this->bottomLinks = SidebarLinkCollection::fromArray(config('template.sidebar.bottom_links'));
        $this->hasBottomLinks = $this->bottomLinks->countInt()->isBiggerThan(0);

        $this->links = $this->links->map(function (SidebarLinkDo $link) {
            if (!is_null($action = $link->counter_action)) {
                $link->setCounter(LayoutService::$action());
            }
            return $link;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.full');
    }
}
