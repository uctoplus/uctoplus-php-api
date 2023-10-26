# Uctoplus\API\UploadApi

All URIs are relative to https://api.moje.uctoplus.sk/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadFile()**](UploadApi.md#uploadFile) | **POST** /v3/upload/add | Uploading files over RestAPI |
| [**uploadedFilesIndex()**](UploadApi.md#uploadedFilesIndex) | **GET** /v3/upload/index | uploadFile |


## `uploadFile()`

```php
uploadFile($upload_file_request): \Uctoplus\API\Models\UploadFile200Response
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
$upload_file_request = new \Uctoplus\API\Models\UploadFileRequest(); // \Uctoplus\API\Models\UploadFileRequest | Upload single file or upload separate files for pages and API will glue it together into one file.

try {
    $result = $apiInstance->uploadFile($upload_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_file_request** | [**\Uctoplus\API\Models\UploadFileRequest**](../Model/UploadFileRequest.md)| Upload single file or upload separate files for pages and API will glue it together into one file. | |

### Return type

[**\Uctoplus\API\Models\UploadFile200Response**](../Model/UploadFile200Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadedFilesIndex()`

```php
uploadedFilesIndex($element_type, $from, $to): \Uctoplus\API\Models\File[]
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
$element_type = new \Uctoplus\API\Models\ElementType(); // ElementType
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->uploadedFilesIndex($element_type, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadedFilesIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **element_type** | [**ElementType**](../Model/.md)|  | |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |

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
