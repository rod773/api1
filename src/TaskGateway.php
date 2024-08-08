<?php

class TaskGateway{

    private PDO $conn;
    
    public function __construct(Database $database){

       
       $this->conn = $database->getConnection();

       
    }

    public function getAll(){

       $sql = "SELECT * FROM TASKS ORDER BY NAME";

       $stmt = $this->conn->query($sql);

       return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
    }
}