<?php

class Database
{
    // Php Data Object
    public $pdo;

    public function __construct($db, $username = 'root', $password = '')
    {
        $dsn = 'pgsql:' . http_build_query($db, '', ';');
        echo var_dump($dsn);
        $this->pdo = new PDO($dsn, $username, $password, [
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