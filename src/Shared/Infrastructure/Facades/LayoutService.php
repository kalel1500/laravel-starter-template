<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static int getMessageCounter()
 */
final class LayoutService extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'layoutService';
    }
}