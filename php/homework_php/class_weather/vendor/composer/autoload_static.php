<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf983d0be460ac4331a9c1a7b7d900118
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf983d0be460ac4331a9c1a7b7d900118::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf983d0be460ac4331a9c1a7b7d900118::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf983d0be460ac4331a9c1a7b7d900118::$classMap;

        }, null, ClassLoader::class);
    }
}
