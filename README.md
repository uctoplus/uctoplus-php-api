# OpenAPIClient-php

Production environment is located at `https://api.moje.uctoplus.sk/production/`.

Sandbox environment is located at `https://api.moje.uctoplus.sk/sandbox/`.

All communication with API is encoded in UTF-8. This REST API is based on Open API v3 standard. For help with implementation or access to the test environment please contact our helpdesk


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/uctoplus/uctoplus-php-api.git"
    }
  ],
  "require": {
    "uctoplus/uctoplus-php-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$except = array(new \Uctoplus\API\Models\\Uctoplus\API\Models\Except()); // \Uctoplus\API\Models\Except[] | Optional arguments for exclude data from response

try {
    $result = $apiInstance->addAddress($address, $except);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->addAddress: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.moje.uctoplus.sk/production*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressListApi* | [**addAddress**](docs/Api/AddressListApi.md#addaddress) | **POST** /v2/address-list/add | addAddress
*AddressListApi* | [**getAddressById**](docs/Api/AddressListApi.md#getaddressbyid) | **GET** /v2/address-list/{id}/get | getAddressById.
*AddressListApi* | [**getAddressByInternalId**](docs/Api/AddressListApi.md#getaddressbyinternalid) | **GET** /v2/address-list/{id}/get-by-internal-id | getAddressByInternalId.
*AddressListApi* | [**getAddressList**](docs/Api/AddressListApi.md#getaddresslist) | **GET** /v2/address-list | getAddressList
*CodeListsApi* | [**getCountries**](docs/Api/CodeListsApi.md#getcountries) | **GET** /v2/dial/global/countries | getCountries
*CodeListsApi* | [**getCurrencies**](docs/Api/CodeListsApi.md#getcurrencies) | **GET** /v2/dial/global/currencies | getCurrencies
*CodeListsApi* | [**getDeliveryTypes**](docs/Api/CodeListsApi.md#getdeliverytypes) | **GET** /v2/dial/delivery-types | getDeliveryTypes
*CodeListsApi* | [**getInvoiceCounter**](docs/Api/CodeListsApi.md#getinvoicecounter) | **GET** /v2/dial/invoice-counters/{counter} | getInvoiceCounter
*CodeListsApi* | [**getInvoiceCounters**](docs/Api/CodeListsApi.md#getinvoicecounters) | **GET** /v2/dial/invoice-type/{invoiceType}/counters | getInvoiceCounters
*CodeListsApi* | [**getLogos**](docs/Api/CodeListsApi.md#getlogos) | **GET** /v2/dial/logos | getLogos
*CodeListsApi* | [**getPaymentTypes**](docs/Api/CodeListsApi.md#getpaymenttypes) | **GET** /v2/dial/payment-types | getPaymentTypes
*CodeListsApi* | [**getSignatures**](docs/Api/CodeListsApi.md#getsignatures) | **GET** /v2/dial/signatures | getSignatures
*CodeListsApi* | [**getTemplates**](docs/Api/CodeListsApi.md#gettemplates) | **GET** /v2/dial/invoice/templates | getTemplates
*CountriesApi* | [**getCountries**](docs/Api/CountriesApi.md#getcountries) | **GET** /v2/dial/global/countries | getCountries
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /v2/dial/global/currencies | getCurrencies
*DeliveryTypesApi* | [**getDeliveryTypes**](docs/Api/DeliveryTypesApi.md#getdeliverytypes) | **GET** /v2/dial/delivery-types | getDeliveryTypes
*InvoiceApi* | [**addInvoice**](docs/Api/InvoiceApi.md#addinvoice) | **POST** /v3/invoice/add | addInvoice
*InvoiceApi* | [**addPaymentToInvoice**](docs/Api/InvoiceApi.md#addpaymenttoinvoice) | **POST** /v3/invoice/{id}/pay | addPaymentToInvoice
*InvoiceApi* | [**getInvoice**](docs/Api/InvoiceApi.md#getinvoice) | **GET** /v3/invoice/{id}/get | getInvoice
*InvoiceApi* | [**sendInvoice**](docs/Api/InvoiceApi.md#sendinvoice) | **POST** /v3/invoice/{id}/send | sendInvoice
*InvoiceCountersApi* | [**getInvoiceCounters**](docs/Api/InvoiceCountersApi.md#getinvoicecounters) | **GET** /v2/dial/invoice-type/{invoiceType}/counters | getInvoiceCounters
*InvoiceTemplatesApi* | [**getTemplates**](docs/Api/InvoiceTemplatesApi.md#gettemplates) | **GET** /v2/dial/invoice/templates | getTemplates
*LogosApi* | [**getLogos**](docs/Api/LogosApi.md#getlogos) | **GET** /v2/dial/logos | getLogos
*PaymentTypesApi* | [**getPaymentTypes**](docs/Api/PaymentTypesApi.md#getpaymenttypes) | **GET** /v2/dial/payment-types | getPaymentTypes
*SignaturesApi* | [**getSignatures**](docs/Api/SignaturesApi.md#getsignatures) | **GET** /v2/dial/signatures | getSignatures
*UploadApi* | [**uploadFile**](docs/Api/UploadApi.md#uploadfile) | **POST** /v3/upload/add | Uploading files over RestAPI
*UploadApi* | [**uploadedFilesIndex**](docs/Api/UploadApi.md#uploadedfilesindex) | **GET** /v3/upload/index | uploadFile

## Models

- [AddAddress200Response](docs/Model/AddAddress200Response.md)
- [AddInvoice200Response](docs/Model/AddInvoice200Response.md)
- [AddInvoiceRequest](docs/Model/AddInvoiceRequest.md)
- [Address](docs/Model/Address.md)
- [Attribute](docs/Model/Attribute.md)
- [Country](docs/Model/Country.md)
- [CreditNoteItem](docs/Model/CreditNoteItem.md)
- [CreditNoteRequest](docs/Model/CreditNoteRequest.md)
- [CreditNoteRequestItemsInner](docs/Model/CreditNoteRequestItemsInner.md)
- [CreditNoteType](docs/Model/CreditNoteType.md)
- [Currency](docs/Model/Currency.md)
- [DeliveryAddress](docs/Model/DeliveryAddress.md)
- [DeliveryType](docs/Model/DeliveryType.md)
- [Element](docs/Model/Element.md)
- [ElementType](docs/Model/ElementType.md)
- [Except](docs/Model/Except.md)
- [File](docs/Model/File.md)
- [FileMimeTypes](docs/Model/FileMimeTypes.md)
- [FileRequest](docs/Model/FileRequest.md)
- [GetInvoiceCounter200Response](docs/Model/GetInvoiceCounter200Response.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceCounter](docs/Model/InvoiceCounter.md)
- [InvoiceCurrency2](docs/Model/InvoiceCurrency2.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceRequest](docs/Model/InvoiceRequest.md)
- [InvoiceRequestDeliveryAddress](docs/Model/InvoiceRequestDeliveryAddress.md)
- [InvoiceRequestInvoiceNumber](docs/Model/InvoiceRequestInvoiceNumber.md)
- [InvoiceRequestItemsInner](docs/Model/InvoiceRequestItemsInner.md)
- [InvoiceRequestPayment](docs/Model/InvoiceRequestPayment.md)
- [InvoiceRequestPaymentType](docs/Model/InvoiceRequestPaymentType.md)
- [InvoiceRequestReciever](docs/Model/InvoiceRequestReciever.md)
- [InvoiceRequestTagsInner](docs/Model/InvoiceRequestTagsInner.md)
- [InvoiceTemplate](docs/Model/InvoiceTemplate.md)
- [InvoiceType](docs/Model/InvoiceType.md)
- [Issuer](docs/Model/Issuer.md)
- [Language](docs/Model/Language.md)
- [LinkedInvoiceItem](docs/Model/LinkedInvoiceItem.md)
- [Logo](docs/Model/Logo.md)
- [Page](docs/Model/Page.md)
- [Payment](docs/Model/Payment.md)
- [PaymentType](docs/Model/PaymentType.md)
- [Response](docs/Model/Response.md)
- [ResponseContentERROR](docs/Model/ResponseContentERROR.md)
- [SendRequest](docs/Model/SendRequest.md)
- [Signature](docs/Model/Signature.md)
- [Summary](docs/Model/Summary.md)
- [SummaryTaxesInner](docs/Model/SummaryTaxesInner.md)
- [Tag](docs/Model/Tag.md)
- [TagType](docs/Model/TagType.md)
- [Theme](docs/Model/Theme.md)
- [UploadFile200Response](docs/Model/UploadFile200Response.md)
- [UploadFileRequest](docs/Model/UploadFileRequest.md)
- [UploadMultipageFileRequest](docs/Model/UploadMultipageFileRequest.md)
- [UploadSingleFileRequest](docs/Model/UploadSingleFileRequest.md)

## Authorization

Authentication schemes defined for the API:
### api-key

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

helpdesk@uctoplus.sk

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
