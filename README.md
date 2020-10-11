# isolata

How to install package?

```
composer require isolta/opendata
```

How to use Business Service ?

```php
<?php


use Isolta\OpenData\Exception\BadRequestException;
use Isolta\OpenData\Exception\EmptyResponseException;
use Isolta\OpenData\Exception\JsonParseException;
use Isolta\OpenData\Exception\ValidationException;
use Isolta\OpenData\Formatter\BusinessResponseFormatter;
use Isolta\OpenData\Service\BusinessService;

include "vendor/autoload.php";


$businessService = new BusinessService(new BusinessResponseFormatter());
try {

    $data = $businessService->fetch('3163643-1');

    echo sprintf('Name: %s', $data->getName()) ;
    echo sprintf('Website: %s', $data->getWebsite());
    echo sprintf('Address Info : %s', $data->getAddress());

} catch (BadRequestException $e) {
    echo $e->getMessage();
} catch (EmptyResponseException $e) {
    echo $e->getMessage();
} catch (JsonParseException $e) {
    echo $e->getMessage();
} catch (ValidationException $e) {
    echo $e->getMessage();
}
```
