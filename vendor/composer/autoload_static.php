<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7da78aaf1375658117335b7d5346fae
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7da78aaf1375658117335b7d5346fae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7da78aaf1375658117335b7d5346fae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7da78aaf1375658117335b7d5346fae::$classMap;

        }, null, ClassLoader::class);
    }
}
