# OpenAPI\Server\Api\DefaultApiInterface

All URIs are relative to *https://example.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**basicGet**](DefaultApiInterface.md#basicGet) | **GET** /basic | 
[**bearerGet**](DefaultApiInterface.md#bearerGet) | **GET** /bearer | 
[**multipleGet**](DefaultApiInterface.md#multipleGet) | **GET** /multiple | 
[**oauth2Get**](DefaultApiInterface.md#oauth2Get) | **GET** /oauth2 | 


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

## **basicGet**
> OpenAPI\Server\Model\ResourceListResult basicGet()



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
     * Implementation of DefaultApiInterface#basicGet
     */
    public function basicGet(, &$responseCode, array &$responseHeaders): array|\OpenAPI\Server\Model\ResourceListResult
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\ResourceListResult**](../Model/ResourceListResult.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bearerGet**
> OpenAPI\Server\Model\ResourceListResult bearerGet()



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
     * Implementation of DefaultApiInterface#bearerGet
     */
    public function bearerGet(, &$responseCode, array &$responseHeaders): array|\OpenAPI\Server\Model\ResourceListResult
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\ResourceListResult**](../Model/ResourceListResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **multipleGet**
> OpenAPI\Server\Model\ResourceListResult multipleGet()



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DefaultApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\DefaultApiInterface;

class DefaultApi implements DefaultApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: OAuth2
     */
    public function setOAuth2($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of DefaultApiInterface#multipleGet
     */
    public function multipleGet(, &$responseCode, array &$responseHeaders): array|\OpenAPI\Server\Model\ResourceListResult
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\ResourceListResult**](../Model/ResourceListResult.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **oauth2Get**
> OpenAPI\Server\Model\ResourceListResult oauth2Get()



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DefaultApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\DefaultApiInterface;

class DefaultApi implements DefaultApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: OAuth2
     */
    public function setOAuth2($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of DefaultApiInterface#oauth2Get
     */
    public function oauth2Get(, &$responseCode, array &$responseHeaders): array|\OpenAPI\Server\Model\ResourceListResult
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\ResourceListResult**](../Model/ResourceListResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

