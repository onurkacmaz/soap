[![Latest Version on Packagist](https://img.shields.io/packagist/v/onurkacmaz/soap.svg?style=flat-square)](https://packagist.org/packages/onurkacmaz/soap)
[![Quality Score](https://img.shields.io/scrutinizer/g/onurkacmaz/soap.svg?style=flat-square)](https://scrutinizer-ci.com/g/onurkacmaz/soap)
[![Total Downloads](https://img.shields.io/packagist/dt/onurkacmaz/soap.svg?style=flat-square)](https://packagist.org/packages/onurkacmaz/soap)

### Installation

```console
foo@bar:~$ composer require onurkacmaz/soap
```

### Usage

#### Configure Soap Connection (Optional)
```php
$soapOptions = new SoapOptions();
$soapOptions->setLogin("login");
$soapOptions->setPassword("password");
$soapOptions->setEncoding("....");
....
```

#### Create Soap Request
```php
$request = new SoapRequest();
$request->setEndpoint("endpoint.wsdl");
$request->setMethodName("methodName");
$request->setParameters([]);
```

#### Create and Run Soap Client
```php
$client = new Soap($baseUrl, $soapOptions(nullable));
$response = $client->run($request, $soapOptions);
```

#### Response Getters
```php
$failed = $response->isFailed(); (bool)
$response = $response->response(); (mixed)
$errors = $response->errors(); (array)
$errors = $response->getException(); (null|array)
```

