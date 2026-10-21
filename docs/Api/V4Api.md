# Uctoplus\API\V4Api



All URIs are relative to http://localhost/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInvoiceV4()**](V4Api.md#addInvoiceV4) | **POST** /v4/invoice/add | Create a new invoice or credit note (v4) |
| [**addPaymentToInvoiceV4()**](V4Api.md#addPaymentToInvoiceV4) | **POST** /v4/invoice/{id}/pay | Record payment for invoice (v4) |
| [**getAddresses()**](V4Api.md#getAddresses) | **GET** /v4/addresses | Retrieve a paginated list of address book contacts |
| [**getInvoiceV4()**](V4Api.md#getInvoiceV4) | **GET** /v4/invoice/{id}/get | Get invoice details by ID (v4) |
| [**getInvoices()**](V4Api.md#getInvoices) | **GET** /v4/invoices | Retrieve a paginated list of invoices |
| [**getUploadedFile()**](V4Api.md#getUploadedFile) | **GET** /v4/upload/{elementType}/{elementId}/get | Retrieve specific uploaded file details |
| [**getUploadedFilesList()**](V4Api.md#getUploadedFilesList) | **GET** /v4/uploaded-files | Retrieve paginated list of uploaded files |
| [**importInvoiceV4()**](V4Api.md#importInvoiceV4) | **POST** /v4/invoice/import | Import and process a Peppol BIS invoice XML |
| [**sendInvoiceViaEmail()**](V4Api.md#sendInvoiceViaEmail) | **POST** /v4/invoice/{id}/send-via-email | Send invoice via email |
| [**sendInvoiceViaPeppol()**](V4Api.md#sendInvoiceViaPeppol) | **POST** /v4/invoice/{id}/send-via-peppol | Send invoice via Peppol network |
| [**uploadFileAttributes()**](V4Api.md#uploadFileAttributes) | **POST** /v4/upload/data-attributes | List of possible data attributes for upload |


## `addInvoiceV4()`

```php
addInvoiceV4($add_invoice_request, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

Create a new invoice or credit note (v4)

Creates a new invoice or credit note with support for custom line items, currency settings, payment types, and optional automatic Peppol network dispatch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_invoice_request = new \Uctoplus\API\Models\AddInvoiceRequest(); // \Uctoplus\API\Models\AddInvoiceRequest | Invoice or Credit Note
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->addInvoiceV4($add_invoice_request, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->addInvoiceV4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_invoice_request** | [**\Uctoplus\API\Models\AddInvoiceRequest**](../Model/AddInvoiceRequest.md)| Invoice or Credit Note | |
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

## `addPaymentToInvoiceV4()`

```php
addPaymentToInvoiceV4($id, $payment, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

Record payment for invoice (v4)

Registers a new payment entry (amount and date) toward an existing invoice to update its settlement status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Invoice identifier
$payment = new \Uctoplus\API\Models\Payment(); // \Uctoplus\API\Models\Payment | Payment
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->addPaymentToInvoiceV4($id, $payment, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->addPaymentToInvoiceV4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Invoice identifier | |
| **payment** | [**\Uctoplus\API\Models\Payment**](../Model/Payment.md)| Payment | |
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

## `getAddresses()`

```php
getAddresses($except, $offset, $limit, $sort, $order): \Uctoplus\API\Models\GetAddresses200Response
```

Retrieve a paginated list of address book contacts

Returns a paginated list of contacts from the company address list, with configurable sorting, ordering, limits, and field exclusions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response
$offset = 0; // int | Optional arguments for offet of items
$limit = 50; // int | Optional arguments limit per page
$sort = 'sort_example'; // string | Optional arguments sort by column
$order = 'order_example'; // string | Optional arguments order by column

try {
    $result = $apiInstance->getAddresses($except, $offset, $limit, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->getAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |
| **offset** | **int**| Optional arguments for offet of items | [optional] [default to 0] |
| **limit** | **int**| Optional arguments limit per page | [optional] [default to 50] |
| **sort** | **string**| Optional arguments sort by column | [optional] |
| **order** | **string**| Optional arguments order by column | [optional] |

### Return type

[**\Uctoplus\API\Models\GetAddresses200Response**](../Model/GetAddresses200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceV4()`

```php
getInvoiceV4($id, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

Get invoice details by ID (v4)

Retrieves complete invoice details, including linked items, summaries, payment states, Peppol statuses, and attached document metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Invoice identifier
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->getInvoiceV4($id, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->getInvoiceV4: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Invoice identifier | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\AddInvoiceV4200Response**](../Model/AddInvoiceV4200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($except, $offset, $limit, $sort, $order): \Uctoplus\API\Models\GetInvoices200Response
```

Retrieve a paginated list of invoices

Fetches a collection of invoices with support for pagination (limit, offset), sorting, ordering, and optional field exclusions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response
$offset = 0; // int | Optional arguments for offet of items
$limit = 50; // int | Optional arguments limit per page
$sort = 'sort_example'; // string | Optional arguments sort by column
$order = 'order_example'; // string | Optional arguments order by column

try {
    $result = $apiInstance->getInvoices($except, $offset, $limit, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |
| **offset** | **int**| Optional arguments for offet of items | [optional] [default to 0] |
| **limit** | **int**| Optional arguments limit per page | [optional] [default to 50] |
| **sort** | **string**| Optional arguments sort by column | [optional] |
| **order** | **string**| Optional arguments order by column | [optional] |

### Return type

[**\Uctoplus\API\Models\GetInvoices200Response**](../Model/GetInvoices200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUploadedFile()`

```php
getUploadedFile($element_type, $element_id, $except): \Uctoplus\API\Models\File
```

Retrieve specific uploaded file details

Fetches metadata, content, and system attributes for a specific uploaded file using its category element type and element UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type = new \Uctoplus\API\Models\\Uctoplus\API\Models\ElementType(); // \Uctoplus\API\Models\ElementType
$element_id = 'element_id_example'; // string
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->getUploadedFile($element_type, $element_id, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->getUploadedFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **element_type** | [**\Uctoplus\API\Models\ElementType**](../Model/.md)|  | |
| **element_id** | **string**|  | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\File**](../Model/File.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUploadedFilesList()`

```php
getUploadedFilesList($element_type, $except, $offset, $limit, $sort, $order): \Uctoplus\API\Models\GetUploadedFilesList200Response
```

Retrieve paginated list of uploaded files

Returns a paginated list of uploaded files filtered by document element type (e.g., incoming invoice, cash bill, contract).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type = new \Uctoplus\API\Models\\Uctoplus\API\Models\ElementType(); // \Uctoplus\API\Models\ElementType
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response
$offset = 0; // int | Optional arguments for offet of items
$limit = 50; // int | Optional arguments limit per page
$sort = 'sort_example'; // string | Optional arguments sort by column
$order = 'order_example'; // string | Optional arguments order by column

try {
    $result = $apiInstance->getUploadedFilesList($element_type, $except, $offset, $limit, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->getUploadedFilesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **element_type** | [**\Uctoplus\API\Models\ElementType**](../Model/.md)|  | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |
| **offset** | **int**| Optional arguments for offet of items | [optional] [default to 0] |
| **limit** | **int**| Optional arguments limit per page | [optional] [default to 50] |
| **sort** | **string**| Optional arguments sort by column | [optional] |
| **order** | **string**| Optional arguments order by column | [optional] |

### Return type

[**\Uctoplus\API\Models\GetUploadedFilesList200Response**](../Model/GetUploadedFilesList200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importInvoiceV4()`

```php
importInvoiceV4($import_invoice_v4_request, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

Import and process a Peppol BIS invoice XML

Imports an electronic invoice structured in Peppol BIS 3 XML format, processes the document, and optionally forwards it directly to the Peppol Access Point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
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
    echo 'Exception when calling V4Api->importInvoiceV4: ', $e->getMessage(), PHP_EOL;
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

## `sendInvoiceViaEmail()`

```php
sendInvoiceViaEmail($id, $send_request, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

Send invoice via email

Dispatches an email notification containing the invoice details and attachment to specified recipient email addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Invoice identifier
$send_request = new \Uctoplus\API\Models\SendRequest(); // \Uctoplus\API\Models\SendRequest | Sent document request
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->sendInvoiceViaEmail($id, $send_request, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->sendInvoiceViaEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Invoice identifier | |
| **send_request** | [**\Uctoplus\API\Models\SendRequest**](../Model/SendRequest.md)| Sent document request | |
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

## `sendInvoiceViaPeppol()`

```php
sendInvoiceViaPeppol($id, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

Send invoice via Peppol network

Transmits the specified invoice electronically to the recipient over the international Peppol e-delivery network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Invoice identifier
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->sendInvoiceViaPeppol($id, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->sendInvoiceViaPeppol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Invoice identifier | |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\AddInvoiceV4200Response**](../Model/AddInvoiceV4200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFileAttributes()`

```php
uploadFileAttributes($element_type): \Uctoplus\API\Models\DataAttributeV4[]
```

List of possible data attributes for upload

This endpoint gives you list of all possible attributes for the specific Element Type which can be used to fill information while file upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\V4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type = new \Uctoplus\API\Models\\Uctoplus\API\Models\ElementType(); // \Uctoplus\API\Models\ElementType

try {
    $result = $apiInstance->uploadFileAttributes($element_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V4Api->uploadFileAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **element_type** | [**\Uctoplus\API\Models\ElementType**](../Model/.md)|  | |

### Return type

[**\Uctoplus\API\Models\DataAttributeV4[]**](../Model/DataAttributeV4.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
