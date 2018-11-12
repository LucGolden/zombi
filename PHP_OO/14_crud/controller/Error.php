<?php

namespace Controller;

class Error{
    public function __construct(){
        set_error_handler(array('\Controller\Error', 'exception_error_handler'));// il faut obligatoirement que la methode qui suit soit static

    }
    public static function exception_error_handler($errno, $errstr, $errfile, $errline){
        throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
    }
}