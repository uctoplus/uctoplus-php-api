# Uctoplus\API\PeppolApi



All URIs are relative to http://localhost/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**importInvoiceV4()**](PeppolApi.md#importInvoiceV4) | **POST** /v4/invoice/import | importInvoiceV4 |


## `importInvoiceV4()`

```php
importInvoiceV4($import_invoice_v4_request, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

importInvoiceV4

Import Peppol BIS invoice from XML file and send it to Peppol Access Point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\PeppolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_invoice_v4_request = new \Uctoplus\API\Models\ImportInvoiceV4Request(); // \Uctoplus\API\Models\ImportInvoiceV4Request | Custom made PeppolBIS Document
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->importInvoiceV4($import_invoice_v4_request, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeppolApi->importInvoiceV4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_invoice_v4_request** | [**\Uctoplus\API\Models\ImportInvoiceV4Request**](../Model/ImportInvoiceV4Request.md)| Custom made PeppolBIS Document | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\AddInvoiceV4200Response**](../Model/AddInvoiceV4200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
