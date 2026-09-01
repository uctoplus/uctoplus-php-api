# Uctoplus\API\V4Api



All URIs are relative to http://localhost/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInvoiceV4()**](V4Api.md#addInvoiceV4) | **POST** /v4/invoice/add | addInvoiceV4 |
| [**addPaymentToInvoiceV4()**](V4Api.md#addPaymentToInvoiceV4) | **POST** /v4/invoice/{id}/pay | addPaymentToInvoiceV4 |
| [**getAddresses()**](V4Api.md#getAddresses) | **GET** /v4/addresses | getAddresses |
| [**getInvoiceV4()**](V4Api.md#getInvoiceV4) | **GET** /v4/invoice/{id}/get | getInvoiceV4 |
| [**getInvoices()**](V4Api.md#getInvoices) | **GET** /v4/invoices | getInvoices |
| [**getUploadedFile()**](V4Api.md#getUploadedFile) | **GET** /v4/upload/{elementType}/{elementId}/get | Returning UploadedFile |
| [**getUploadedFilesList()**](V4Api.md#getUploadedFilesList) | **GET** /v4/uploaded-files | getUploadedFilesList |
| [**importInvoiceV4()**](V4Api.md#importInvoiceV4) | **POST** /v4/invoice/import | importInvoiceV4 |
| [**sendInvoiceViaEmail()**](V4Api.md#sendInvoiceViaEmail) | **POST** /v4/invoice/{id}/send-via-email | sendInvoiceViaEmail |
| [**sendInvoiceViaPeppol()**](V4Api.md#sendInvoiceViaPeppol) | **POST** /v4/invoice/{id}/send-via-peppol | sendInvoiceViaPeppol |


## `addInvoiceV4()`

```php
addInvoiceV4($add_invoice_request, $except): \Uctoplus\API\Models\AddInvoiceV4200Response
```

addInvoiceV4

Create new Invoice.

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

addPaymentToInvoiceV4

Add payment to invoice.

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

getAddresses

Return all Addresses from Company Address List.

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

getInvoiceV4

Returns Invoice.

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

getInvoices

Get list of invoices.

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

Returning UploadedFile

Returns file.

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

getUploadedFilesList

Get List of Uploaded Files by elementType

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

sendInvoiceViaEmail

Sends invoice from Účto+

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

sendInvoiceViaPeppol

Sends invoice to peppol network from Účto+

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
