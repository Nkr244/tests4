<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93b7e5626edb42187bc148341b8533a9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93b7e5626edb42187bc148341b8533a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93b7e5626edb42187bc148341b8533a9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
