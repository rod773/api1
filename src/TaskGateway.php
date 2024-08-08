<?php

class TaskGateway{

    private $conn;
    
    public function __construct(Database $database){
       $this->conn = $database->getConnection();
    }

    public function getAll(){

        $sql = "SELECT * FROM TASK ORDER BY NAME";

        $stmt = $this->conn->query($sql);

        $stmt -> fetchAll();
        
    }
}