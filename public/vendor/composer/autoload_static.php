<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit930d8c476f45221333ced1ce43e252fd
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit930d8c476f45221333ced1ce43e252fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit930d8c476f45221333ced1ce43e252fd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit930d8c476f45221333ced1ce43e252fd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}