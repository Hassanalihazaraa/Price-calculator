<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'Controller/Calculator.controller.php';
require_once 'Model/DatabaseConnection.php';
require_once 'Model/CustomerLoader.model.php';
require_once 'Model/CustomerGroupLoader.model.php';
require_once 'Model/ProductsLoader.model.php';
require_once 'Model/Customer.model.php';
require_once 'Model/CustomerGroup.model.php';
require_once 'Model/Product.model.php';

$controller = new CalculatorController();
$controller->render();