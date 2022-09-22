<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dd48d8bed508cbc05d82e68f7981110
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Farm\\Classes\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Farm\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3dd48d8bed508cbc05d82e68f7981110::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3dd48d8bed508cbc05d82e68f7981110::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3dd48d8bed508cbc05d82e68f7981110::$classMap;

        }, null, ClassLoader::class);
    }
}