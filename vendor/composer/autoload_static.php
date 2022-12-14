<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fc875b4502addb292d52f4401f8261b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HelloWorld\\' => 11,
        ),
        '/' => 
        array (
            '/Alarm\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HelloWorld\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/test',
        ),
        '/Alarm\\' => 
        array (
            0 => '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fc875b4502addb292d52f4401f8261b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fc875b4502addb292d52f4401f8261b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
