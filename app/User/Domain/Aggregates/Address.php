<?php

namespace App\User\Domain\Aggregates;

class Address
{
    public function __construct(
        public int $addressID,
        public string $country,
        public string $city,
        public string $street
    )
    {
    }

    public function getFullAddress()
    {
        return 'asedfaesdf';
    }



}