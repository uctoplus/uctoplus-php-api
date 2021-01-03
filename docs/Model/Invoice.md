# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly] 
**invoice_number** | **string** |  | [optional] 
**invoice_type** | [**\Uctoplus\API\Models\InvoiceType**](InvoiceType.md) |  | [optional] 
**reciever** | [**\Uctoplus\API\Models\Address**](Address.md) |  | [optional] 
**delivery_address** | [**\Uctoplus\API\Models\DeliveryAddress**](DeliveryAddress.md) |  | [optional] 
**internal_description** | **string** |  | [optional] 
**variable_symbol** | **string** |  | [optional] 
**konstantny_symbol** | **string** |  | [optional] 
**specificky_symbol** | **string** |  | [optional] 
**date_issue** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**date_delivery** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**date_due** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**currency** | **string** | Currency of invoice, format corresponds to [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) | [optional] [default to 'EUR']
**issuer** | [**\Uctoplus\API\Models\Issuer**](Issuer.md) |  | [optional] 
**language** | [**\Uctoplus\API\Models\Language**](Language.md) |  | [optional] 
**note1** | **string** | Markdown language allowed. | [optional] 
**note2** | **string** | Markdown language allowed. | [optional] 
**note3** | **string** | Markdown language allowed. | [optional] 
**logo_version** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional] 
**signature_version** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional] 
**template_id** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional] 
**delivery_type** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional] 
**payment_type** | [**\Uctoplus\API\Models\PaymentType**](PaymentType.md) |  | [optional] 
**currency2** | [**\Uctoplus\API\Models\InvoiceCurrency2**](InvoiceCurrency2.md) |  | [optional] 
**items** | [**\Uctoplus\API\Models\InvoiceItem[]**](InvoiceItem.md) | Items in invoice | [optional] 
**tags** | [**\Uctoplus\API\Models\Tag[]**](Tag.md) | Tags | [optional] 
**reverse_charge** | **bool** |  | [optional] [default to false]
**discount** | **float** |  | [optional] [default to 0.0]
**discount_type** | **float** | 0 - none 1 - percentage of price | [optional] [default to 0]
**payment** | [**\Uctoplus\API\Models\Payment**](Payment.md) |  | [optional] 
**file** | [**\Uctoplus\API\Models\File**](File.md) |  | [optional] 
**moje_uctoplus_url** | **string** |  | [optional] 
**moje_uctoplus_add_url** | **string** |  | [optional] 
**summary** | [**\Uctoplus\API\Models\Summary**](Summary.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


