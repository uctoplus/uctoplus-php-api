# Uctoplus\API\InvoiceApi

All URIs are relative to https://api.moje.uctoplus.sk/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInvoice()**](InvoiceApi.md#addInvoice) | **POST** /v3/invoice/add | addInvoice |
| [**addPaymentToInvoice()**](InvoiceApi.md#addPaymentToInvoice) | **POST** /v3/invoice/{id}/pay | addPaymentToInvoice |
| [**getInvoice()**](InvoiceApi.md#getInvoice) | **GET** /v3/invoice/{id}/get | getInvoice |


## `addInvoice()`

```php
addInvoice($add_invoice_request): \Uctoplus\API\Models\AddInvoice200Response
```

addInvoice

Create new Invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_invoice_request = new \Uctoplus\API\Models\AddInvoiceRequest(); // \Uctoplus\API\Models\AddInvoiceRequest | Invoice or Credit Note

try {
    $result = $apiInstance->addInvoice($add_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->addInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_invoice_request** | [**\Uctoplus\API\Models\AddInvoiceRequest**](../Model/AddInvoiceRequest.md)| Invoice or Credit Note | |

### Return type

[**\Uctoplus\API\Models\AddInvoice200Response**](../Model/AddInvoice200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addPaymentToInvoice()`

```php
addPaymentToInvoice($id, $payment): \Uctoplus\API\Models\AddInvoice200Response
```

addPaymentToInvoice

Add payment to invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Invoice identifier
$payment = new \Uctoplus\API\Models\Payment(); // \Uctoplus\API\Models\Payment | Payment

try {
    $result = $apiInstance->addPaymentToInvoice($id, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->addPaymentToInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Invoice identifier | |
| **payment** | [**\Uctoplus\API\Models\Payment**](../Model/Payment.md)| Payment | |

### Return type

[**\Uctoplus\API\Models\AddInvoice200Response**](../Model/AddInvoice200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoice()`

```php
getInvoice($id): \Uctoplus\API\Models\AddInvoice200Response
```

getInvoice

Returns Invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Invoice identifier

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Invoice identifier | |

### Return type

[**\Uctoplus\API\Models\AddInvoice200Response**](../Model/AddInvoice200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
