<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Objects\Collections;

use Src\Shared\Domain\Objects\DataObjects\SidebarLinkDo;
use Thehouseofel\Hexagonal\Domain\Objects\Collections\Contracts\ContractCollectionDo;

final class SidebarLinkCollection extends ContractCollectionDo
{
    protected const VALUE_CLASS = SidebarLinkDo::class;

    public function __construct(SidebarLinkDo ...$items)
    {
        $this->items = $items;
    }
}
