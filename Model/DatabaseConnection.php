<?php
declare(strict_types=1);

require_once '../hiddenResources/credentials.php';

//database connection
class database
{
    private string $database;
    private string $dbUserName;
    private string $dbPassword;
    private array $driverOptions;


    public function __construct(string $database, string $dbUserName, string $dbPassword, array $driverOptions)
    {
        $this->database = $database;
        $this->dbUserName = $dbUserName;
        $this->dbPassword = $dbPassword;
        $this->driverOptions = $driverOptions;
    }


    public function getDatabase(): string
    {
        return $this->database;
    }


    public function setDatabase(string $database): void
    {
        $this->database = $database;
    }


    public function getDbUserName(): string
    {
        return $this->dbUserName;
    }


    public function setDbUserName(string $dbUserName): void
    {
        $this->dbUserName = $dbUserName;
    }


    public function getDbPassword(): string
    {
        return $this->dbPassword;
    }


    public function setDbPassword(string $dbPassword): void
    {
        $this->dbPassword = $dbPassword;
    }


    public function getDriverOptions(): array
    {
        $this->driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];
        return $this->driverOptions;
    }


    public function setDriverOptions(array $driverOptions): void
    {
        $this->driverOptions = $driverOptions;
    }

    public function connect()
    {
        $connection = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }


}

//$pdo = new  database();