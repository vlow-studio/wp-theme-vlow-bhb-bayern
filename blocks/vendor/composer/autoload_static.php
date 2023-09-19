<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8145d3dc597d13e58df0133e06afc1d0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\Uri\\' => 11,
        ),
        'J' => 
        array (
            'Jakeriordan\\VlowBlocks\\' => 23,
        ),
        'I' => 
        array (
            'Idleberg\\WordpressViteAssets\\' => 29,
            'Idleberg\\ViteManifest\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/uri-interfaces/src',
            1 => __DIR__ . '/..' . '/league/uri/src',
        ),
        'Jakeriordan\\VlowBlocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Idleberg\\WordpressViteAssets\\' => 
        array (
            0 => __DIR__ . '/..' . '/idleberg/wordpress-vite-assets/src',
        ),
        'Idleberg\\ViteManifest\\' => 
        array (
            0 => __DIR__ . '/..' . '/idleberg/vite-manifest/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8145d3dc597d13e58df0133e06afc1d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8145d3dc597d13e58df0133e06afc1d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8145d3dc597d13e58df0133e06afc1d0::$classMap;

        }, null, ClassLoader::class);
    }
}