<?php

require_once __DIR__.'/vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony\\Bootstrapper' => __DIR__,
    'Symfony'               => __DIR__.'/vendor/symfony/src/',
));
$loader->register();
