<?php 

require_once dirname(__DIR__, 3).'/vendor/autoload.php';

namespace HelloWorld;

use Alarm;

class SayHello
{
    public static function world()
    {
        return Alarm::fetchAll();
    }
}