<?php


/** @var $autoload \Composer\Autoload\ClassLoader */
$autoload	= require __DIR__ . '/../../vendor/autoload.php';

$config	= require __DIR__ . '/../em/config/main.php';

$config['autoLoader']	= $autoload;

\Emmvc\Em::run($config);


