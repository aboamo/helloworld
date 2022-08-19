<?php 
namespace HelloWorld;

use Alarm;

class SayHello
{
    public static function world()
    {
        return Alarm::fetchAll();
    }
}