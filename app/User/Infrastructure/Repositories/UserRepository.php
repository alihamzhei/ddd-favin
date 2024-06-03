<?php

namespace App\User\Infrastructure\Repositories;

use App\User\Domain\Aggregates\User;
use App\User\Domain\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function saveUser(User $user)
    {
    \App\Models\User::create(
        [
            'name' => $user->name,
            'password' => bcrypt($user->password)
        ]
    );


    if ($user->profile){
        // save profile
    }


    if ($user->address){
        // save profile
    }
    }
}