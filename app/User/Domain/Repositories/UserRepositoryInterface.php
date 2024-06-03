<?php

namespace App\User\Domain\Repositories;

use App\User\Domain\Aggregates\User;

interface UserRepositoryInterface
{
    public function saveUser(User $user);
}