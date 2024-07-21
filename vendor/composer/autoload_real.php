<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitae78f1fa8774a670f7cec30dbf66765e
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

        spl_autoload_register(array('ComposerAutoloaderInitae78f1fa8774a670f7cec30dbf66765e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitae78f1fa8774a670f7cec30dbf66765e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitae78f1fa8774a670f7cec30dbf66765e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
