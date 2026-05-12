<?php

use app\classes\Uri;

require "../bootstrap.php";

dd(Uri::uri());

$controller = new Controller;
$controller = $controller->getController();

// $method = new Method;
// $method = $method->getMethod();

// $parameters = new Parameters;   
// $parameters = $parameters->getParameters();



