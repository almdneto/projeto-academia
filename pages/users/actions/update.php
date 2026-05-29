<?php

require_once __DIR__ . '/../functions/functions.php';

$userFunctions = new UserFunctions();
$updatedUser = $userFunctions->updateUser($conn, $_GET['id'], $_GET['name'], $_GET['email'], $_GET['level']);

