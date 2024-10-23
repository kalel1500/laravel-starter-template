<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Objects\DataObjects;

final class NavbarItemDo extends NavigationItem
{
    public $code;
    public $icon;
    public $text;
    public $time;
    public $tooltip;
    public $route_name;
    public $is_theme_toggle;
    public $is_user;
    public $is_separator;
    public $dropdown;

    public function __construct(
        ?string             $code,
        ?string             $icon,
        ?string             $text,
        ?string             $time,
        ?string             $tooltip,
        ?string             $route_name,
        ?bool               $is_theme_toggle,
        ?bool               $is_user,
        ?bool               $is_separator,
        ?NavbarDropdownDo   $dropdown,
    )
    {
        $this->code             = $code;
        $this->icon             = $icon;
        $this->text             = $text;
        $this->time             = $time;
        $this->tooltip          = $tooltip;
        $this->route_name       = $route_name;
        $this->is_theme_toggle  = $is_theme_toggle;
        $this->is_user          = $is_user;
        $this->is_separator     = $is_separator;
        $this->dropdown         = $dropdown;
        $this->hasDropdown      = !is_null($dropdown);
    }

    protected static function createFromArray(array $data): self
    {
        return new self(
            code:               $data['code'] ?? null,
            icon:               $data['icon'] ?? null,
            text:               $data['text'] ?? null,
            time:               $data['time'] ?? null,
            tooltip:            $data['tooltip'] ?? null,
            route_name:         $data['route_name'] ?? null,
            is_theme_toggle:    $data['is_theme_toggle'] ?? null,
            is_user:            $data['is_user'] ?? null,
            is_separator:       $data['is_separator'] ?? null,
            dropdown:           NavbarDropdownDo::fromArray($data['dropdown'] ?? null),
        );
    }
}
