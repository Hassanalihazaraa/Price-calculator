<?php
declare(strict_types=1);

require_once 'Controller/Calculator.controller.php';
require_once 'Model/Customer.model.php';
require_once 'Model/CustomerGroup.model.php';
require_once 'Model/Product.model.php';

//database connection
function openConnection(): PDO
{
    $driverOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    require_once 'hiddenResources/credentials.php';

    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
}
$pdo = openConnection();

$controller = new CalculatorController();
$controller->render();