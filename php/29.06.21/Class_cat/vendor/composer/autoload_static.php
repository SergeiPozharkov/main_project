<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60398ce5ed2b28e7f43edd918d004eb8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cat\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Cat',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60398ce5ed2b28e7f43edd918d004eb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60398ce5ed2b28e7f43edd918d004eb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60398ce5ed2b28e7f43edd918d004eb8::$classMap;

        }, null, ClassLoader::class);
    }
}
