<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Facades;

use Illuminate\Support\Facades\Facade;
use Src\Shared\Domain\Objects\DataObjects\UserInfoDo;

/**
 * @method static int getMessageCounter()
 * @method static mixed getNavbarNotifications()
 * @method static UserInfoDo getUserInfo()
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