# Uctoplus\API\UploadApi

All URIs are relative to https://moje.uctoplus.sk/api/v3/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadFile()**](UploadApi.md#uploadFile) | **POST** /upload/add | uploadFile |


## `uploadFile()`

```php
uploadFile($upload_file_request)
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
$upload_file_request = new \Uctoplus\API\Models\UploadFileRequest(); // \Uctoplus\API\Models\UploadFileRequest | File for upload

try {
    $apiInstance->uploadFile($upload_file_request);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_file_request** | [**\Uctoplus\API\Models\UploadFileRequest**](../Model/UploadFileRequest.md)| File for upload | |

### Return type

void (empty response body)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
