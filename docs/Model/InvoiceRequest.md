# # InvoiceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | [**\Uctoplus\API\Models\InvoiceRequestInvoiceNumber**](InvoiceRequestInvoiceNumber.md) |  |
**invoice_type** | [**\Uctoplus\API\Models\InvoiceType**](InvoiceType.md) |  |
**reciever** | [**\Uctoplus\API\Models\InvoiceRequestReciever**](InvoiceRequestReciever.md) |  |
**delivery_address** | [**\Uctoplus\API\Models\InvoiceRequestDeliveryAddress**](InvoiceRequestDeliveryAddress.md) |  | [optional]
**internal_description** | **string** |  | [optional]
**variable_symbol** | **string** |  | [optional]
**konstantny_symbol** | **string** |  | [optional]
**specificky_symbol** | **string** |  | [optional]
**date_issue** | **\DateTime** | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) |
**date_delivery** | **\DateTime** | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional]
**date_due** | **\DateTime** | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional]
**currency** | **string** | Currency of invoice, format corresponds to [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) | [default to 'EUR']
**issuer** | [**\Uctoplus\API\Models\Issuer**](Issuer.md) |  |
**language** | [**\Uctoplus\API\Models\Language**](Language.md) |  |
**note1** | **string** | Markdown language allowed. | [optional]
**note2** | **string** | Markdown language allowed. | [optional]
**note3** | **string** | Markdown language allowed. | [optional]
**theme** | [**\Uctoplus\API\Models\Theme**](Theme.md) |  | [optional]
**logo_version** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional]
**signature_version** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional]
**template_id** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional]
**delivery_type** | **int** | ID from [Účto+](https://moje.uctoplus.sk) | [optional]
**payment_type** | [**\Uctoplus\API\Models\InvoiceRequestPaymentType**](InvoiceRequestPaymentType.md) |  |
**currency2** | [**\Uctoplus\API\Models\InvoiceCurrency2**](InvoiceCurrency2.md) |  | [optional]
**items** | [**\Uctoplus\API\Models\InvoiceRequestItemsInner[]**](InvoiceRequestItemsInner.md) | Items in invoice |
**tags** | [**\Uctoplus\API\Models\InvoiceRequestTagsInner[]**](InvoiceRequestTagsInner.md) | Tags | [optional]
**reverse_charge** | **bool** |  | [optional] [default to false]
**discount** | **float** |  | [optional] [default to 0.0]
**discount_type** | **float** | 0 - none 1 - percentage of price | [optional] [default to 0]
**payment** | [**\Uctoplus\API\Models\InvoiceRequestPayment**](InvoiceRequestPayment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
