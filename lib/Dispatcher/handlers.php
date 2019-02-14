<?php

use Lib\Dispatcher\Event;

function userCreated(Event $userEvent){
    print_r('userCreated   ');
}
function userCreatedSec(Event $userEvent){
    print_r("UserCreatedSec   ");
}
function testSame(Event $userEvent){
    print_r("testSame    ");
}