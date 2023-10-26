# # CreditNoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | [**\Uctoplus\API\Models\InvoiceRequestInvoiceNumber**](InvoiceRequestInvoiceNumber.md) |  |
**invoice_type** | [**\Uctoplus\API\Models\CreditNoteType**](CreditNoteType.md) |  |
**original_invoice_reference** | **string** | UUID of the original Invoice |
**reciever** | [**\Uctoplus\API\Models\InvoiceRequestReciever**](InvoiceRequestReciever.md) |  |
**internal_description** | **string** |  | [optional]
**date_issue** | **\DateTime** | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) |
**date_delivery** | **\DateTime** | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional]
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
**currency2** | [**\Uctoplus\API\Models\InvoiceCurrency2**](InvoiceCurrency2.md) |  | [optional]
**items** | [**\Uctoplus\API\Models\CreditNoteRequestItemsInner[]**](CreditNoteRequestItemsInner.md) | Items in invoice |
**tags** | [**\Uctoplus\API\Models\InvoiceRequestTagsInner[]**](InvoiceRequestTagsInner.md) | Tags | [optional]
**reverse_charge** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
