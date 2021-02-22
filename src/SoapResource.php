<?php

namespace Onurkacmaz\Soap;

use Exception;

class SoapResource
{

    private null|object $response;
    private bool $failed = false;
    private array $errors = [];
    private null|Exception $exception = null;

    public function __construct(mixed $response)
    {
        $this->response = $response;
        if ($response instanceof Exception) {
            $this->failed = true;
            $this->errors[] = $response->getMessage();
            $this->response = null;
            $this->exception = $response;
        }
    }

    public function isFailed(): bool {
        return $this->failed;
    }

    public function response(): object|null {
        return $this->response;
    }

    public function errors(): array {
        return $this->errors;
    }

    public function getException(): null|Exception {
        return $this->exception;
    }

}