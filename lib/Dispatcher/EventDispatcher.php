<?php

//require_once '';

namespace Lib\Dispatcher;


class EventDispatcher
{

    /**
     * @var array
     */
    protected $listeners = [];

    /**
     * @param $eventName
     * @param callable $handler
     */
    public function addListener($eventName, callable $handler, $weight = 0)
    {
        $this->listeners[$eventName][$weight][] = $handler;
        ksort($this->listeners[$eventName]);
//        print_r($this->listeners);
    }

    public function dispatch($eventName, Event $userEvent)
    {


        if ($listeners = $this->listeners[$eventName]) {
            foreach ($listeners as $weight) {
                foreach ($weight as $listener){
                    $listener($userEvent);
                }

            }
        }
        print_r($this->listeners);
    }
}