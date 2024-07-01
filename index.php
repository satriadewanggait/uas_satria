<?php

include_once "router.php";

require 'controllers/dashboard.php';

$dashboard = new Dashboard();

$router = new Router();

$router->set('GET', '/', $dashboard()->lala());

$router->set('GET', '/dashboard', function () {
    echo "My route is working!";
    exit;
});

$router->run();
