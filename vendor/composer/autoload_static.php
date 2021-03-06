<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit468c061b3b1f1c5eaa4f50f9140913db
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wingu\\OctopusCore\\Reflection\\' => 29,
        ),
        'P' => 
        array (
            'PHP2WSDL\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wingu\\OctopusCore\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/wingu/reflection/src',
        ),
        'PHP2WSDL\\' => 
        array (
            0 => __DIR__ . '/..' . '/php2wsdl/php2wsdl/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit468c061b3b1f1c5eaa4f50f9140913db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit468c061b3b1f1c5eaa4f50f9140913db::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
