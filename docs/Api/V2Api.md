# Uctoplus\API\V2Api



All URIs are relative to http://localhost/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAddress()**](V2Api.md#addAddress) | **POST** /v2/address-list/add | addAddress |
| [**getAddressById()**](V2Api.md#getAddressById) | **GET** /v2/address-list/{id}/get | getAddressById. |
| [**getAddressByInternalId()**](V2Api.md#getAddressByInternalId) | **GET** /v2/address-list/{id}/get-by-internal-id | getAddressByInternalId. |
| [**getAddressList()**](V2Api.md#getAddressList) | **GET** /v2/address-list | getAddressList |
| [**getCountries()**](V2Api.md#getCountries) | **GET** /v2/dial/global/countries | getCountries |
| [**getCurrencies()**](V2Api.md#getCurrencies) | **GET** /v2/dial/global/currencies | getCurrencies |
| [**getDeliveryTypes()**](V2Api.md#getDeliveryTypes) | **GET** /v2/dial/delivery-types | getDeliveryTypes |
| [**getInvoiceCounter()**](V2Api.md#getInvoiceCounter) | **GET** /v2/dial/invoice-counters/{counter} | getInvoiceCounter |
| [**getInvoiceCounters()**](V2Api.md#getInvoiceCounters) | **GET** /v2/dial/invoice-type/{invoiceType}/counters | getInvoiceCounters |
| [**getLogos()**](V2Api.md#getLogos) | **GET** /v2/dial/logos | getLogos |
| [**getPaymentTypes()**](V2Api.md#getPaymentTypes) | **GET** /v2/dial/payment-types | getPaymentTypes |
| [**getSignatures()**](V2Api.md#getSignatures) | **GET** /v2/dial/signatures | getSignatures |
| [**getTemplates()**](V2Api.md#getTemplates) | **GET** /v2/dial/invoice/templates | getTemplates |


## `addAddress()`

```php
addAddress($address, $except): \Uctoplus\API\Models\AddAddress200Response
```

addAddress

Create new Contact in Address book.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = new \Uctoplus\API\Models\Address(); // \Uctoplus\API\Models\Address | Address
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->addAddress($address, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->addAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | [**\Uctoplus\API\Models\Address**](../Model/Address.md)| Address | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\AddAddress200Response**](../Model/AddAddress200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressById()`

```php
getAddressById($id, $except): \Uctoplus\API\Models\AddAddress200Response
```

getAddressById.

Returns Address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Address identifier
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->getAddressById($id, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getAddressById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Address identifier | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\AddAddress200Response**](../Model/AddAddress200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressByInternalId()`

```php
getAddressByInternalId($id, $except): \Uctoplus\API\Models\AddAddress200Response
```

getAddressByInternalId.

Returns Address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Get Address by Internal Id
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->getAddressByInternalId($id, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getAddressByInternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Get Address by Internal Id | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\AddAddress200Response**](../Model/AddAddress200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressList()`

```php
getAddressList($except): \Uctoplus\API\Models\Address[]
```

getAddressList

Return all Addresses from Company Address List.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->getAddressList($except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getAddressList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\Address[]**](../Model/Address.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountries()`

```php
getCountries(): \Uctoplus\API\Models\Country[]
```

getCountries

Return all Countries in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getCountries: ', $e->getMessage(), PHP_EOL;
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

getCurrencies

Return all Currencies in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getCurrencies: ', $e->getMessage(), PHP_EOL;
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

getDeliveryTypes

Return all DeliveryTypes in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getDeliveryTypes: ', $e->getMessage(), PHP_EOL;
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

getInvoiceCounter

Return Invoice Counter by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
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
    echo 'Exception when calling V2Api->getInvoiceCounter: ', $e->getMessage(), PHP_EOL;
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

getInvoiceCounters

Return all InvoiceCounters in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
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
    echo 'Exception when calling V2Api->getInvoiceCounters: ', $e->getMessage(), PHP_EOL;
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

getLogos

Return all Logos in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLogos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getLogos: ', $e->getMessage(), PHP_EOL;
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

getPaymentTypes

Return all PaymentTypes in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPaymentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getPaymentTypes: ', $e->getMessage(), PHP_EOL;
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

getSignatures

Return all Signatures in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSignatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getSignatures: ', $e->getMessage(), PHP_EOL;
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

getTemplates

Return all Invoice Templates for specific InvoiceType.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2Api->getTemplates: ', $e->getMessage(), PHP_EOL;
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
