<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf88fd40b1b8b26e1730d9427c5e8a5b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitaf88fd40b1b8b26e1730d9427c5e8a5b::$classMap;

        }, null, ClassLoader::class);
    }
}
