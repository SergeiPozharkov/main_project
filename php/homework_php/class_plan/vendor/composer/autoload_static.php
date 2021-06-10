<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb993f3f0a8c0b1c07a3d160995e116c1
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb993f3f0a8c0b1c07a3d160995e116c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb993f3f0a8c0b1c07a3d160995e116c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb993f3f0a8c0b1c07a3d160995e116c1::$classMap;

        }, null, ClassLoader::class);
    }
}
