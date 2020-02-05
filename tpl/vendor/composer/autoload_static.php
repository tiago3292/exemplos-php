<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6db69575622affb59a61c438d6e1390
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6db69575622affb59a61c438d6e1390::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6db69575622affb59a61c438d6e1390::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc6db69575622affb59a61c438d6e1390::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
