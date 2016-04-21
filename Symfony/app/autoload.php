<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->register(
    array(
        // ...
        'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/doctrine-fixtures/lib',
        'Doctrine\\Common' => __DIR__.'/../vendor/doctrine-common/lib',
        // ...
));

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
return $loader;
