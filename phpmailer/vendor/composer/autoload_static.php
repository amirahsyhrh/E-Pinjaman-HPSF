<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe7749480a7f0c08cf982c68e4710e4b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe7749480a7f0c08cf982c68e4710e4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe7749480a7f0c08cf982c68e4710e4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
