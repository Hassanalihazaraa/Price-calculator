<?php
declare(strict_types=1);


//database connection
class DatabaseConnection
{
    private PDO $database;

    public function __construct()
    {
        require_once '../hiddenResources/credentials.php';

        $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];

        $this->database = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }

    public function getDatabase(): PDO
    {
        return $this->database;
    }
}