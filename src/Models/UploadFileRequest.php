<?php
/**
 * UploadFileRequest
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
 * The version of the OpenAPI document: 3.1.1
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

use \ArrayAccess;
use \Uctoplus\API\ObjectSerializer;

/**
 * UploadFileRequest Class Doc Comment
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UploadFileRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UploadFileRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file' => '\Uctoplus\API\Models\File',
        'element_type' => 'string',
        'element_sub_type' => '\Uctoplus\API\Models\UploadFileRequestElementSubType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file' => null,
        'element_type' => null,
        'element_sub_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'file' => false,
		'element_type' => false,
		'element_sub_type' => false
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
        'file' => 'file',
        'element_type' => 'elementType',
        'element_sub_type' => 'elementSubType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile',
        'element_type' => 'setElementType',
        'element_sub_type' => 'setElementSubType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile',
        'element_type' => 'getElementType',
        'element_sub_type' => 'getElementSubType'
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

    public const ELEMENT_TYPE_OUTGOING_INVOICE = 'OUTGOING_INVOICE';
    public const ELEMENT_TYPE_INCOMING_INVOICE = 'INCOMING_INVOICE';
    public const ELEMENT_TYPE_CASH_BILL = 'CASH_BILL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getElementTypeAllowableValues()
    {
        return [
            self::ELEMENT_TYPE_OUTGOING_INVOICE,
            self::ELEMENT_TYPE_INCOMING_INVOICE,
            self::ELEMENT_TYPE_CASH_BILL,
        ];
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
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('element_type', $data ?? [], null);
        $this->setIfExists('element_sub_type', $data ?? [], null);
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

        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        $allowedValues = $this->getElementTypeAllowableValues();
        if (!is_null($this->container['element_type']) && !in_array($this->container['element_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'element_type', must be one of '%s'",
                $this->container['element_type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets file
     *
     * @return \Uctoplus\API\Models\File
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \Uctoplus\API\Models\File $file file
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            throw new \InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets element_type
     *
     * @return string|null
     */
    public function getElementType()
    {
        return $this->container['element_type'];
    }

    /**
     * Sets element_type
     *
     * @param string|null $element_type element_type
     *
     * @return self
     */
    public function setElementType($element_type)
    {
        if (is_null($element_type)) {
            throw new \InvalidArgumentException('non-nullable element_type cannot be null');
        }
        $allowedValues = $this->getElementTypeAllowableValues();
        if (!in_array($element_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'element_type', must be one of '%s'",
                    $element_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['element_type'] = $element_type;

        return $this;
    }

    /**
     * Gets element_sub_type
     *
     * @return \Uctoplus\API\Models\UploadFileRequestElementSubType|null
     */
    public function getElementSubType()
    {
        return $this->container['element_sub_type'];
    }

    /**
     * Sets element_sub_type
     *
     * @param \Uctoplus\API\Models\UploadFileRequestElementSubType|null $element_sub_type element_sub_type
     *
     * @return self
     */
    public function setElementSubType($element_sub_type)
    {
        if (is_null($element_sub_type)) {
            throw new \InvalidArgumentException('non-nullable element_sub_type cannot be null');
        }
        $this->container['element_sub_type'] = $element_sub_type;

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


