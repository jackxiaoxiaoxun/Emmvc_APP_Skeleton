<?php


use Emmvc\Config;


$path		= __DIR__ . DIRECTORY_SEPARATOR . 'item' . DIRECTORY_SEPARATOR . '*.php';

return Config::getConfig($path);