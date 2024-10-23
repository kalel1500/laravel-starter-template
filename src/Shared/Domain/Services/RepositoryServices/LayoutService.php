<?php

declare(strict_types=1);

namespace Src\Shared\Domain\Services\RepositoryServices;

use Src\Shared\Domain\Objects\DataObjects\UserInfoDo;

final class LayoutService
{
    public function getMessageCounter(): int
    {
        return 4;
    }

    public function getNavbarNotifications()
    {
        return [
            [
                'icon'  => 'icon.user',
                'text'  => 'New message from Bonnie Green: "Hey, what\'s up? All set for the presentation?"',
                'time'  => 'a few moments ago',
            ],
            [
                'icon'  => 'icon.user',
                'text'  => 'Jese leos and 5 others started following you.',
                'time'  => '10 minutes ago',
            ],
            [
                'icon'  => 'icon.user',
                'text'  => 'Joseph Mcfall and 141 others love your story. See it and view more stories.',
                'time'  => '44 minutes ago',
            ],
            [
                'icon'  => 'icon.user',
                'text'  => 'Leslie Livingston mentioned you in a comment: @bonnie.green what do you say?',
                'time'  => '1 hour ago',
            ],
            [
                'icon'  => 'icon.user',
                'text'  => 'Robert Brown posted a new video: Glassmorphism - learn how to implement the new design trend.',
                'time'  => '3 hours ago',
            ],
        ];
    }

    public function getUserInfo(): UserInfoDo
    {
        return UserInfoDo::fromArray([
            'name' => 'Neil Sims',
            'email' => 'name@flowbite.com'
        ]);
    }
}