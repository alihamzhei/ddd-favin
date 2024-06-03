<?php

namespace App\Shared\Domain\Aggregates;

abstract class AggregateRoot
{
    public static array $events = [];
    public static function record($event): void
    {
       self::$events[] = $event;
    }
}