<?php

namespace Beetroot\Classes;

class Model
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(): void
    {
        require '/var/www/public/config.php';
        $this->connection = new \PDO(CONFIG['dsn'], CONFIG['username'], CONFIG['password']);
    }

    protected function getConnection(): \PDO
    {
        return $this->connection;
    }

}