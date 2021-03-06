<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit162d5f8ec26d0f35f7a435b58f506e91
{
    public static $files = array (
        'ad301e9d734a656b3a7e0cfda5d86814' => __DIR__ . '/..' . '/tarsana/functional/src/Internal/_functions.php',
        '074162fde8cc05bb516fe2da4bdde1e2' => __DIR__ . '/..' . '/tarsana/functional/src/Internal/_stream.php',
        'e49490e34f69c2b5dc378287aff873a3' => __DIR__ . '/..' . '/tarsana/functional/src/functions.php',
        '86e6e0fbb8e27bd3acbcdbc4203d813e' => __DIR__ . '/..' . '/tarsana/functional/src/operators.php',
        'a32120ba94fa97a51d3028c3c72c6a2c' => __DIR__ . '/..' . '/tarsana/functional/src/common.php',
        '828e32b012c9305974510428dface37d' => __DIR__ . '/..' . '/tarsana/functional/src/object.php',
        '2f4f606cc5bf2a20346afa245643e51c' => __DIR__ . '/..' . '/tarsana/functional/src/string.php',
        '67815361e2d72888c0507e858ef42a16' => __DIR__ . '/..' . '/tarsana/functional/src/list.php',
        'cffc2f002a7818ea4be857a6cb09c019' => __DIR__ . '/..' . '/tarsana/functional/src/math.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tarsana\\UnitTests\\Functional\\' => 29,
            'Tarsana\\Functional\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tarsana\\UnitTests\\Functional\\' => 
        array (
            0 => __DIR__ . '/..' . '/tarsana/functional/tests',
        ),
        'Tarsana\\Functional\\' => 
        array (
            0 => __DIR__ . '/..' . '/tarsana/functional/src/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit162d5f8ec26d0f35f7a435b58f506e91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit162d5f8ec26d0f35f7a435b58f506e91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
