<?php

define("ROOT", __DIR__);

require_once ROOT . "/vendor/autoload.php";
require_once ROOT . "/lib/Dispatcher/EventDispatcher.php";
require_once ROOT . "/lib/user/UserEvents.php";
require_once ROOT . "/lib/Dispatcher/handlers.php";
require_once ROOT . "/lib/user/User.php";

use lib\dispatcher\event;
use Lib\Dispatcher\EventDispatcher;
use Lib\User\UserEvents;
use Lib\User\User;


//require_once "Dispatcher/EventDispatcher.php";
//require_once "Dispatcher/handlers.php";
//require_once "UserEvents.php";
//require_once "User.php";
//require_once "Dispatcher/Event.php";

$dispatcher = new EventDispatcher();

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

$user = new User("Farna");
$userEvent = new UserEvents($user);
$dispatcher->dispatch(UserEvents::USER_CREATED, $userEvent);
