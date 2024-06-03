<?php

namespace App\User\Domain\Aggregates;

use App\Shared\Domain\Aggregates\AggregateRoot;
use App\User\Domain\Events\UserRegistered;

class User extends AggregateRoot
{
    public array $address = [];
    public Profile $profile;

    public function __construct(
        public int $userID,
        public string $name,
        public string $password
    )
    {
    }

    public static function register($name , $password): User
    {
        static::record(new UserRegistered(1 , $name));

       return new self(1, $name ,$password);

    }
    public function addAddress(Address $address)
    {

        $this->address[] = $address;
    }

    public function setProfile(Profile $profile)
    {

        $this->profile = $profile;


    }
}