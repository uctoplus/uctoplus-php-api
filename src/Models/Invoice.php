<?php
/**
 * Invoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Moje Účto+ API
 *
 * | Production enviroment is located at `https://moje.uctoplus.sk//api/v2`. All comunication with API is encoded in UTF-8. This REST API is based on Open API v3 standard.  For help with implementation or access to the test enviroment please contact our helpdesk
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: helpdesk@uctoplus.sk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Uctoplus\API
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'invoice_number' => 'OneOfStringInvoiceCounter',
        'invoice_type' => 'string',
        'reciever' => 'OneOfAddressString',
        'delivery_address' => '\Uctoplus\API\Models\DeliveryAddress',
        'internal_description' => 'string',
        'variable_symbol' => 'string',
        'konstantny_symbol' => 'string',
        'specificky_symbol' => 'string',
        'date_issue' => '\DateTime',
        'date_delivery' => '\DateTime',
        'date_due' => '\DateTime',
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
        'delivery_type' => 'int',
        'payment_type' => 'OneOfPaymentTypeString',
        'currency2' => '\Uctoplus\API\Models\InvoiceCurrency2',
        'items' => 'AnyOfInvoiceItemLinkedInvoiceItem[]',
        'reverse_charge' => 'bool',
        'discount' => 'float',
        'discount_type' => 'float',
        'payment' => 'OneOfPayment',
        'file' => 'OneOfFile',
        'moje_uctoplus_url' => 'string',
        'moje_uctoplus_add_url' => 'string',
        'summary' => 'OneOfSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'invoice_number' => null,
        'invoice_type' => null,
        'reciever' => null,
        'delivery_address' => null,
        'internal_description' => null,
        'variable_symbol' => null,
        'konstantny_symbol' => null,
        'specificky_symbol' => null,
        'date_issue' => 'date',
        'date_delivery' => 'date',
        'date_due' => 'date',
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
        'delivery_type' => null,
        'payment_type' => null,
        'currency2' => null,
        'items' => null,
        'reverse_charge' => null,
        'discount' => null,
        'discount_type' => null,
        'payment' => null,
        'file' => null,
        'moje_uctoplus_url' => null,
        'moje_uctoplus_add_url' => null,
        'summary' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'invoice_number' => 'invoiceNumber',
        'invoice_type' => 'invoiceType',
        'reciever' => 'reciever',
        'delivery_address' => 'deliveryAddress',
        'internal_description' => 'internalDescription',
        'variable_symbol' => 'variableSymbol',
        'konstantny_symbol' => 'konstantnySymbol',
        'specificky_symbol' => 'specifickySymbol',
        'date_issue' => 'dateIssue',
        'date_delivery' => 'dateDelivery',
        'date_due' => 'dateDue',
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
        'delivery_type' => 'deliveryType',
        'payment_type' => 'paymentType',
        'currency2' => 'currency2',
        'items' => 'items',
        'reverse_charge' => 'reverseCharge',
        'discount' => 'discount',
        'discount_type' => 'discountType',
        'payment' => 'payment',
        'file' => 'file',
        'moje_uctoplus_url' => 'mojeUctoplusUrl',
        'moje_uctoplus_add_url' => 'mojeUctoplusAddUrl',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_type' => 'setInvoiceType',
        'reciever' => 'setReciever',
        'delivery_address' => 'setDeliveryAddress',
        'internal_description' => 'setInternalDescription',
        'variable_symbol' => 'setVariableSymbol',
        'konstantny_symbol' => 'setKonstantnySymbol',
        'specificky_symbol' => 'setSpecifickySymbol',
        'date_issue' => 'setDateIssue',
        'date_delivery' => 'setDateDelivery',
        'date_due' => 'setDateDue',
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
        'delivery_type' => 'setDeliveryType',
        'payment_type' => 'setPaymentType',
        'currency2' => 'setCurrency2',
        'items' => 'setItems',
        'reverse_charge' => 'setReverseCharge',
        'discount' => 'setDiscount',
        'discount_type' => 'setDiscountType',
        'payment' => 'setPayment',
        'file' => 'setFile',
        'moje_uctoplus_url' => 'setMojeUctoplusUrl',
        'moje_uctoplus_add_url' => 'setMojeUctoplusAddUrl',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_type' => 'getInvoiceType',
        'reciever' => 'getReciever',
        'delivery_address' => 'getDeliveryAddress',
        'internal_description' => 'getInternalDescription',
        'variable_symbol' => 'getVariableSymbol',
        'konstantny_symbol' => 'getKonstantnySymbol',
        'specificky_symbol' => 'getSpecifickySymbol',
        'date_issue' => 'getDateIssue',
        'date_delivery' => 'getDateDelivery',
        'date_due' => 'getDateDue',
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
        'delivery_type' => 'getDeliveryType',
        'payment_type' => 'getPaymentType',
        'currency2' => 'getCurrency2',
        'items' => 'getItems',
        'reverse_charge' => 'getReverseCharge',
        'discount' => 'getDiscount',
        'discount_type' => 'getDiscountType',
        'payment' => 'getPayment',
        'file' => 'getFile',
        'moje_uctoplus_url' => 'getMojeUctoplusUrl',
        'moje_uctoplus_add_url' => 'getMojeUctoplusAddUrl',
        'summary' => 'getSummary'
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

    const INVOICE_TYPE_INVOICE = 'INVOICE';
    const INVOICE_TYPE_PROFORMA_INVOICE = 'PROFORMA_INVOICE';
    const INVOICE_TYPE_DODACI_LIST = 'DODACI_LIST';
    const INVOICE_TYPE_PRICE_QUOTATION = 'PRICE_QUOTATION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_INVOICE,
            self::INVOICE_TYPE_PROFORMA_INVOICE,
            self::INVOICE_TYPE_DODACI_LIST,
            self::INVOICE_TYPE_PRICE_QUOTATION,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['reciever'] = isset($data['reciever']) ? $data['reciever'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['internal_description'] = isset($data['internal_description']) ? $data['internal_description'] : null;
        $this->container['variable_symbol'] = isset($data['variable_symbol']) ? $data['variable_symbol'] : null;
        $this->container['konstantny_symbol'] = isset($data['konstantny_symbol']) ? $data['konstantny_symbol'] : null;
        $this->container['specificky_symbol'] = isset($data['specificky_symbol']) ? $data['specificky_symbol'] : null;
        $this->container['date_issue'] = isset($data['date_issue']) ? $data['date_issue'] : null;
        $this->container['date_delivery'] = isset($data['date_delivery']) ? $data['date_delivery'] : null;
        $this->container['date_due'] = isset($data['date_due']) ? $data['date_due'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : 'EUR';
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['note1'] = isset($data['note1']) ? $data['note1'] : null;
        $this->container['note2'] = isset($data['note2']) ? $data['note2'] : null;
        $this->container['note3'] = isset($data['note3']) ? $data['note3'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['logo_version'] = isset($data['logo_version']) ? $data['logo_version'] : null;
        $this->container['signature_version'] = isset($data['signature_version']) ? $data['signature_version'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['currency2'] = isset($data['currency2']) ? $data['currency2'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['reverse_charge'] = isset($data['reverse_charge']) ? $data['reverse_charge'] : false;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : 0.0;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : 0;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['moje_uctoplus_url'] = isset($data['moje_uctoplus_url']) ? $data['moje_uctoplus_url'] : null;
        $this->container['moje_uctoplus_add_url'] = isset($data['moje_uctoplus_add_url']) ? $data['moje_uctoplus_add_url'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
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
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoice_type']) && !in_array($this->container['invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return OneOfStringInvoiceCounter
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param OneOfStringInvoiceCounter $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type * `INVOICE` - Invocie * `PROFORMA_INVOICE` - Proforma Invoice * `DODACI_LIST` - Dodací list * `PRICE_QUOTATION` - Price Quotation
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets reciever
     *
     * @return OneOfAddressString
     */
    public function getReciever()
    {
        return $this->container['reciever'];
    }

    /**
     * Sets reciever
     *
     * @param OneOfAddressString $reciever If filled new Address in Contact List will be created!
     *
     * @return $this
     */
    public function setReciever($reciever)
    {
        $this->container['reciever'] = $reciever;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \Uctoplus\API\Models\DeliveryAddress|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \Uctoplus\API\Models\DeliveryAddress|null $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

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
     * @return $this
     */
    public function setInternalDescription($internal_description)
    {
        $this->container['internal_description'] = $internal_description;

        return $this;
    }

    /**
     * Gets variable_symbol
     *
     * @return string|null
     */
    public function getVariableSymbol()
    {
        return $this->container['variable_symbol'];
    }

    /**
     * Sets variable_symbol
     *
     * @param string|null $variable_symbol variable_symbol
     *
     * @return $this
     */
    public function setVariableSymbol($variable_symbol)
    {
        $this->container['variable_symbol'] = $variable_symbol;

        return $this;
    }

    /**
     * Gets konstantny_symbol
     *
     * @return string|null
     */
    public function getKonstantnySymbol()
    {
        return $this->container['konstantny_symbol'];
    }

    /**
     * Sets konstantny_symbol
     *
     * @param string|null $konstantny_symbol konstantny_symbol
     *
     * @return $this
     */
    public function setKonstantnySymbol($konstantny_symbol)
    {
        $this->container['konstantny_symbol'] = $konstantny_symbol;

        return $this;
    }

    /**
     * Gets specificky_symbol
     *
     * @return string|null
     */
    public function getSpecifickySymbol()
    {
        return $this->container['specificky_symbol'];
    }

    /**
     * Sets specificky_symbol
     *
     * @param string|null $specificky_symbol specificky_symbol
     *
     * @return $this
     */
    public function setSpecifickySymbol($specificky_symbol)
    {
        $this->container['specificky_symbol'] = $specificky_symbol;

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
     * @return $this
     */
    public function setDateIssue($date_issue)
    {
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
     * @return $this
     */
    public function setDateDelivery($date_delivery)
    {
        $this->container['date_delivery'] = $date_delivery;

        return $this;
    }

    /**
     * Gets date_due
     *
     * @return \DateTime|null
     */
    public function getDateDue()
    {
        return $this->container['date_due'];
    }

    /**
     * Sets date_due
     *
     * @param \DateTime|null $date_due Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd)
     *
     * @return $this
     */
    public function setDateDue($date_due)
    {
        $this->container['date_due'] = $date_due;

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
     * @return $this
     */
    public function setCurrency($currency)
    {
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
     * @return $this
     */
    public function setIssuer($issuer)
    {
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
     * @return $this
     */
    public function setLanguage($language)
    {
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
     * @return $this
     */
    public function setNote1($note1)
    {
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
     * @return $this
     */
    public function setNote2($note2)
    {
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
     * @return $this
     */
    public function setNote3($note3)
    {
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
     * @return $this
     */
    public function setTheme($theme)
    {
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
     * @param int|null $logo_version ID from [Moje Účto+](http://moje.uctoplus.sk/)
     *
     * @return $this
     */
    public function setLogoVersion($logo_version)
    {
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
     * @param int|null $signature_version ID from [Moje Účto+](http://moje.uctoplus.sk/)
     *
     * @return $this
     */
    public function setSignatureVersion($signature_version)
    {
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
     * @param int|null $template_id ID from [Moje Účto+](http://moje.uctoplus.sk/)
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return int|null
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param int|null $delivery_type ID from [Moje Účto+](http://moje.uctoplus.sk/)
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return OneOfPaymentTypeString
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param OneOfPaymentTypeString $payment_type If filled new PaymentType it will be created!
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

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
     * @return $this
     */
    public function setCurrency2($currency2)
    {
        $this->container['currency2'] = $currency2;

        return $this;
    }

    /**
     * Gets items
     *
     * @return AnyOfInvoiceItemLinkedInvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param AnyOfInvoiceItemLinkedInvoiceItem[] $items Items in invoice
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * @return $this
     */
    public function setReverseCharge($reverse_charge)
    {
        $this->container['reverse_charge'] = $reverse_charge;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return float|null
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param float|null $discount_type 0 - none 1 - percentage of price
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return OneOfPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param OneOfPayment|null $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets file
     *
     * @return OneOfFile|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param OneOfFile|null $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets moje_uctoplus_url
     *
     * @return string|null
     */
    public function getMojeUctoplusUrl()
    {
        return $this->container['moje_uctoplus_url'];
    }

    /**
     * Sets moje_uctoplus_url
     *
     * @param string|null $moje_uctoplus_url moje_uctoplus_url
     *
     * @return $this
     */
    public function setMojeUctoplusUrl($moje_uctoplus_url)
    {
        $this->container['moje_uctoplus_url'] = $moje_uctoplus_url;

        return $this;
    }

    /**
     * Gets moje_uctoplus_add_url
     *
     * @return string|null
     */
    public function getMojeUctoplusAddUrl()
    {
        return $this->container['moje_uctoplus_add_url'];
    }

    /**
     * Sets moje_uctoplus_add_url
     *
     * @param string|null $moje_uctoplus_add_url moje_uctoplus_add_url
     *
     * @return $this
     */
    public function setMojeUctoplusAddUrl($moje_uctoplus_add_url)
    {
        $this->container['moje_uctoplus_add_url'] = $moje_uctoplus_add_url;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return OneOfSummary|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param OneOfSummary|null $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


