<?php


$path =  parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$parts = explode("/",$path);



$key = array_search('api', $parts)+1; 


$resource = $parts[$key];

$id = $parts[$key+1] ?? null;

echo $resource."/".$id;