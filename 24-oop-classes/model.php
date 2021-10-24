<?php

class Model
{
    private PDO $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(): void
    {
        $config = require '.env.php';
        $this->connection = new PDO($config['dsn'], $config['username'], $config['password']);
    }

    protected function getConnection(): PDO
    {
        return $this->connection;
    }

}