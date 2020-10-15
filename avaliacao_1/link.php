<?php

require_once __DIR__ . "/vendor/autoload.php";

use Controller\JogadorController;

$controller = new JogadorController();
$controller->selectOne();


