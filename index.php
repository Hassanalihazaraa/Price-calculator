<?php
declare(strict_types=1);

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