<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita61ac8d6e68d9a4c7fcf4e4e33c4e737
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita61ac8d6e68d9a4c7fcf4e4e33c4e737', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita61ac8d6e68d9a4c7fcf4e4e33c4e737', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita61ac8d6e68d9a4c7fcf4e4e33c4e737::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}