<?php

require __DIR__ . '/../vendor/autoload.php';

use Nette\DI\ContainerLoader;
use Tracy\Debugger;

Debugger::enable();

$robotLoader = new Nette\Loaders\RobotLoader;
$robotLoader->addDirectory(__DIR__);
$robotLoader->addDirectory(__DIR__ . '/LanguageGameStrategy');
$robotLoader->setTempDirectory(__DIR__ . '/../temp');
$robotLoader->register();

$loader = new ContainerLoader(__DIR__ . '/../temp');
$class = $loader->load(function($compiler) {
	$compiler->loadConfig(__DIR__ . '/config/config.neon');
});
$container = new $class;






