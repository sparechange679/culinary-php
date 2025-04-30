<?php

class Database
{
    public $connection;
    public $statement;
    public function __construct($config, $username = 'root', $password = 'YourStrongPassword')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);

        $stmt->execute($params);

        return $stmt;
    }
}