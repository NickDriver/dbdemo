<?php

class Database
{
    // Php Data Object
    public $pdo;

    public function __construct($db)
    {
        $dsn = "pgsql:host={$db["servername"]};port={$db["port"]};dbname={$db["dbname"]}";
        $this->pdo = new PDO($dsn, $db["username"], $db["password"], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {
        // Query
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}