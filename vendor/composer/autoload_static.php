<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf57eaf0bb8a51fd1545240802c493e6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf57eaf0bb8a51fd1545240802c493e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf57eaf0bb8a51fd1545240802c493e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
