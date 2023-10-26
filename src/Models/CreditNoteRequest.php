<?php
/**
 * CreditNoteRequest
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
 * CreditNoteRequest Class Doc Comment
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreditNoteRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreditNoteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_number' => '\Uctoplus\API\Models\InvoiceRequestInvoiceNumber',
        'invoice_type' => '\Uctoplus\API\Models\CreditNoteType',
        'original_invoice_reference' => 'string',
        'reciever' => '\Uctoplus\API\Models\InvoiceRequestReciever',
        'internal_description' => 'string',
        'date_issue' => '\DateTime',
        'date_delivery' => '\DateTime',
        'currency' => 'string',
        'issuer' => '\Uctoplus\API\Models\Issuer',
        'language' => '\Uctoplus\API\Models\Language',
        'note1' => 'string',
        'note2' => 'string',
        'note3' => 'string',
        'theme' => '\Uctoplus\API\Models\Theme',
        'logo_version' => 'int',
        'signature_version' => 'int',
        'template_id' => 'int',
        'currency2' => '\Uctoplus\API\Models\InvoiceCurrency2',
        'items' => '\Uctoplus\API\Models\CreditNoteRequestItemsInner[]',
        'tags' => '\Uctoplus\API\Models\InvoiceRequestTagsInner[]',
        'reverse_charge' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_number' => null,
        'invoice_type' => null,
        'original_invoice_reference' => null,
        'reciever' => null,
        'internal_description' => null,
        'date_issue' => 'date',
        'date_delivery' => 'date',
        'currency' => null,
        'issuer' => null,
        'language' => null,
        'note1' => null,
        'note2' => null,
        'note3' => null,
        'theme' => null,
        'logo_version' => null,
        'signature_version' => null,
        'template_id' => null,
        'currency2' => null,
        'items' => null,
        'tags' => null,
        'reverse_charge' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_number' => false,
		'invoice_type' => false,
		'original_invoice_reference' => false,
		'reciever' => false,
		'internal_description' => true,
		'date_issue' => false,
		'date_delivery' => false,
		'currency' => false,
		'issuer' => false,
		'language' => false,
		'note1' => true,
		'note2' => true,
		'note3' => true,
		'theme' => true,
		'logo_version' => true,
		'signature_version' => true,
		'template_id' => true,
		'currency2' => true,
		'items' => false,
		'tags' => false,
		'reverse_charge' => false
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
        'invoice_number' => 'invoiceNumber',
        'invoice_type' => 'invoiceType',
        'original_invoice_reference' => 'originalInvoiceReference',
        'reciever' => 'reciever',
        'internal_description' => 'internalDescription',
        'date_issue' => 'dateIssue',
        'date_delivery' => 'dateDelivery',
        'currency' => 'currency',
        'issuer' => 'issuer',
        'language' => 'language',
        'note1' => 'note1',
        'note2' => 'note2',
        'note3' => 'note3',
        'theme' => 'theme',
        'logo_version' => 'logoVersion',
        'signature_version' => 'signatureVersion',
        'template_id' => 'templateId',
        'currency2' => 'currency2',
        'items' => 'items',
        'tags' => 'tags',
        'reverse_charge' => 'reverseCharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_number' => 'setInvoiceNumber',
        'invoice_type' => 'setInvoiceType',
        'original_invoice_reference' => 'setOriginalInvoiceReference',
        'reciever' => 'setReciever',
        'internal_description' => 'setInternalDescription',
        'date_issue' => 'setDateIssue',
        'date_delivery' => 'setDateDelivery',
        'currency' => 'setCurrency',
        'issuer' => 'setIssuer',
        'language' => 'setLanguage',
        'note1' => 'setNote1',
        'note2' => 'setNote2',
        'note3' => 'setNote3',
        'theme' => 'setTheme',
        'logo_version' => 'setLogoVersion',
        'signature_version' => 'setSignatureVersion',
        'template_id' => 'setTemplateId',
        'currency2' => 'setCurrency2',
        'items' => 'setItems',
        'tags' => 'setTags',
        'reverse_charge' => 'setReverseCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_number' => 'getInvoiceNumber',
        'invoice_type' => 'getInvoiceType',
        'original_invoice_reference' => 'getOriginalInvoiceReference',
        'reciever' => 'getReciever',
        'internal_description' => 'getInternalDescription',
        'date_issue' => 'getDateIssue',
        'date_delivery' => 'getDateDelivery',
        'currency' => 'getCurrency',
        'issuer' => 'getIssuer',
        'language' => 'getLanguage',
        'note1' => 'getNote1',
        'note2' => 'getNote2',
        'note3' => 'getNote3',
        'theme' => 'getTheme',
        'logo_version' => 'getLogoVersion',
        'signature_version' => 'getSignatureVersion',
        'template_id' => 'getTemplateId',
        'currency2' => 'getCurrency2',
        'items' => 'getItems',
        'tags' => 'getTags',
        'reverse_charge' => 'getReverseCharge'
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
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('invoice_type', $data ?? [], null);
        $this->setIfExists('original_invoice_reference', $data ?? [], null);
        $this->setIfExists('reciever', $data ?? [], null);
        $this->setIfExists('internal_description', $data ?? [], null);
        $this->setIfExists('date_issue', $data ?? [], null);
        $this->setIfExists('date_delivery', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], 'EUR');
        $this->setIfExists('issuer', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('note1', $data ?? [], null);
        $this->setIfExists('note2', $data ?? [], null);
        $this->setIfExists('note3', $data ?? [], null);
        $this->setIfExists('theme', $data ?? [], null);
        $this->setIfExists('logo_version', $data ?? [], null);
        $this->setIfExists('signature_version', $data ?? [], null);
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('currency2', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('reverse_charge', $data ?? [], false);
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

        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        if ($this->container['original_invoice_reference'] === null) {
            $invalidProperties[] = "'original_invoice_reference' can't be null";
        }
        if ($this->container['reciever'] === null) {
            $invalidProperties[] = "'reciever' can't be null";
        }
        if ($this->container['date_issue'] === null) {
            $invalidProperties[] = "'date_issue' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ((count($this->container['items']) < 1)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be greater than or equal to 1.";
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
     * Gets invoice_number
     *
     * @return \Uctoplus\API\Models\InvoiceRequestInvoiceNumber
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param \Uctoplus\API\Models\InvoiceRequestInvoiceNumber $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return \Uctoplus\API\Models\CreditNoteType
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param \Uctoplus\API\Models\CreditNoteType $invoice_type invoice_type
     *
     * @return self
     */
    public function setInvoiceType($invoice_type)
    {
        if (is_null($invoice_type)) {
            throw new \InvalidArgumentException('non-nullable invoice_type cannot be null');
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets original_invoice_reference
     *
     * @return string
     */
    public function getOriginalInvoiceReference()
    {
        return $this->container['original_invoice_reference'];
    }

    /**
     * Sets original_invoice_reference
     *
     * @param string $original_invoice_reference UUID of the original Invoice
     *
     * @return self
     */
    public function setOriginalInvoiceReference($original_invoice_reference)
    {
        if (is_null($original_invoice_reference)) {
            throw new \InvalidArgumentException('non-nullable original_invoice_reference cannot be null');
        }
        $this->container['original_invoice_reference'] = $original_invoice_reference;

        return $this;
    }

    /**
     * Gets reciever
     *
     * @return \Uctoplus\API\Models\InvoiceRequestReciever
     */
    public function getReciever()
    {
        return $this->container['reciever'];
    }

    /**
     * Sets reciever
     *
     * @param \Uctoplus\API\Models\InvoiceRequestReciever $reciever reciever
     *
     * @return self
     */
    public function setReciever($reciever)
    {
        if (is_null($reciever)) {
            throw new \InvalidArgumentException('non-nullable reciever cannot be null');
        }
        $this->container['reciever'] = $reciever;

        return $this;
    }

    /**
     * Gets internal_description
     *
     * @return string|null
     */
    public function getInternalDescription()
    {
        return $this->container['internal_description'];
    }

    /**
     * Sets internal_description
     *
     * @param string|null $internal_description internal_description
     *
     * @return self
     */
    public function setInternalDescription($internal_description)
    {
        if (is_null($internal_description)) {
            array_push($this->openAPINullablesSetToNull, 'internal_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('internal_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['internal_description'] = $internal_description;

        return $this;
    }

    /**
     * Gets date_issue
     *
     * @return \DateTime
     */
    public function getDateIssue()
    {
        return $this->container['date_issue'];
    }

    /**
     * Sets date_issue
     *
     * @param \DateTime $date_issue Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd)
     *
     * @return self
     */
    public function setDateIssue($date_issue)
    {
        if (is_null($date_issue)) {
            throw new \InvalidArgumentException('non-nullable date_issue cannot be null');
        }
        $this->container['date_issue'] = $date_issue;

        return $this;
    }

    /**
     * Gets date_delivery
     *
     * @return \DateTime|null
     */
    public function getDateDelivery()
    {
        return $this->container['date_delivery'];
    }

    /**
     * Sets date_delivery
     *
     * @param \DateTime|null $date_delivery Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd)
     *
     * @return self
     */
    public function setDateDelivery($date_delivery)
    {
        if (is_null($date_delivery)) {
            throw new \InvalidArgumentException('non-nullable date_delivery cannot be null');
        }
        $this->container['date_delivery'] = $date_delivery;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency of invoice, format corresponds to [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html)
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return \Uctoplus\API\Models\Issuer
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param \Uctoplus\API\Models\Issuer $issuer issuer
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        if (is_null($issuer)) {
            throw new \InvalidArgumentException('non-nullable issuer cannot be null');
        }
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Uctoplus\API\Models\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Uctoplus\API\Models\Language $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets note1
     *
     * @return string|null
     */
    public function getNote1()
    {
        return $this->container['note1'];
    }

    /**
     * Sets note1
     *
     * @param string|null $note1 Markdown language allowed.
     *
     * @return self
     */
    public function setNote1($note1)
    {
        if (is_null($note1)) {
            array_push($this->openAPINullablesSetToNull, 'note1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note1'] = $note1;

        return $this;
    }

    /**
     * Gets note2
     *
     * @return string|null
     */
    public function getNote2()
    {
        return $this->container['note2'];
    }

    /**
     * Sets note2
     *
     * @param string|null $note2 Markdown language allowed.
     *
     * @return self
     */
    public function setNote2($note2)
    {
        if (is_null($note2)) {
            array_push($this->openAPINullablesSetToNull, 'note2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note2'] = $note2;

        return $this;
    }

    /**
     * Gets note3
     *
     * @return string|null
     */
    public function getNote3()
    {
        return $this->container['note3'];
    }

    /**
     * Sets note3
     *
     * @param string|null $note3 Markdown language allowed.
     *
     * @return self
     */
    public function setNote3($note3)
    {
        if (is_null($note3)) {
            array_push($this->openAPINullablesSetToNull, 'note3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note3'] = $note3;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \Uctoplus\API\Models\Theme|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \Uctoplus\API\Models\Theme|null $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        if (is_null($theme)) {
            array_push($this->openAPINullablesSetToNull, 'theme');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('theme', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets logo_version
     *
     * @return int|null
     */
    public function getLogoVersion()
    {
        return $this->container['logo_version'];
    }

    /**
     * Sets logo_version
     *
     * @param int|null $logo_version ID from [Účto+](https://moje.uctoplus.sk)
     *
     * @return self
     */
    public function setLogoVersion($logo_version)
    {
        if (is_null($logo_version)) {
            array_push($this->openAPINullablesSetToNull, 'logo_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logo_version'] = $logo_version;

        return $this;
    }

    /**
     * Gets signature_version
     *
     * @return int|null
     */
    public function getSignatureVersion()
    {
        return $this->container['signature_version'];
    }

    /**
     * Sets signature_version
     *
     * @param int|null $signature_version ID from [Účto+](https://moje.uctoplus.sk)
     *
     * @return self
     */
    public function setSignatureVersion($signature_version)
    {
        if (is_null($signature_version)) {
            array_push($this->openAPINullablesSetToNull, 'signature_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signature_version'] = $signature_version;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int|null $template_id ID from [Účto+](https://moje.uctoplus.sk)
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        if (is_null($template_id)) {
            array_push($this->openAPINullablesSetToNull, 'template_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('template_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets currency2
     *
     * @return \Uctoplus\API\Models\InvoiceCurrency2|null
     */
    public function getCurrency2()
    {
        return $this->container['currency2'];
    }

    /**
     * Sets currency2
     *
     * @param \Uctoplus\API\Models\InvoiceCurrency2|null $currency2 currency2
     *
     * @return self
     */
    public function setCurrency2($currency2)
    {
        if (is_null($currency2)) {
            array_push($this->openAPINullablesSetToNull, 'currency2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency2'] = $currency2;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Uctoplus\API\Models\CreditNoteRequestItemsInner[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Uctoplus\API\Models\CreditNoteRequestItemsInner[] $items Items in invoice
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }


        if ((count($items) < 1)) {
            throw new \InvalidArgumentException('invalid length for $items when calling CreditNoteRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Uctoplus\API\Models\InvoiceRequestTagsInner[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Uctoplus\API\Models\InvoiceRequestTagsInner[]|null $tags Tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets reverse_charge
     *
     * @return bool|null
     */
    public function getReverseCharge()
    {
        return $this->container['reverse_charge'];
    }

    /**
     * Sets reverse_charge
     *
     * @param bool|null $reverse_charge reverse_charge
     *
     * @return self
     */
    public function setReverseCharge($reverse_charge)
    {
        if (is_null($reverse_charge)) {
            throw new \InvalidArgumentException('non-nullable reverse_charge cannot be null');
        }
        $this->container['reverse_charge'] = $reverse_charge;

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

