<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7ef55add3628720eedc76bdcbfad7a8
{
    public static $files = array (
        '69620d38028d702289271d0b37a62cac' => __DIR__ . '/../..' . '/bootstrap/config.php',
        'edd64266c4b293a64b86aa4f55e37a99' => __DIR__ . '/../..' . '/bootstrap/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mare\\App\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mare\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7ef55add3628720eedc76bdcbfad7a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7ef55add3628720eedc76bdcbfad7a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7ef55add3628720eedc76bdcbfad7a8::$classMap;

        }, null, ClassLoader::class);
    }
}
