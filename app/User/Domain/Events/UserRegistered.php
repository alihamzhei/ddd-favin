<?php

namespace App\User\Domain\Events;

class UserRegistered
{
    public function __construct(
        public int $userID,
        public string $name
    ) {
    }
}