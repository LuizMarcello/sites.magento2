<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5abb3d87ae20307f66d2e2b44a1e4f86
{
    public static $files = array (
        'e8b0581a6d332830eb89701a48a29fe6' => __DIR__ . '/..' . '/rafaelstz/traducao_magento2_pt_br/registration.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5abb3d87ae20307f66d2e2b44a1e4f86::$classMap;

        }, null, ClassLoader::class);
    }
}
