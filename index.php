<?php

require __DIR__."/vendor/autoload.php";


$path =  parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$parts = explode("/",$path);

$api_name = basename(dirname(__FILE__));

$key = array_search($api_name,$parts);

$resource  = $parts[$key +1] ?? null;

$id = $parts[$key +2] ?? null;




if($resource  !='task'){
   //header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
   http_response_code(404);
   exit;
}

//header("Content-type: aplcation/json; charset=UTF-8");

$database = new Database("localhost","wordpress1","root","");

$controller = new TaskController;

$method = $_SERVER['REQUEST_METHOD'];

$controller->processRequest($method,$id);