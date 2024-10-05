<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Objects\DataObjects;

use Src\Shared\Domain\Objects\Collections\SidebarLinkCollection;
use Thehouseofel\Hexagonal\Domain\Objects\DataObjects\ContractDataObject;

final class SidebarLinkDo extends ContractDataObject
{
    public function __construct(
        public ?string                $icon,
        public ?string                $text,
        public ?string                $href,
        public ?bool                  $is_separator,
        public ?bool                  $is_bottom,
        public ?SidebarLinkCollection $sub_links,
    )
    {
    }

    protected static function createFromArray(array $data): self
    {
        return new self(
            icon: $data['icon'] ?? null,
            text: $data['text'] ?? null,
            href: $data['href'] ?? null,
            is_separator: $data['is_separator'] ?? null,
            is_bottom: $data['is_bottom'] ?? null,
            sub_links: SidebarLinkCollection::fromArray($data['sub_links'] ?? null),
        );
    }
}
