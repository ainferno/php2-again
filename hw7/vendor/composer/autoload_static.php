<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12b66d3a304a1f3dc0c5ce72441b5cf9
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12b66d3a304a1f3dc0c5ce72441b5cf9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12b66d3a304a1f3dc0c5ce72441b5cf9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit12b66d3a304a1f3dc0c5ce72441b5cf9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}