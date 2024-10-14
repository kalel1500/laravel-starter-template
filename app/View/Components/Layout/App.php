<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class App extends Component
{
    public $title;
    public $sidebarCollapsed;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?string $title = null
    )
    {
        $this->title = $title ?? config('app.name');

        $links = collect(config('template.sidebar_links'));
        $firstCollapsed = $links->flatMap(function ($item) {
            // Combinar el array con sus sub_links (si existen)
            return array_merge([$item], $item['sub_links'] ?? []);
        })->first(function ($item) {
            return Arr::get($item, 'route_name') === Route::currentRouteName(); // Puedes ajustar el filtro aquí
        });

        $this->sidebarCollapsed = Arr::get($firstCollapsed, 'collapsed', false);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.app');
    }
}
