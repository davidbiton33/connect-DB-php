<?php

class ConnectDB{
    private $connection;
    private $instance = null;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbName = 'users';


    private function __construct(){
        $this->connection = new PDO("
        mysql:host={$this->host};
        dbname={$this->dbName};"
        ,
        $this->user,
        $this->password
        )
    }

    
    public function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new ConnectDB();
        }
        return self::$instance;
    }



}



?>