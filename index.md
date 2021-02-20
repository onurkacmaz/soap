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
```
