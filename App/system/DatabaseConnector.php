<?php
namespace App\System;
// require __DIR__. "/../../bootstrap.php";

class DatabaseConnector {

    private $dbConnection = null;

    public function __construct($v,$w,$x,$y,$z)
    {
        $host = $v;
        $port = $w;
        $db   = $x;
        $user = $y;
        $pass = $z;

        try {
            $this->dbConnection = new \PDO(
                "mysql:host=$host;port=$port;charset=utf8mb4;dbname=$db",
                $user,
                $pass
            );
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}

// $x=(new DatabaseConnector)->getConnection();
var_dump($_ENV['DB_HOST']);