<?php

namespace Onurkacmaz\Soap;

use Onurkacmaz\Soap\Exceptions\SoapException;
use Exception;

class SoapResource
{

    private null|object $response;
    private bool $failed = false;
    private array $errors = [];
    private null|Exception $exception;

    public function __construct(mixed $response)
    {
        $this->response = $response;
        $this->exception = $response;
        if ($response instanceof SoapException) {
            $this->failed = true;
            $this->errors[] = $response->getMessage();
            $this->response = null;
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

    public function getException(): ?Exception {
        return $this->exception;
    }

}