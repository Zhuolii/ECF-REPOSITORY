<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeb0b98c833855c6bbf5bd564622acca
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
            0 => __DIR__ . '/../..' . '/pages',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeb0b98c833855c6bbf5bd564622acca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeb0b98c833855c6bbf5bd564622acca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfeb0b98c833855c6bbf5bd564622acca::$classMap;

        }, null, ClassLoader::class);
    }
}
