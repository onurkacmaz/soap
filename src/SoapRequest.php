<?php

namespace Onurkacmaz\Soap;

class SoapRequest
{

    private null|string $methodName = null;
    private array $parameters = [];
    private null|string $endpoint = null;

    public function setMethodName(string $methodName): SoapRequest {
        $this->methodName = $methodName;
        return $this;
    }

    public function getMethodName(): null|string {
        return $this->methodName;
    }

    public function setParameters(array $parameters): SoapRequest {
        $this->parameters = $parameters;
        return $this;
    }

    public function getParameters(): array {
        return $this->parameters;
    }

    public function setEndpoint(string $endpoint): void {
        $this->endpoint = $endpoint;
    }

    public function getEndpoint(): null|string {
        return $this->endpoint;
    }

}