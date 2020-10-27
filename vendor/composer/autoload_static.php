<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50a81cdbce54fe852b91ae1aa35c3247
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\BD\\' => 14,
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
            'App\\Config\\' => 11,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\BD\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models/dao',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'App\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50a81cdbce54fe852b91ae1aa35c3247::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50a81cdbce54fe852b91ae1aa35c3247::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
