<?php


require __DIR__."/vendor/autoload.php";

set_exception_handler("ErrorHandler::handleException");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();


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

$database = new Database($_ENV['DB_HOST'],($_ENV['DB_NAME']),($_ENV['DB_USER']),($_ENV['DB_PASS']));

$database->getConnection();

$task_gateway = new TaskGateway($database);

$controller = new TaskController($task_gateway);

$method = $_SERVER['REQUEST_METHOD'];

$controller->processRequest($method,$id); 