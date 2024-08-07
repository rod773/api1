<?php

class Database{

     public function __construct(

        private string $host,
        private string $name,
        private string $user,
        private string $password

     ){}

     public function getConnection(){

        $dsn =  "mysql:host={$this->host};db_name={$this->name};charset=utf8";
     }



}