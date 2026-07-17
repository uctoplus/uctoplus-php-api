# # InvoiceRequestReciever

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**name** | **string** |  |
**street** | **string** |  |
**city** | **string** |  |
**zip** | **string** |  | [optional]
**country** | **string** | 3 letter code of Country [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) | [default to 'SVK']
**sk_ico** | **int** |  | [optional]
**sk_dic** | **int** |  | [optional]
**vat** | **string** |  | [optional]
**internal_id** | **string** | Internal system ID, contact address can be paired with ID in your system and internal_id in Účto+ In case Address has Internal ID system is trying to mach it with existing entry (with Internal ID) in Účto+ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
