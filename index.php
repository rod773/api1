<?php


$path =  parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$parts = explode("/",$path);

$api_name = basename(dirname(__FILE__));

$key = array_search($api_name,$parts);

$resource  = $parts[$key +1] ?? null;

$id = $parts[$key +2] ?? null;