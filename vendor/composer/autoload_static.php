<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit622035143b4666c311683ea96135d770
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        'b067bc7112e384b61c701452d53a14a8' => __DIR__ . '/..' . '/mtdowling/jmespath.php/src/JmesPath.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'Z' => 
        array (
            'Zend\\Diactoros\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
        'K' => 
        array (
            'Kreait\\Firebase\\' => 16,
        ),
        'J' => 
        array (
            'JmesPath\\' => 9,
        ),
        'I' => 
        array (
            'Ivory\\HttpAdapter\\' => 18,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Google\\Auth\\' => 12,
        ),
        'F' => 
        array (
            'Firebase\\Token\\' => 15,
            'Firebase\\JWT\\' => 13,
            'Firebase\\Auth\\Token\\' => 20,
            'Fig\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'Kreait\\Firebase\\' => 
        array (
            0 => __DIR__ . '/..' . '/kreait/firebase-php/src',
        ),
        'JmesPath\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/jmespath.php/src',
        ),
        'Ivory\\HttpAdapter\\' => 
        array (
            0 => __DIR__ . '/..' . '/egeloen/http-adapter/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'Firebase\\Token\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/token-generator/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Firebase\\Auth\\Token\\' => 
        array (
            0 => __DIR__ . '/..' . '/kreait/firebase-tokens/src',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Google_Service_' => 
            array (
                0 => __DIR__ . '/..' . '/google/apiclient-services/src',
            ),
            'Google_' => 
            array (
                0 => __DIR__ . '/..' . '/google/apiclient/src',
            ),
        ),
    );

    public static $classMap = array (
        'Google\\Auth\\ApplicationDefaultCredentials' => __DIR__ . '/..' . '/google/auth/src/ApplicationDefaultCredentials.php',
        'Google\\Auth\\CacheTrait' => __DIR__ . '/..' . '/google/auth/src/CacheTrait.php',
        'Google\\Auth\\Cache\\InvalidArgumentException' => __DIR__ . '/..' . '/google/auth/src/Cache/InvalidArgumentException.php',
        'Google\\Auth\\Cache\\Item' => __DIR__ . '/..' . '/google/auth/src/Cache/Item.php',
        'Google\\Auth\\Cache\\MemoryCacheItemPool' => __DIR__ . '/..' . '/google/auth/src/Cache/MemoryCacheItemPool.php',
        'Google\\Auth\\CredentialsLoader' => __DIR__ . '/..' . '/google/auth/src/CredentialsLoader.php',
        'Google\\Auth\\Credentials\\AppIdentityCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/AppIdentityCredentials.php',
        'Google\\Auth\\Credentials\\GCECredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/GCECredentials.php',
        'Google\\Auth\\Credentials\\IAMCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/IAMCredentials.php',
        'Google\\Auth\\Credentials\\ServiceAccountCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/ServiceAccountCredentials.php',
        'Google\\Auth\\Credentials\\ServiceAccountJwtAccessCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/ServiceAccountJwtAccessCredentials.php',
        'Google\\Auth\\Credentials\\UserRefreshCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/UserRefreshCredentials.php',
        'Google\\Auth\\FetchAuthTokenCache' => __DIR__ . '/..' . '/google/auth/src/FetchAuthTokenCache.php',
        'Google\\Auth\\FetchAuthTokenInterface' => __DIR__ . '/..' . '/google/auth/src/FetchAuthTokenInterface.php',
        'Google\\Auth\\HttpHandler\\Guzzle5HttpHandler' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/Guzzle5HttpHandler.php',
        'Google\\Auth\\HttpHandler\\Guzzle6HttpHandler' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/Guzzle6HttpHandler.php',
        'Google\\Auth\\HttpHandler\\HttpHandlerFactory' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/HttpHandlerFactory.php',
        'Google\\Auth\\Middleware\\AuthTokenMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/AuthTokenMiddleware.php',
        'Google\\Auth\\Middleware\\ScopedAccessTokenMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/ScopedAccessTokenMiddleware.php',
        'Google\\Auth\\Middleware\\SimpleMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/SimpleMiddleware.php',
        'Google\\Auth\\OAuth2' => __DIR__ . '/..' . '/google/auth/src/OAuth2.php',
        'Google\\Auth\\Subscriber\\AuthTokenSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/AuthTokenSubscriber.php',
        'Google\\Auth\\Subscriber\\ScopedAccessTokenSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/ScopedAccessTokenSubscriber.php',
        'Google\\Auth\\Subscriber\\SimpleSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/SimpleSubscriber.php',
        'Google_Service_Exception' => __DIR__ . '/..' . '/google/apiclient/src/Google/Service/Exception.php',
        'Google_Service_Resource' => __DIR__ . '/..' . '/google/apiclient/src/Google/Service/Resource.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit622035143b4666c311683ea96135d770::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit622035143b4666c311683ea96135d770::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit622035143b4666c311683ea96135d770::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit622035143b4666c311683ea96135d770::$classMap;

        }, null, ClassLoader::class);
    }
}