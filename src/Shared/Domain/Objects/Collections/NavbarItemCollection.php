<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Objects\Collections;

use Src\Shared\Domain\Objects\DataObjects\NavbarItemDo;
use Thehouseofel\Hexagonal\Domain\Objects\Collections\Contracts\ContractCollectionDo;

final class NavbarItemCollection extends ContractCollectionDo
{
    protected const VALUE_CLASS = NavbarItemDo::class;

    public function __construct(NavbarItemDo ...$items)
    {
        $this->items = $items;
    }
}
