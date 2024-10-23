<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Objects\DataObjects;

use Src\Shared\Domain\Objects\Collections\SidebarItemCollection;

final class SidebarItemDo extends NavigationItem
{
    public $code;
    public $icon;
    public $text;
    public $tooltip;
    public $route_name;
    public $collapsed;
    public $counter_action;
    public $is_separator;
    public $dropdown;

    protected $counter;
    protected $hasCounter;
    protected $hasDropdown;

    public function __construct(
        ?string                $code,
        ?string                $icon,
        ?string                $text,
        ?string                $tooltip,
        ?string                $route_name,
        ?string                $counter_action,
        ?bool                  $collapsed,
        ?bool                  $is_separator,
        ?SidebarItemCollection $dropdown,
    )
    {
        $this->code             = $code;
        $this->icon             = $icon;
        $this->text             = $text;
        $this->tooltip          = $tooltip;
        $this->route_name       = $route_name;
        $this->counter_action   = $counter_action;
        $this->collapsed        = $collapsed;
        $this->is_separator     = $is_separator;
        $this->dropdown         = $dropdown;

        $this->hasCounter       = !is_null($counter_action);
        $this->hasDropdown      = !is_null($dropdown);
    }

    protected static function createFromArray(array $data): self
    {
        return new self(
            code: $data['code'] ?? null,
            icon: $data['icon'] ?? null,
            text: $data['text'] ?? null,
            tooltip: $data['tooltip'] ?? null,
            route_name: $data['route_name'] ?? null,
            counter_action: $data['counter_action'] ?? null,
            collapsed: $data['collapsed'] ?? null,
            is_separator: $data['is_separator'] ?? null,
            dropdown: SidebarItemCollection::fromArray($data['dropdown'] ?? null),
        );
    }

    public function hasCounter(): bool
    {
        return $this->hasCounter;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }

    public function setCounter($counter): void
    {
        $this->counter = $counter;
    }
}
