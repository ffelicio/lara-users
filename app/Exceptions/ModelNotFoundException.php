<?php

namespace App\Exceptions;

class ModelNotFoundException extends \Exception
{
    public function __construct($message = null, $code = 404, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function getBody()
    {
        return [
            'error' => [
                'message' => $this->getMessage(),
                'status' => $this->getCode()
            ]
        ];
    }
}