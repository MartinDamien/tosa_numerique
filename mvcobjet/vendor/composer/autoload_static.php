<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46152f9fd4110b9526724b2435d6d9b6
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'A' => 
        array (
            'Afpa\\Mvcobjet\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'Afpa\\Mvcobjet\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit46152f9fd4110b9526724b2435d6d9b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46152f9fd4110b9526724b2435d6d9b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46152f9fd4110b9526724b2435d6d9b6::$classMap;

        }, null, ClassLoader::class);
    }
}
