<?php
namespace banco;
use ErrorException;
use Exception;
use PDO;
use PDOException;

interface DBConnectionInterface {
    public function connect();
}

class MySQLConnection implements DBConnectionInterface{
    /**
     * @throws ErrorException
     */
    public function connect(): PDO
    {
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


    /**
     * @throws ErrorException
     */
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


