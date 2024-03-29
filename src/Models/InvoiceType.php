<?php
/**
 * InvoiceType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Účto+ API
 *
 * Production environment is located at `https://api.moje.uctoplus.sk/production/`.  Sandbox environment is located at `https://api.moje.uctoplus.sk/sandbox/`.  All communication with API is encoded in UTF-8. This REST API is based on Open API v3 standard. For help with implementation or access to the test environment please contact our helpdesk
 *
 * The version of the OpenAPI document: 3.2.0
 * Contact: helpdesk@uctoplus.sk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Uctoplus\API\Models;
use \Uctoplus\API\ObjectSerializer;

/**
 * InvoiceType Class Doc Comment
 *
 * @category Class
 * @description * &#x60;INVOICE&#x60; - Invocie * &#x60;PROFORMA_INVOICE&#x60; - Proforma Invoice * &#x60;DODACI_LIST&#x60; - Dodací list * &#x60;PRICE_QUOTATION&#x60; - Price Quotation * &#x60;CREDIT_NOTE&#x60; - Credit Note
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceType
{
    /**
     * Possible values of this enum
     */
    public const INVOICE = 'INVOICE';

    public const PROFORMA_INVOICE = 'PROFORMA_INVOICE';

    public const DODACI_LIST = 'DODACI_LIST';

    public const PRICE_QUOTATION = 'PRICE_QUOTATION';

    public const CREDIT_NOTE = 'CREDIT_NOTE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVOICE,
            self::PROFORMA_INVOICE,
            self::DODACI_LIST,
            self::PRICE_QUOTATION,
            self::CREDIT_NOTE
        ];
    }
}


