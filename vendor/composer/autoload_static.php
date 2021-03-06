<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24b94af3206af8b6c90d2cede5bb650a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit24b94af3206af8b6c90d2cede5bb650a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24b94af3206af8b6c90d2cede5bb650a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24b94af3206af8b6c90d2cede5bb650a::$classMap;

        }, null, ClassLoader::class);
    }
}
