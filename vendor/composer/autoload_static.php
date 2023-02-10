<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb902ccf5d3a01330a608533a773586f9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SOLID\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SOLID\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Principles',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb902ccf5d3a01330a608533a773586f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb902ccf5d3a01330a608533a773586f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb902ccf5d3a01330a608533a773586f9::$classMap;

        }, null, ClassLoader::class);
    }
}
