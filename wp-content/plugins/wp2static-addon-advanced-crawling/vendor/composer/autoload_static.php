<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit293677eabb8736eaf2363eb9f5d534d7
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wa72\\Url\\' => 9,
            'WP2StaticAdvancedCrawling\\' => 26,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wa72\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/wa72/url/src/Wa72/Url',
        ),
        'WP2StaticAdvancedCrawling\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Masterminds\\HTML5' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5.php',
        'Masterminds\\HTML5\\Elements' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Elements.php',
        'Masterminds\\HTML5\\Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Entities.php',
        'Masterminds\\HTML5\\Exception' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Exception.php',
        'Masterminds\\HTML5\\InstructionProcessor' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/InstructionProcessor.php',
        'Masterminds\\HTML5\\Parser\\CharacterReference' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/CharacterReference.php',
        'Masterminds\\HTML5\\Parser\\DOMTreeBuilder' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/DOMTreeBuilder.php',
        'Masterminds\\HTML5\\Parser\\EventHandler' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/EventHandler.php',
        'Masterminds\\HTML5\\Parser\\FileInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/FileInputStream.php',
        'Masterminds\\HTML5\\Parser\\InputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/InputStream.php',
        'Masterminds\\HTML5\\Parser\\ParseError' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/ParseError.php',
        'Masterminds\\HTML5\\Parser\\Scanner' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Scanner.php',
        'Masterminds\\HTML5\\Parser\\StringInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/StringInputStream.php',
        'Masterminds\\HTML5\\Parser\\Tokenizer' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Tokenizer.php',
        'Masterminds\\HTML5\\Parser\\TreeBuildingRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/TreeBuildingRules.php',
        'Masterminds\\HTML5\\Parser\\UTF8Utils' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/UTF8Utils.php',
        'Masterminds\\HTML5\\Serializer\\HTML5Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/HTML5Entities.php',
        'Masterminds\\HTML5\\Serializer\\OutputRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/OutputRules.php',
        'Masterminds\\HTML5\\Serializer\\RulesInterface' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/RulesInterface.php',
        'Masterminds\\HTML5\\Serializer\\Traverser' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/Traverser.php',
        'WP2StaticAdvancedCrawling\\Controller' => __DIR__ . '/../..' . '/src/Controller.php',
        'WP2StaticAdvancedCrawling\\CrawlQueue' => __DIR__ . '/../..' . '/src/CrawlQueue.php',
        'WP2StaticAdvancedCrawling\\Crawler' => __DIR__ . '/../..' . '/src/Crawler.php',
        'WP2StaticAdvancedCrawling\\Detection' => __DIR__ . '/../..' . '/src/Detection.php',
        'WP2StaticAdvancedCrawling\\Rewriter' => __DIR__ . '/../..' . '/src/Rewriter.php',
        'Wa72\\Url\\Psr7Uri' => __DIR__ . '/..' . '/wa72/url/src/Wa72/Url/Psr7Uri.php',
        'Wa72\\Url\\Url' => __DIR__ . '/..' . '/wa72/url/src/Wa72/Url/Url.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit293677eabb8736eaf2363eb9f5d534d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit293677eabb8736eaf2363eb9f5d534d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit293677eabb8736eaf2363eb9f5d534d7::$classMap;

        }, null, ClassLoader::class);
    }
}