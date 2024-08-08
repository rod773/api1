<?php

class Database{

     public function __construct(

        private string $host,
        private string $name,
        private string $user,
        private string $password

     ){}

     public function getConnection(){

       

        $dsn = "mysql:dbname=$this->name;host=$this->host";

        return new PDO($dsn, $this->user, $this->password,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
     }



}