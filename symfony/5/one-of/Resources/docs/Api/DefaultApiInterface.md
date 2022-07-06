# OpenAPI\Server\Api\DefaultApiInterface

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shopsGet**](DefaultApiInterface.md#shopsGet) | **GET** /shops | 


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\DefaultApi:
        tags:
            - { name: "open_api_server.api", api: "default" }
    # ...
```

## **shopsGet**
> OpenAPI\Server\Model\ShopListResult shopsGet()



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DefaultApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\DefaultApiInterface;

class DefaultApi implements DefaultApiInterface
{

    // ...

    /**
     * Implementation of DefaultApiInterface#shopsGet
     */
    public function shopsGet(, &$responseCode, array &$responseHeaders): array|\OpenAPI\Server\Model\ShopListResult
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\ShopListResult**](../Model/ShopListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

