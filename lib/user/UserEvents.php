<?php


namespace Lib\User;

require_once ROOT . "/lib/Dispatcher/handlers.php";
require_once ROOT . "/lib/Dispatcher/Event.php";

use Lib\Dispatcher\Event;

class UserEvents extends Event
{

    const USER_CREATED = 'user.created';
    const USER_LOGGED_IN = 'user.logged.in';

    protected $user;

    /**
     * userEvents constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}