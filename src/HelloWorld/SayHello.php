<?php 

require_once __DIR__.'/vendor/autoload.php';

namespace HelloWorld;

use Alarm;

class SayHello
{
    public static function world()
    {
        return Alarm::fetchAll();
    }
}