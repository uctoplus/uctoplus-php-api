<?php
/**
 * ElementType
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
 * The version of the OpenAPI document: 3.1.2
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
 * ElementType Class Doc Comment
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ElementType
{
    /**
     * Possible values of this enum
     */
    public const OUTGOING_INVOICE = 'OUTGOING_INVOICE';

    public const INCOMING_INVOICE = 'INCOMING_INVOICE';

    public const CASH_BILL = 'CASH_BILL';

    public const CONTRACT = 'CONTRACT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OUTGOING_INVOICE,
            self::INCOMING_INVOICE,
            self::CASH_BILL,
            self::CONTRACT
        ];
    }
}


