<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a19269e8467b9ca101f40a4db16ce63
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'N' => 
        array (
            'Niteo\\Kafkai\\Plugin\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Niteo\\Kafkai\\Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Niteo\\Kafkai\\Plugin\\Admin' => __DIR__ . '/../..' . '/inc/Admin.php',
        'Niteo\\Kafkai\\Plugin\\Admin\\API' => __DIR__ . '/../..' . '/inc/Admin/API.php',
        'Niteo\\Kafkai\\Plugin\\Admin\\Articles' => __DIR__ . '/../..' . '/inc/Admin/Articles.php',
        'Niteo\\Kafkai\\Plugin\\Admin\\Helper' => __DIR__ . '/../..' . '/inc/Admin/Helper.php',
        'Niteo\\Kafkai\\Plugin\\Admin\\Niches' => __DIR__ . '/../..' . '/inc/Admin/Niches.php',
        'Niteo\\Kafkai\\Plugin\\Config' => __DIR__ . '/../..' . '/inc/Config.php',
        'Niteo\\Kafkai\\Plugin\\Helper' => __DIR__ . '/../..' . '/inc/Helper.php',
        'Symfony\\Component\\Yaml\\Command\\LintCommand' => __DIR__ . '/..' . '/symfony/yaml/Command/LintCommand.php',
        'Symfony\\Component\\Yaml\\Dumper' => __DIR__ . '/..' . '/symfony/yaml/Dumper.php',
        'Symfony\\Component\\Yaml\\Escaper' => __DIR__ . '/..' . '/symfony/yaml/Escaper.php',
        'Symfony\\Component\\Yaml\\Exception\\DumpException' => __DIR__ . '/..' . '/symfony/yaml/Exception/DumpException.php',
        'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/yaml/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Yaml\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/yaml/Exception/ParseException.php',
        'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/yaml/Exception/RuntimeException.php',
        'Symfony\\Component\\Yaml\\Inline' => __DIR__ . '/..' . '/symfony/yaml/Inline.php',
        'Symfony\\Component\\Yaml\\Parser' => __DIR__ . '/..' . '/symfony/yaml/Parser.php',
        'Symfony\\Component\\Yaml\\Tag\\TaggedValue' => __DIR__ . '/..' . '/symfony/yaml/Tag/TaggedValue.php',
        'Symfony\\Component\\Yaml\\Unescaper' => __DIR__ . '/..' . '/symfony/yaml/Unescaper.php',
        'Symfony\\Component\\Yaml\\Yaml' => __DIR__ . '/..' . '/symfony/yaml/Yaml.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a19269e8467b9ca101f40a4db16ce63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a19269e8467b9ca101f40a4db16ce63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a19269e8467b9ca101f40a4db16ce63::$classMap;

        }, null, ClassLoader::class);
    }
}
