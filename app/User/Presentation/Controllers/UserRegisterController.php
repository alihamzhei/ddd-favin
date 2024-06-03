<?php

namespace App\User\Presentation\Controllers;


use App\Shared\Application\Command\CommandBus;
use App\User\Application\Commands\UserRegisterCommand;
use Illuminate\Http\Request;

class UserRegisterController
{
    public function __construct(public CommandBus $commandBus)
    {
    }

    public function register(Request $request)
    {


       $command = new UserRegisterCommand(
            $request->name,
            $request->password,
       );

       $this->commandBus->handle($command);
    }
}