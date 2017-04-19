<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

include_once APP_PATH . '/../config/config.php';

$needConfig = ['Database'];

$config = new Config($needConfig);

return new \Phalcon\Config(array(
    'database' => $config->Database,
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/..app/Model/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/../app/plugins/',
        'libraryDir'     => APP_PATH . '/../app/library/',
        'cacheDir'       => APP_PATH . '/../app/cache/',
        'baseUri'        => '/admin/',
    )
));
