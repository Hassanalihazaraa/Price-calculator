<?php
declare(strict_types=1);


//database connection
class database
{
    private PDO $database;

    public function __construct()
    {
        require_once '../hiddenResources/credentials.php';

        $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];

        $this->database = PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }

    //fetchAll customer from database
    public function getAllCustomers()
    {
        $handle = $this->database->prepare('SELECT * FROM customer');
        $handle->execute();
        $customers = [];
        foreach ($handle->fetchAll() as $customer) {
            $customers = new Customer((int)$customer['id'], (string)$customer['firstName'], (string)$customer['lastName'], (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
        return $customers;
    }
}