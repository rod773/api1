<?php


class ErrorHandler{

    public static function handleError(
        int $errno,
        string $errstr,
        string $errfile,
        int $errline,

    ){
        throw new ErrorExceptio($errstr,0,$errno,$errfile,$errline);
    }

    public static function handleException(Throwable $exception){

        http_response_code(500);

        echo json_encode([
          "code" => $exception->getCode(),
          "message" => $exception->getMessage(),
          "file" => $exception->getFile(),
          "line" => $exception->getLine(),
        ]);
    }
}