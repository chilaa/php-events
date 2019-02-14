<?php

define("ROOT", __DIR__);

require_once ROOT . "/vendor/autoload.php";
require_once ROOT . "/lib/Dispatcher/EventDispatcher.php";
require_once ROOT . "/lib/user/UserEvents.php";
require_once ROOT . "/lib/Dispatcher/handlers.php";
require_once ROOT . "/lib/user/User.php";
require_once ROOT . "/addEvents.php";

use Lib\Dispatcher\EventDispatcher;
use Lib\User\UserEvents;
use Lib\User\User;



$dispatcher = new EventDispatcher();

addEvents($dispatcher);

$user = new User("Farna");
$userEvent = new UserEvents($user);
$dispatcher->dispatch(UserEvents::USER_CREATED, $userEvent);
