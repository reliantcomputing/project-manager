<?php

namespace App\Exceptions;

use Exception;

class TestException extends Exception
{
    public function report(){

    }

    public function render($request){
        return;
    }
}
