# OpenAPI\Client\DefaultApi

All URIs are relative to https://example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**shopsGet()**](DefaultApi.md#shopsGet) | **GET** /shops | 


## `shopsGet()`

```php
shopsGet(): \OpenAPI\Client\Model\ShopListResult
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->shopsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->shopsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ShopListResult**](../Model/ShopListResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
