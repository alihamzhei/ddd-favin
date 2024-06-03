<?php

namespace App\User\Domain\Aggregates;

class Profile
{
    public function __construct(
        public int $profileId,
        public string $mobile,
        public string $lastName
    )
    {
    }


}