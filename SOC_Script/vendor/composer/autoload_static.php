<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitece0444264d1e772c49c4bb1e249b894
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitece0444264d1e772c49c4bb1e249b894::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitece0444264d1e772c49c4bb1e249b894::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
