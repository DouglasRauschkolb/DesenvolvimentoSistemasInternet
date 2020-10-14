<?php

require_once __DIR__ . "/vendor/autoload.php";

use Controller\TimeController;

$controller = new TimeController();
$controller->selectAll();