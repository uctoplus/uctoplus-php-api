# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly] 
**invoice_number** | [**OneOfStringInvoiceCounter**](OneOfStringInvoiceCounter.md) |  | 
**invoice_type** | **string** | * &#x60;INVOICE&#x60; - Invocie * &#x60;PROFORMA_INVOICE&#x60; - Proforma Invoice * &#x60;DODACI_LIST&#x60; - Dodací list * &#x60;PRICE_QUOTATION&#x60; - Price Quotation | 
**reciever** | [**OneOfAddressString**](OneOfAddressString.md) | If filled new Address in Contact List will be created! | 
**delivery_address** | [**\Uctoplus\API\Models\DeliveryAddress**](DeliveryAddress.md) |  | [optional] 
**internal_description** | **string** |  | [optional] 
**variable_symbol** | **string** |  | [optional] 
**konstantny_symbol** | **string** |  | [optional] 
**specificky_symbol** | **string** |  | [optional] 
**date_issue** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | 
**date_delivery** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**date_due** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**currency** | **string** | Currency of invoice, format corresponds to [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) | [default to 'EUR']
**issuer** | [**\Uctoplus\API\Models\Issuer**](Issuer.md) |  | 
**language** | [**\Uctoplus\API\Models\Language**](Language.md) |  | 
**note1** | **string** | Markdown language allowed. | [optional] 
**note2** | **string** | Markdown language allowed. | [optional] 
**note3** | **string** | Markdown language allowed. | [optional] 
**theme** | [**\Uctoplus\API\Models\Theme**](Theme.md) |  | [optional] 
**logo_version** | **int** | ID from [Moje Účto+](http://moje.uctoplus.sk/) | [optional] 
**signature_version** | **int** | ID from [Moje Účto+](http://moje.uctoplus.sk/) | [optional] 
**template_id** | **int** | ID from [Moje Účto+](http://moje.uctoplus.sk/) | [optional] 
**delivery_type** | **int** | ID from [Moje Účto+](http://moje.uctoplus.sk/) | [optional] 
**payment_type** | **int** | ID from [Moje Účto+](http://moje.uctoplus.sk/) | 
**currency2** | [**\Uctoplus\API\Models\InvoiceCurrency2**](InvoiceCurrency2.md) |  | [optional] 
**items** | [**AnyOfInvoiceItemLinkedInvoiceItem[]**](AnyOfInvoiceItemLinkedInvoiceItem.md) | Items in invoice | 
**reverse_charge** | **bool** |  | [optional] [default to false]
**discount** | **float** |  | [optional] [default to 0.0]
**payment** | [**OneOfPayment**](OneOfPayment.md) |  | [optional] 
**file** | [**OneOfFile**](OneOfFile.md) |  | [optional] [readonly] 
**moje_uctoplus_url** | **string** |  | [optional] [readonly] 
**moje_uctoplus_add_url** | **string** |  | [optional] [readonly] 
**summary** | [**OneOfSummary**](OneOfSummary.md) |  | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


