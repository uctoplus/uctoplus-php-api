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
 * Production enviroment is located at `https://moje.uctoplus.sk/api/v3/production`.  Sandbox enviroment is located at `https://moje.uctoplus.sk/api/v3/sandbox`.  All comunication with API is encoded in UTF-8. This REST API is based on Open API v3 standard. For help with implementation or access to the test enviroment please contact our helpdesk
 *
 * The version of the OpenAPI document: 3.1.0
 * Contact: helpdesk@uctoplus.sk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * @description * &#x60;INVOICE&#x60; - Invocie * &#x60;PROFORMA_INVOICE&#x60; - Proforma Invoice * &#x60;DODACI_LIST&#x60; - Dodací list * &#x60;PRICE_QUOTATION&#x60; - Price Quotation
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
            self::PRICE_QUOTATION
        ];
    }
}


