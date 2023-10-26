# Uctoplus\API\AddressListApi

All URIs are relative to https://api.moje.uctoplus.sk/production, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAddress()**](AddressListApi.md#addAddress) | **POST** /v2/address-list/add | addAddress |
| [**getAddressById()**](AddressListApi.md#getAddressById) | **GET** /v2/address-list/{id}/get | getAddressById. |
| [**getAddressByInternalId()**](AddressListApi.md#getAddressByInternalId) | **GET** /v2/address-list/{id}/get-by-internal-id | getAddressByInternalId. |
| [**getAddressList()**](AddressListApi.md#getAddressList) | **GET** /v2/address-list | getAddressList |


## `addAddress()`

```php
addAddress($address): \Uctoplus\API\Models\AddAddress200Response
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


$apiInstance = new Uctoplus\API\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = new \Uctoplus\API\Models\Address(); // \Uctoplus\API\Models\Address | Address

try {
    $result = $apiInstance->addAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | [**\Uctoplus\API\Models\Address**](../Model/Address.md)| Address | |

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
getAddressById($id): \Uctoplus\API\Models\AddAddress200Response
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


$apiInstance = new Uctoplus\API\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Address identifier

try {
    $result = $apiInstance->getAddressById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->getAddressById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Address identifier | |

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
getAddressByInternalId($id): \Uctoplus\API\Models\AddAddress200Response
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


$apiInstance = new Uctoplus\API\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Get Address by Internal Id

try {
    $result = $apiInstance->getAddressByInternalId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->getAddressByInternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Get Address by Internal Id | |

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
getAddressList(): \Uctoplus\API\Models\Address[]
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


$apiInstance = new Uctoplus\API\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAddressList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->getAddressList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
