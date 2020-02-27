<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0781d916a202303378e6a1b8d079e8ca
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Septillion\\Framework\\' => 21,
            'Septillion\\App\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Septillion\\Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework',
        ),
        'Septillion\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Septillion\\App\\Controllers\\Home' => __DIR__ . '/../..' . '/App/Controllers/Home.php',
        'Septillion\\App\\Models\\Post' => __DIR__ . '/../..' . '/App/Models/Post.php',
        'Septillion\\App\\Models\\User' => __DIR__ . '/../..' . '/App/Models/User.php',
        'Septillion\\Framework\\Controller\\Controller' => __DIR__ . '/../..' . '/Framework/Controller/Controller.php',
        'Septillion\\Framework\\Helper\\Helper' => __DIR__ . '/../..' . '/Framework/Helper/Helper.php',
        'Septillion\\Framework\\Model\\DatabaseConnection' => __DIR__ . '/../..' . '/Framework/Model/DatabaseConnection.php',
        'Septillion\\Framework\\Model\\Model' => __DIR__ . '/../..' . '/Framework/Model/Model.php',
        'Septillion\\Framework\\Request\\AssociativeArray' => __DIR__ . '/../..' . '/Framework/Request/AssociativeArray.php',
        'Septillion\\Framework\\Request\\Request' => __DIR__ . '/../..' . '/Framework/Request/Request.php',
        'Septillion\\Framework\\Router\\Router' => __DIR__ . '/../..' . '/Framework/Router/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0781d916a202303378e6a1b8d079e8ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0781d916a202303378e6a1b8d079e8ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0781d916a202303378e6a1b8d079e8ca::$classMap;

        }, null, ClassLoader::class);
    }
}
