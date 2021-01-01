<?php
/**
 * Language
 *
 * PHP version 5
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Účto+ API
 *
 * Production enviroment is located at `https://moje.uctoplus.sk/api/v2/production`.  Sandbox enviroment is located at `https://moje.uctoplus.sk/api/v2/sandbox`.  All comunication with API is encoded in UTF-8. This REST API is based on Open API v3 standard. For help with implementation or access to the test enviroment please contact our helpdesk
 *
 * The version of the OpenAPI document: 2.0.1
 * Contact: helpdesk@uctoplus.sk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Uctoplus\API\Models;
use \Uctoplus\API\ObjectSerializer;

/**
 * Language Class Doc Comment
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Language
{
    /**
     * Possible values of this enum
     */
    const CS = 'cs';
    const EN = 'en';
    const HU = 'hu';
    const SK = 'sk';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CS,
            self::EN,
            self::HU,
            self::SK,
        ];
    }
}


