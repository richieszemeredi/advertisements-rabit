<?php


spl_autoload_register( function($name) {
    require_once __DIR__ .  '/' . str_replace('\\', '/', $name) . '.php';
});

$controller = new \controller\SiteController();

$controller->handle();