<?php

namespace App\Shared\Application\Command;

class CommandBus
{
    public function handle($command): mixed
    {
        $commands = config('commands');

        $handler = new $commands[$command::class]();

        return $handler->handler($command);
    }
}