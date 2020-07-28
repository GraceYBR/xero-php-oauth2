<?php
/**
 * TaxLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.9
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * TaxLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payslip_tax_line_id' => 'string',
        'amount' => 'double',
        'tax_type_name' => 'string',
        'description' => 'string',
        'manual_tax_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\ManualTaxType',
        'liability_account' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payslip_tax_line_id' => 'uuid',
        'amount' => 'double',
        'tax_type_name' => null,
        'description' => null,
        'manual_tax_type' => null,
        'liability_account' => null
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
        'payslip_tax_line_id' => 'PayslipTaxLineID',
        'amount' => 'Amount',
        'tax_type_name' => 'TaxTypeName',
        'description' => 'Description',
        'manual_tax_type' => 'ManualTaxType',
        'liability_account' => 'LiabilityAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payslip_tax_line_id' => 'setPayslipTaxLineId',
        'amount' => 'setAmount',
        'tax_type_name' => 'setTaxTypeName',
        'description' => 'setDescription',
        'manual_tax_type' => 'setManualTaxType',
        'liability_account' => 'setLiabilityAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payslip_tax_line_id' => 'getPayslipTaxLineId',
        'amount' => 'getAmount',
        'tax_type_name' => 'getTaxTypeName',
        'description' => 'getDescription',
        'manual_tax_type' => 'getManualTaxType',
        'liability_account' => 'getLiabilityAccount'
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
        $this->container['payslip_tax_line_id'] = isset($data['payslip_tax_line_id']) ? $data['payslip_tax_line_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['tax_type_name'] = isset($data['tax_type_name']) ? $data['tax_type_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['manual_tax_type'] = isset($data['manual_tax_type']) ? $data['manual_tax_type'] : null;
        $this->container['liability_account'] = isset($data['liability_account']) ? $data['liability_account'] : null;
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
     * Gets payslip_tax_line_id
     *
     * @return string|null
     */
    public function getPayslipTaxLineId()
    {
        return $this->container['payslip_tax_line_id'];
    }

    /**
     * Sets payslip_tax_line_id
     *
     * @param string|null $payslip_tax_line_id Xero identifier for payslip tax line ID.
     *
     * @return $this
     */
    public function setPayslipTaxLineId($payslip_tax_line_id)
    {

        $this->container['payslip_tax_line_id'] = $payslip_tax_line_id;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The tax line amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets tax_type_name
     *
     * @return string|null
     */
    public function getTaxTypeName()
    {
        return $this->container['tax_type_name'];
    }

    /**
     * Sets tax_type_name
     *
     * @param string|null $tax_type_name Name of the tax type.
     *
     * @return $this
     */
    public function setTaxTypeName($tax_type_name)
    {

        $this->container['tax_type_name'] = $tax_type_name;

        return $this;
    }



    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the tax line.
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets manual_tax_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ManualTaxType|null
     */
    public function getManualTaxType()
    {
        return $this->container['manual_tax_type'];
    }

    /**
     * Sets manual_tax_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ManualTaxType|null $manual_tax_type manual_tax_type
     *
     * @return $this
     */
    public function setManualTaxType($manual_tax_type)
    {

        $this->container['manual_tax_type'] = $manual_tax_type;

        return $this;
    }



    /**
     * Gets liability_account
     *
     * @return string|null
     */
    public function getLiabilityAccount()
    {
        return $this->container['liability_account'];
    }

    /**
     * Sets liability_account
     *
     * @param string|null $liability_account The tax line liability account code. For posted pay run you should be able to see liability account code
     *
     * @return $this
     */
    public function setLiabilityAccount($liability_account)
    {

        $this->container['liability_account'] = $liability_account;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


