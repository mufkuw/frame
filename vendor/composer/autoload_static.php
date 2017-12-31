<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36383b9444f18796347e6fb6f3450770
{
    public static $files = array (
        '25a285fb4e6c8f6c85e2b6c53ac0eb4a' => __DIR__ . '/../..' . '/src/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Frame\\Controllers\\' => 18,
            'Frame\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Frame\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'Frame\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36383b9444f18796347e6fb6f3450770::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36383b9444f18796347e6fb6f3450770::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
