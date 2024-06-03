<?php

use App\User\Application\Commands as User;

return [
    User\UserRegisterCommand::class => User\UserRegisterHandler::class,
];