# # InvoiceRequestItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**name** | **string** |  |
**description** | **string** | Markdown language allowed. | [optional]
**quantity** | **float** |  |
**price_without_tax** | **float** |  |
**tax_percentage** | **float** |  | [optional] [default to 0.0]
**type** | **string** |  |
**discount** | **float** |  | [optional] [default to 0.0]
**discount_type** | **float** | 0 - none 1 - percentage of price, 2 - amount of price | [optional] [default to 0]
**invoice_id** | **string** | Only &#x60;PROFORMA_INVOICE&#x60; can be used as a link. |
**summary** | **string** | One line summary. If not provided Invoice number is used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
