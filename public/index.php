<?php
require __DIR__ . '/../vendor/autoload.php';

if (is_file(__DIR__ . '/../.env')) {
    $dotenv = \Dotenv\Dotenv::create(__DIR__ . '/../');
    $dotenv->load();
    $dotenv->required([
        'EXTAS__BASE_PATH',
        'EXTAS__DRIVER',
        'EXTAS__DSN',
        'EXTAS__DB',
        'EXTAS__CONTAINER_PATH_STORAGE_LOCK',
        'EXTAS__CONTAINER_PATH_STORAGE',
        'EXTAS__DRIVERS_STORAGE_PATH',
        'ALICE__THROW_ON_ERROR'
    ])->notEmpty();
}

$alisa = new \extas\components\yandex\Alice([
    \extas\components\yandex\Alice::OPTION__THROW_ON_ERROR => getenv('ALICE__THROW_ON_ERROR')
]);
$alisa->run();