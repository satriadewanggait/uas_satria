<?php

include_once "router.php";

require 'controllers/dashboard.php';
require 'controllers/login.php';

$router = new Router();

$router->set('GET', '/', function () {

	$redirectDashboard = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'dashboard';
	$redirectAuth = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'auth';

	echo $redirectAuth;

	// if ($_SESSION["auth"]) {
	// 	header("Location: " . $redirectDashboard);
	// } else {
	// 	header("Location: " . $redirectAuth);
	// };
});

$router->set('GET', '/auth', $LoginView);

$router->set('GET', '/dashboard', $DasboardView);

$router->run();
