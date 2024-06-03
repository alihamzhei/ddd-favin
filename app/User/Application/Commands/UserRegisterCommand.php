<?php

namespace App\User\Application\Commands;
class UserRegisterCommand
{
    public function __construct(
        public string $name,
        public string $password
    ) {
    }
}