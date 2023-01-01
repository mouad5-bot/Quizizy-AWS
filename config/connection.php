<?php

class Connection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "quiz";
    
    public  function connect() 
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbName";
        $pdo = new PDO($dsn, $this->user, $this->password);
        try
        {
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    
    public function getHost() {
        return $this->host;
    }
    
    public function getUser() {
        return $this->user;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function getDbName() {
        return $this->dbName;
    }
}


?>