<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Objects\Collections;

use Src\Shared\Domain\Objects\DataObjects\SidebarItemDo;
use Thehouseofel\Hexagonal\Domain\Objects\Collections\Contracts\ContractCollectionDo;

final class SidebarItemCollection extends ContractCollectionDo
{
    protected const VALUE_CLASS = SidebarItemDo::class;

    public function __construct(SidebarItemDo ...$items)
    {
        $this->items = $items;
    }
}
