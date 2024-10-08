<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8caa349c04547b2779e1897dd46e0b50
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ("Composer\Autoload\ClassLoader" === $class) {
            require __DIR__ . "/ClassLoader.php";
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(
            [
                "ComposerAutoloaderInit8caa349c04547b2779e1897dd46e0b50",
                "loadClassLoader",
            ],
            true,
            true
        );
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(
            \dirname(__DIR__)
        );
        spl_autoload_unregister([
            "ComposerAutoloaderInit8caa349c04547b2779e1897dd46e0b50",
            "loadClassLoader",
        ]);

        require __DIR__ . "/autoload_static.php";
        call_user_func(
            \Composer\Autoload\ComposerStaticInit8caa349c04547b2779e1897dd46e0b50::getInitializer(
                $loader
            )
        );

        $loader->register(true);

        return $loader;
    }
}
