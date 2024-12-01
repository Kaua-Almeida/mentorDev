<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6625fc89e1af83a13a0cd7793beec38f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
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

        spl_autoload_register(array('ComposerAutoloaderInit6625fc89e1af83a13a0cd7793beec38f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6625fc89e1af83a13a0cd7793beec38f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6625fc89e1af83a13a0cd7793beec38f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
