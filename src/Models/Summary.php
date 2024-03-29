<?php
/**
 * Summary
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

use \ArrayAccess;
use \Uctoplus\API\ObjectSerializer;

/**
 * Summary Class Doc Comment
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Summary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_without_tax' => 'float',
        'total_with_tax' => 'float',
        'total_tax' => 'float',
        'payed' => 'float',
        'total_to_pay' => 'float',
        'taxes' => '\Uctoplus\API\Models\SummaryTaxesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_without_tax' => null,
        'total_with_tax' => null,
        'total_tax' => null,
        'payed' => null,
        'total_to_pay' => null,
        'taxes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_without_tax' => false,
		'total_with_tax' => false,
		'total_tax' => false,
		'payed' => false,
		'total_to_pay' => false,
		'taxes' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_without_tax' => 'totalWithoutTax',
        'total_with_tax' => 'totalWithTax',
        'total_tax' => 'totalTax',
        'payed' => 'payed',
        'total_to_pay' => 'totalToPay',
        'taxes' => 'taxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_without_tax' => 'setTotalWithoutTax',
        'total_with_tax' => 'setTotalWithTax',
        'total_tax' => 'setTotalTax',
        'payed' => 'setPayed',
        'total_to_pay' => 'setTotalToPay',
        'taxes' => 'setTaxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_without_tax' => 'getTotalWithoutTax',
        'total_with_tax' => 'getTotalWithTax',
        'total_tax' => 'getTotalTax',
        'payed' => 'getPayed',
        'total_to_pay' => 'getTotalToPay',
        'taxes' => 'getTaxes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('total_without_tax', $data ?? [], null);
        $this->setIfExists('total_with_tax', $data ?? [], null);
        $this->setIfExists('total_tax', $data ?? [], null);
        $this->setIfExists('payed', $data ?? [], null);
        $this->setIfExists('total_to_pay', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets total_without_tax
     *
     * @return float|null
     */
    public function getTotalWithoutTax()
    {
        return $this->container['total_without_tax'];
    }

    /**
     * Sets total_without_tax
     *
     * @param float|null $total_without_tax total_without_tax
     *
     * @return self
     */
    public function setTotalWithoutTax($total_without_tax)
    {
        if (is_null($total_without_tax)) {
            throw new \InvalidArgumentException('non-nullable total_without_tax cannot be null');
        }
        $this->container['total_without_tax'] = $total_without_tax;

        return $this;
    }

    /**
     * Gets total_with_tax
     *
     * @return float|null
     */
    public function getTotalWithTax()
    {
        return $this->container['total_with_tax'];
    }

    /**
     * Sets total_with_tax
     *
     * @param float|null $total_with_tax total_with_tax
     *
     * @return self
     */
    public function setTotalWithTax($total_with_tax)
    {
        if (is_null($total_with_tax)) {
            throw new \InvalidArgumentException('non-nullable total_with_tax cannot be null');
        }
        $this->container['total_with_tax'] = $total_with_tax;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return float|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float|null $total_tax total_tax
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        if (is_null($total_tax)) {
            throw new \InvalidArgumentException('non-nullable total_tax cannot be null');
        }
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets payed
     *
     * @return float|null
     */
    public function getPayed()
    {
        return $this->container['payed'];
    }

    /**
     * Sets payed
     *
     * @param float|null $payed payed
     *
     * @return self
     */
    public function setPayed($payed)
    {
        if (is_null($payed)) {
            throw new \InvalidArgumentException('non-nullable payed cannot be null');
        }
        $this->container['payed'] = $payed;

        return $this;
    }

    /**
     * Gets total_to_pay
     *
     * @return float|null
     */
    public function getTotalToPay()
    {
        return $this->container['total_to_pay'];
    }

    /**
     * Sets total_to_pay
     *
     * @param float|null $total_to_pay total_to_pay
     *
     * @return self
     */
    public function setTotalToPay($total_to_pay)
    {
        if (is_null($total_to_pay)) {
            throw new \InvalidArgumentException('non-nullable total_to_pay cannot be null');
        }
        $this->container['total_to_pay'] = $total_to_pay;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Uctoplus\API\Models\SummaryTaxesInner[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Uctoplus\API\Models\SummaryTaxesInner[]|null $taxes taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }
        $this->container['taxes'] = $taxes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


