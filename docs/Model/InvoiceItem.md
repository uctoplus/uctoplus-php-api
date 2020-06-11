# # InvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly] 
**name** | **string** |  | 
**description** | **string** | Description of item. Markdown language allowed. | [optional] 
**quantity** | **float** |  | 
**price_without_tax** | **float** |  | 
**tax_percentage** | **float** |  | [optional] [default to 0.0]
**type** | **string** |  | 
**discount** | **float** |  | [optional] [default to 0.0]
**discount_type** | **float** | 0 - none 1 - percentage of price, 2 - amount of price | [optional] [default to 0]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


