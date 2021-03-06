<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7eb1ef8cce1406ed50f0cbf005219be7
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7eb1ef8cce1406ed50f0cbf005219be7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7eb1ef8cce1406ed50f0cbf005219be7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7eb1ef8cce1406ed50f0cbf005219be7::$classMap;

        }, null, ClassLoader::class);
    }
}
