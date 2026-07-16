# Uctoplus\API\UploadApi



All URIs are relative to http://localhost/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUploadedFile()**](UploadApi.md#getUploadedFile) | **GET** /v3/upload/{elementType}/{elementId}/get | Returning UploadedFile |
| [**getUploadedFiles()**](UploadApi.md#getUploadedFiles) | **GET** /v4/uploaded-files | getUploadedFiles |
| [**uploadFile()**](UploadApi.md#uploadFile) | **POST** /v3/upload/add | Uploading files over RestAPI |
| [**uploadedFilesIndex()**](UploadApi.md#uploadedFilesIndex) | **GET** /v3/upload/index | uploadFile |


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


$apiInstance = new Uctoplus\API\Api\UploadApi(
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
    echo 'Exception when calling UploadApi->getUploadedFile: ', $e->getMessage(), PHP_EOL;
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

## `getUploadedFiles()`

```php
getUploadedFiles($element_type, $except, $offset, $limit, $sort, $order): \Uctoplus\API\Models\GetUploadedFiles200Response
```

getUploadedFiles

Get List of Uploaded Files by elementType

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\UploadApi(
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
    $result = $apiInstance->getUploadedFiles($element_type, $except, $offset, $limit, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->getUploadedFiles: ', $e->getMessage(), PHP_EOL;
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

[**\Uctoplus\API\Models\GetUploadedFiles200Response**](../Model/GetUploadedFiles200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($except, $file, $element_type, $attributes, $pages): \Uctoplus\API\Models\UploadFile200Response
```

Uploading files over RestAPI

Endpoint allows you to upload files either directly into specific category or to the list of files which needs to be sorted later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response
$file = '/path/to/file.txt'; // \SplFileObject
$element_type = new \Uctoplus\API\Models\ElementType(); // \Uctoplus\API\Models\ElementType
$attributes = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Attribute()); // \Uctoplus\API\Models\Attribute[] | Additional data to fill in according
$pages = array('/path/to/file.txt'); // \SplFileObject[] | Separate pages which will be glued together into one file

try {
    $result = $apiInstance->uploadFile($except, $file, $element_type, $attributes, $pages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **element_type** | [**\Uctoplus\API\Models\ElementType**](../Model/ElementType.md)|  | [optional] |
| **attributes** | [**\Uctoplus\API\Models\Attribute[]**](../Model/\Uctoplus\API\Models\Attribute.md)| Additional data to fill in according | [optional] |
| **pages** | **\SplFileObject[]**| Separate pages which will be glued together into one file | [optional] |

### Return type

[**\Uctoplus\API\Models\UploadFile200Response**](../Model/UploadFile200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadedFilesIndex()`

```php
uploadedFilesIndex($element_type, $from, $to, $except): \Uctoplus\API\Models\File[]
```

uploadFile

Upload file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Uctoplus\API\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Uctoplus\API\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type = new \Uctoplus\API\Models\\Uctoplus\API\Models\ElementType(); // \Uctoplus\API\Models\ElementType
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->uploadedFilesIndex($element_type, $from, $to, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadedFilesIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **element_type** | [**\Uctoplus\API\Models\ElementType**](../Model/.md)|  | |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |
| **except** | [**\Uctoplus\API\Models\Except[]**](../Model/\Uctoplus\API\Models\Except.md)| Optional arguments for exclude data from response | [optional] |

### Return type

[**\Uctoplus\API\Models\File[]**](../Model/File.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
