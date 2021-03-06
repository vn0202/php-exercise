<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97bdfe7adb8f84f5487b325cc05f43ef
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Com\\Tecnick\\Color\\' => 18,
            'Com\\Tecnick\\Barcode\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Com\\Tecnick\\Color\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-color/src',
        ),
        'Com\\Tecnick\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-barcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97bdfe7adb8f84f5487b325cc05f43ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97bdfe7adb8f84f5487b325cc05f43ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97bdfe7adb8f84f5487b325cc05f43ef::$classMap;

        }, null, ClassLoader::class);
    }
}
