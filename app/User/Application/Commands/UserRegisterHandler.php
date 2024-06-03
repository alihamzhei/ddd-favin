<?php

namespace App\User\Application\Commands;

use App\User\Domain\Aggregates\Address;
use App\User\Domain\Aggregates\Profile;
use App\User\Domain\Aggregates\User;
use App\User\Infrastructure\Repositories\UserRepository;

class UserRegisterHandler
{
    public function __construct()
    {
    }

    public function handler(UserRegisterCommand $command): string
    {
        $user = User::register(
            $command->name,
            $command->password
        );

        $user->addAddress(new Address(
            1,
            'IR',
            'TR',
            'MAin S'
        ));

        $userRepo = app(UserRepository::class);

        $userRepo->saveUser($user);

        foreach ($user::$events as $event){
            event($event);
        }

        return 'Hello World';
    }
}