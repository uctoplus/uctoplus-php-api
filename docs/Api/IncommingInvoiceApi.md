# Uctoplus\API\IncommingInvoiceApi

All URIs are relative to *https://moje.uctoplus.sk/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**incommingInvoiceAddPost**](IncommingInvoiceApi.md#incommingInvoiceAddPost) | **POST** /incomming-invoice/add | Create Incomming Invoice.
[**incommingInvoiceIdGetGet**](IncommingInvoiceApi.md#incommingInvoiceIdGetGet) | **GET** /incomming-invoice/{id}/get | Returns Incomming Invoice.



## incommingInvoiceAddPost

> \Uctoplus\API\Models\Response incommingInvoiceAddPost($incomming_invoice)

Create Incomming Invoice.

### _In Developement_ !!!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\IncommingInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incomming_invoice = new \Uctoplus\API\Models\IncommingInvoice(); // \Uctoplus\API\Models\IncommingInvoice | Incomming Invoice

try {
    $result = $apiInstance->incommingInvoiceAddPost($incomming_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncommingInvoiceApi->incommingInvoiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incomming_invoice** | [**\Uctoplus\API\Models\IncommingInvoice**](../Model/IncommingInvoice.md)| Incomming Invoice |

### Return type

[**\Uctoplus\API\Models\Response**](../Model/Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## incommingInvoiceIdGetGet

> \Uctoplus\API\Models\Response incommingInvoiceIdGetGet($id)

Returns Incomming Invoice.

### _In Developement_ !!!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\IncommingInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the user identifier, as userId

try {
    $result = $apiInstance->incommingInvoiceIdGetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncommingInvoiceApi->incommingInvoiceIdGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the user identifier, as userId |

### Return type

[**\Uctoplus\API\Models\Response**](../Model/Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

