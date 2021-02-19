<?php

namespace Onurkacmaz\Soap;

use Onurkacmaz\Soap\Exceptions\SoapException;
use SoapClient;
use SoapFault;

class Soap
{

    private string $baseUrl;
    private SoapOptions|null $options;

    public function __construct(string $baseUrl, SoapOptions|array $options = null)
    {
        $this->baseUrl = $baseUrl;
        $this->options = $options;
    }

    public function run(SoapRequest $request): SoapResource {
        $validate = $this->validate($request);
        if (!is_null($validate)) {
            return new SoapResource($validate);
        }
        try {
            $client = new SoapClient($this->baseUrl . $request->getEndpoint(), !is_null($this->options) ? $this->options->toArray() : []);
            $methodName = $request->getMethodName();
            $parameters = $request->getParameters();
            $response = $client->$methodName($parameters);
        } catch (SoapFault $e) {
            $response = new SoapException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }
        return new SoapResource($response);
    }

    private function validate(SoapRequest $request): SoapException|null
    {
        if (is_null($request->getEndpoint())) {
            return new SoapException("Endpoint must set.");
        }
        if (is_null($request->getMethodName())) {
            return new SoapException("Method name must set.");
        }
        return null;
    }

}