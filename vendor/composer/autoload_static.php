<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d
{
    public static $files = array (
        '051304be2705da9bf2eaa6525dc161cb' => __DIR__ . '/../..' . '/src/Http/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EONConsulting\\PHPStencil\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EONConsulting\\PHPStencil\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'EONConsulting\\PHPStencil\\PHPStencil' => __DIR__ . '/../..' . '/src/PHPStencil.php',
        'EONConsulting\\PHPStencil\\PHPStencilServiceProvider' => __DIR__ . '/../..' . '/src/PHPStencilServiceProvider.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\AdapterFactory' => __DIR__ . '/../..' . '/src/Factories/AdapterFactory.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Config' => __DIR__ . '/../..' . '/src/Factories/Config.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Factory' => __DIR__ . '/../..' . '/src/Factories/Factory.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\GUI\\Adapters\\FormAdapter' => __DIR__ . '/../..' . '/src/Factories/GUI/Adapters/FormAdapter.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\GUI\\Adapters\\ListAdapter' => __DIR__ . '/../..' . '/src/Factories/GUI/Adapters/ListAdapter.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\GUI\\GUI' => __DIR__ . '/../..' . '/src/Factories/GUI/GUI.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\GUI\\GUIAdapterInterface' => __DIR__ . '/../..' . '/src/Factories/GUI/GUIAdapterInterface.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\GUI\\GUIEnum' => __DIR__ . '/../..' . '/src/Factories/GUI/GUIEnum.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\GUI\\GUIFactory' => __DIR__ . '/../..' . '/src/Factories/GUI/GUIFactory.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\Adapters\\CSVAdapter' => __DIR__ . '/../..' . '/src/Factories/Text/Adapters/CSVAdapter.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\Adapters\\JSONAdapter' => __DIR__ . '/../..' . '/src/Factories/Text/Adapters/JSONAdapter.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\Adapters\\XMLAdapter' => __DIR__ . '/../..' . '/src/Factories/Text/Adapters/XMLAdapter.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\Text' => __DIR__ . '/../..' . '/src/Factories/Text/Text.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\TextAdapterInterface' => __DIR__ . '/../..' . '/src/Factories/Text/TextAdapterInterface.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\TextEnum' => __DIR__ . '/../..' . '/src/Factories/Text/TextEnum.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\Text\\TextFactory' => __DIR__ . '/../..' . '/src/Factories/Text/TextFactory.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\Adapters\\RestAdapter' => __DIR__ . '/../..' . '/src/Factories/WebService/Adapters/RestAdapter.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\REST\\Controllers\\RestBaseController' => __DIR__ . '/../..' . '/src/Factories/WebService/REST/Controllers/RestBaseController.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\REST\\Controllers\\RestController' => __DIR__ . '/../..' . '/src/Factories/WebService/REST/Controllers/RestController.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\WebService' => __DIR__ . '/../..' . '/src/Factories/WebService/WebService.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\WebServiceAdapterInterface' => __DIR__ . '/../..' . '/src/Factories/WebService/WebServiceAdapterInterface.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\WebServiceEnum' => __DIR__ . '/../..' . '/src/Factories/WebService/WebServiceEnum.php',
        'EONConsulting\\PHPStencil\\src\\Factories\\WebService\\WebServiceFactory' => __DIR__ . '/../..' . '/src/Factories/WebService/WebServiceFactory.php',
        'EONConsulting\\PHPStencil\\src\\Models\\DummyTable' => __DIR__ . '/../..' . '/src/Models/DummyTable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07cdb5a83b5f0d464dfd4a0cf165a71d::$classMap;

        }, null, ClassLoader::class);
    }
}
