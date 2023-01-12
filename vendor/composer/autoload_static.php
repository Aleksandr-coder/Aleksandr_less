<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit618d73cf757524bd99165a6a0b2cb410
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\controllers\\About' => __DIR__ . '/../..' . '/app/controllers/About.php',
        'App\\controllers\\Controller' => __DIR__ . '/../..' . '/app/controllers/Controller.php',
        'App\\controllers\\Error404' => __DIR__ . '/../..' . '/app/controllers/Error404.php',
        'App\\controllers\\Gallery' => __DIR__ . '/../..' . '/app/controllers/Gallery.php',
        'App\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'App\\controllers\\admin\\Admin' => __DIR__ . '/../..' . '/app/controllers/admin/Admin.php',
        'App\\controllers\\users\\User' => __DIR__ . '/../..' . '/app/controllers/users/User.php',
        'App\\models\\About' => __DIR__ . '/../..' . '/app/models/About.php',
        'App\\models\\Admin' => __DIR__ . '/../..' . '/app/models/Admin.php',
        'App\\models\\Gallery' => __DIR__ . '/../..' . '/app/models/Gallery.php',
        'App\\models\\Home' => __DIR__ . '/../..' . '/app/models/Home.php',
        'App\\models\\RootModel' => __DIR__ . '/../..' . '/app/models/RootModel.php',
        'App\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Orm\\DBConnector' => __DIR__ . '/../..' . '/core/Orm/DBConnector.php',
        'Core\\Orm\\Select' => __DIR__ . '/../..' . '/core/Orm/Select.php',
        'Core\\Render' => __DIR__ . '/../..' . '/core/Render.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit618d73cf757524bd99165a6a0b2cb410::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit618d73cf757524bd99165a6a0b2cb410::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit618d73cf757524bd99165a6a0b2cb410::$classMap;

        }, null, ClassLoader::class);
    }
}
