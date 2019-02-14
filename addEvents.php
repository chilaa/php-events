<?php

use Lib\User\UserEvents;
use Lib\Dispatcher\EventDispatcher;

function addEvents(EventDispatcher $dispatcher)
{
    $dispatcher->addListener(UserEvents::USER_CREATED, 'userCreated', 2);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'userCreatedSec', 3);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 5);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 4);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 4);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 4);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 4);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 3);
    $dispatcher->addListener(UserEvents::USER_CREATED, 'testSame', 1);

    $dispatcher->addListener(UserEvents::USER_LOGGED_IN, 'userCreated', 2);
    $dispatcher->addListener(UserEvents::USER_LOGGED_IN, 'userCreatedSec', 3);
    $dispatcher->addListener(UserEvents::USER_LOGGED_IN, 'testSame', 5);
    $dispatcher->addListener(UserEvents::USER_LOGGED_IN, 'testSame', 4);
    $dispatcher->addListener(UserEvents::USER_LOGGED_IN, 'testSame', 3);
    $dispatcher->addListener(UserEvents::USER_LOGGED_IN, 'testSame', 1);
}