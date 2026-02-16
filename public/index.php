<?php

use Encanto\Projeto\Controllers\Controller;
use Encanto\Projeto\Controllers\Error404Controller;
use Encanto\Projeto\Controllers\HomeViewController;

require_once __DIR__ . '/../vendor/autoload.php';

if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $controller = new HomeViewController();
    }
}else {
    $controller = new Error404Controller();
}

/** @var Controller $controller */

$controller->processaRequisicao();
