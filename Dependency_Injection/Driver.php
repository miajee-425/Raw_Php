<?php

class User
{
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function connectDatabase()
    {
        $this->db->connect();
    }
}

class Mysql implements DatabaseInterface
{

    public function connect()
    {
        print("Mysql Connect");
    }
}

class PostgreSql implements DatabaseInterface
{

    public function connect()
    {
        print("PostgreSql Connect");
    }
}

interface DatabaseInterface
{
    public function connect();
}

$mysql = new Mysql();
$postgreSql = new PostgreSql();
$user = new User($mysql);
$user->connectDatabase();
?>