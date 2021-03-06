<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit683c1ea1b70cf6e4deebffc8dd691b7d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Starmoozie\\Nusabook\\Firebase\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Starmoozie\\Nusabook\\Firebase\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit683c1ea1b70cf6e4deebffc8dd691b7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit683c1ea1b70cf6e4deebffc8dd691b7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit683c1ea1b70cf6e4deebffc8dd691b7d::$classMap;

        }, null, ClassLoader::class);
    }
}
