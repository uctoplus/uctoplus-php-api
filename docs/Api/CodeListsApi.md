# Uctoplus\API\CodeListsApi



All URIs are relative to http://localhost/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCountries()**](CodeListsApi.md#getCountries) | **GET** /v2/dial/global/countries | Retrieve available countries code list |
| [**getCurrencies()**](CodeListsApi.md#getCurrencies) | **GET** /v2/dial/global/currencies | Retrieve available currencies code list |
| [**getDeliveryTypes()**](CodeListsApi.md#getDeliveryTypes) | **GET** /v2/dial/delivery-types | Retrieve delivery options code list |
| [**getInvoiceCounter()**](CodeListsApi.md#getInvoiceCounter) | **GET** /v2/dial/invoice-counters/{counter} | Retrieve specific invoice counter details |
| [**getInvoiceCounters()**](CodeListsApi.md#getInvoiceCounters) | **GET** /v2/dial/invoice-type/{invoiceType}/counters | Retrieve number counters by document type |
| [**getLogos()**](CodeListsApi.md#getLogos) | **GET** /v2/dial/logos | Retrieve configured company logos |
| [**getPaymentTypes()**](CodeListsApi.md#getPaymentTypes) | **GET** /v2/dial/payment-types | Retrieve payment methods code list |
| [**getSignatures()**](CodeListsApi.md#getSignatures) | **GET** /v2/dial/signatures | Retrieve configured company signatures |
| [**getTemplates()**](CodeListsApi.md#getTemplates) | **GET** /v2/dial/invoice/templates | Retrieve invoice design templates |


## `getCountries()`

```php
getCountries(): \Uctoplus\API\Models\Country[]
```

Retrieve available countries code list

Returns the full list of available countries along with their 3-letter ISO 3166-1 alpha-3 country codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\Country[]**](../Model/Country.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencies()`

```php
getCurrencies(): \Uctoplus\API\Models\Currency[]
```

Retrieve available currencies code list

Returns the full list of currencies supported by the system, formatted with ISO 4217 standard codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\Currency[]**](../Model/Currency.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryTypes()`

```php
getDeliveryTypes(): \Uctoplus\API\Models\DeliveryType[]
```

Retrieve delivery options code list

Returns all supported delivery types (e.g., electronic delivery, courier, personal pickup) configured for the company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getDeliveryTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\DeliveryType[]**](../Model/DeliveryType.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceCounter()`

```php
getInvoiceCounter($counter): \Uctoplus\API\Models\GetInvoiceCounter200Response
```

Retrieve specific invoice counter details

Returns configuration details (such as format string and current sequence) for a single invoice counter by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$counter = 56; // int | ID of Invoice Counter

try {
    $result = $apiInstance->getInvoiceCounter($counter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getInvoiceCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **counter** | **int**| ID of Invoice Counter | |

### Return type

[**\Uctoplus\API\Models\GetInvoiceCounter200Response**](../Model/GetInvoiceCounter200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceCounters()`

```php
getInvoiceCounters($invoice_type): \Uctoplus\API\Models\InvoiceCounter[]
```

Retrieve number counters by document type

Fetches all configured number sequence counters (numbering series) associated with a specific document/invoice type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_type = new \Uctoplus\API\Models\\Uctoplus\API\Models\InvoiceType(); // \Uctoplus\API\Models\InvoiceType | * `INVOICE` - Invoice * `PROFORMA_INVOICE` - Proforma Invoice * `DODACI_LIST` - Dodací list * `VAT_PROOF` - VAT Proof * `PRICE_QUOTATION` - Price Quotation * `CREDIT_NOTE` - Credit note

try {
    $result = $apiInstance->getInvoiceCounters($invoice_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getInvoiceCounters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_type** | [**\Uctoplus\API\Models\InvoiceType**](../Model/.md)| * &#x60;INVOICE&#x60; - Invoice * &#x60;PROFORMA_INVOICE&#x60; - Proforma Invoice * &#x60;DODACI_LIST&#x60; - Dodací list * &#x60;VAT_PROOF&#x60; - VAT Proof * &#x60;PRICE_QUOTATION&#x60; - Price Quotation * &#x60;CREDIT_NOTE&#x60; - Credit note | |

### Return type

[**\Uctoplus\API\Models\InvoiceCounter[]**](../Model/InvoiceCounter.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogos()`

```php
getLogos(): \Uctoplus\API\Models\Logo[]
```

Retrieve configured company logos

Returns all company logo assets available for branding generated invoices and documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLogos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getLogos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\Logo[]**](../Model/Logo.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTypes()`

```php
getPaymentTypes(): \Uctoplus\API\Models\PaymentType[]
```

Retrieve payment methods code list

Returns all valid payment types (e.g., bank transfer, cash, card) available for assignment to invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPaymentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getPaymentTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\PaymentType[]**](../Model/PaymentType.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignatures()`

```php
getSignatures(): \Uctoplus\API\Models\Signature[]
```

Retrieve configured company signatures

Returns all pre-configured digital signature graphics available to be appended to outgoing invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSignatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getSignatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\Signature[]**](../Model/Signature.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplates()`

```php
getTemplates(): \Uctoplus\API\Models\InvoiceTemplate[]
```

Retrieve invoice design templates

Returns all available visual invoice template layouts that can be applied to rendered document PDFs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Uctoplus\API\Models\InvoiceTemplate[]**](../Model/InvoiceTemplate.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
