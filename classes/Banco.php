<?php

namespace Banco;
use PDO;
interface DBConnectionInterface {
    public function connect();
}

class MySQLConnection implements DBConnectionInterface{
    public function connect() {
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=dbsolid','root','');
            return $pdo;
        }catch (PDOException|Exception $e){
            throw new ErrorException("Error");
        }
    }
}
class InfoDB {
    private $dbConnection;
    

    public function __construct(DBConnectionInterface $dbConnection = null) {
        $defaultConn = new MySQLConnection();
        $this->dbConnection = $dbConnection ?? $defaultConn;
        $this->dbConnection = $this->dbConnection->connect();
    }
    public function getPdo(): PDO
    {
        return $this->dbConnection;
    }
}


