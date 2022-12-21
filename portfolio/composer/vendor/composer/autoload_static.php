<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24badc7ddcc182c650439862fb8b5e93
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24badc7ddcc182c650439862fb8b5e93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24badc7ddcc182c650439862fb8b5e93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24badc7ddcc182c650439862fb8b5e93::$classMap;

        }, null, ClassLoader::class);
    }
}
