<?php
/**
 * EarningsLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
 *
 * OpenAPI spec version: 2.7.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EarningsLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EarningsLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EarningsLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings_line_id' => 'string',
        'earnings_rate_id' => 'string',
        'display_name' => 'string',
        'rate_per_unit' => 'double',
        'number_of_units' => 'double',
        'fixed_amount' => 'double',
        'amount' => 'double',
        'is_linked_to_timesheet' => 'bool',
        'is_average_daily_pay_rate' => 'bool',
        'is_system_generated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earnings_line_id' => 'uuid',
        'earnings_rate_id' => 'uuid',
        'display_name' => null,
        'rate_per_unit' => 'double',
        'number_of_units' => 'double',
        'fixed_amount' => 'double',
        'amount' => 'double',
        'is_linked_to_timesheet' => null,
        'is_average_daily_pay_rate' => null,
        'is_system_generated' => null
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
        'earnings_line_id' => 'earningsLineID',
        'earnings_rate_id' => 'earningsRateID',
        'display_name' => 'displayName',
        'rate_per_unit' => 'ratePerUnit',
        'number_of_units' => 'numberOfUnits',
        'fixed_amount' => 'fixedAmount',
        'amount' => 'amount',
        'is_linked_to_timesheet' => 'isLinkedToTimesheet',
        'is_average_daily_pay_rate' => 'isAverageDailyPayRate',
        'is_system_generated' => 'isSystemGenerated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings_line_id' => 'setEarningsLineId',
        'earnings_rate_id' => 'setEarningsRateId',
        'display_name' => 'setDisplayName',
        'rate_per_unit' => 'setRatePerUnit',
        'number_of_units' => 'setNumberOfUnits',
        'fixed_amount' => 'setFixedAmount',
        'amount' => 'setAmount',
        'is_linked_to_timesheet' => 'setIsLinkedToTimesheet',
        'is_average_daily_pay_rate' => 'setIsAverageDailyPayRate',
        'is_system_generated' => 'setIsSystemGenerated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings_line_id' => 'getEarningsLineId',
        'earnings_rate_id' => 'getEarningsRateId',
        'display_name' => 'getDisplayName',
        'rate_per_unit' => 'getRatePerUnit',
        'number_of_units' => 'getNumberOfUnits',
        'fixed_amount' => 'getFixedAmount',
        'amount' => 'getAmount',
        'is_linked_to_timesheet' => 'getIsLinkedToTimesheet',
        'is_average_daily_pay_rate' => 'getIsAverageDailyPayRate',
        'is_system_generated' => 'getIsSystemGenerated'
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
        $this->container['earnings_line_id'] = isset($data['earnings_line_id']) ? $data['earnings_line_id'] : null;
        $this->container['earnings_rate_id'] = isset($data['earnings_rate_id']) ? $data['earnings_rate_id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['rate_per_unit'] = isset($data['rate_per_unit']) ? $data['rate_per_unit'] : null;
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['is_linked_to_timesheet'] = isset($data['is_linked_to_timesheet']) ? $data['is_linked_to_timesheet'] : null;
        $this->container['is_average_daily_pay_rate'] = isset($data['is_average_daily_pay_rate']) ? $data['is_average_daily_pay_rate'] : null;
        $this->container['is_system_generated'] = isset($data['is_system_generated']) ? $data['is_system_generated'] : null;
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
     * Gets earnings_line_id
     *
     * @return string|null
     */
    public function getEarningsLineId()
    {
        return $this->container['earnings_line_id'];
    }

    /**
     * Sets earnings_line_id
     *
     * @param string|null $earnings_line_id Xero identifier for payroll earnings line
     *
     * @return $this
     */
    public function setEarningsLineId($earnings_line_id)
    {

        $this->container['earnings_line_id'] = $earnings_line_id;

        return $this;
    }



    /**
     * Gets earnings_rate_id
     *
     * @return string|null
     */
    public function getEarningsRateId()
    {
        return $this->container['earnings_rate_id'];
    }

    /**
     * Sets earnings_rate_id
     *
     * @param string|null $earnings_rate_id Xero identifier for payroll earnings rate
     *
     * @return $this
     */
    public function setEarningsRateId($earnings_rate_id)
    {

        $this->container['earnings_rate_id'] = $earnings_rate_id;

        return $this;
    }



    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name name of earnings rate for display in UI
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {

        $this->container['display_name'] = $display_name;

        return $this;
    }



    /**
     * Gets rate_per_unit
     *
     * @return double|null
     */
    public function getRatePerUnit()
    {
        return $this->container['rate_per_unit'];
    }

    /**
     * Sets rate_per_unit
     *
     * @param double|null $rate_per_unit Rate per unit for earnings line
     *
     * @return $this
     */
    public function setRatePerUnit($rate_per_unit)
    {

        $this->container['rate_per_unit'] = $rate_per_unit;

        return $this;
    }



    /**
     * Gets number_of_units
     *
     * @return double|null
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param double|null $number_of_units Earnings number of units
     *
     * @return $this
     */
    public function setNumberOfUnits($number_of_units)
    {

        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }



    /**
     * Gets fixed_amount
     *
     * @return double|null
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param double|null $fixed_amount Earnings fixed amount. Only applicable if the EarningsRate RateType is Fixed
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {

        $this->container['fixed_amount'] = $fixed_amount;

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
     * @param double|null $amount The amount of the earnings line.
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets is_linked_to_timesheet
     *
     * @return bool|null
     */
    public function getIsLinkedToTimesheet()
    {
        return $this->container['is_linked_to_timesheet'];
    }

    /**
     * Sets is_linked_to_timesheet
     *
     * @param bool|null $is_linked_to_timesheet Identifies if the earnings is taken from the timesheet. False for earnings line
     *
     * @return $this
     */
    public function setIsLinkedToTimesheet($is_linked_to_timesheet)
    {

        $this->container['is_linked_to_timesheet'] = $is_linked_to_timesheet;

        return $this;
    }



    /**
     * Gets is_average_daily_pay_rate
     *
     * @return bool|null
     */
    public function getIsAverageDailyPayRate()
    {
        return $this->container['is_average_daily_pay_rate'];
    }

    /**
     * Sets is_average_daily_pay_rate
     *
     * @param bool|null $is_average_daily_pay_rate Identifies if the earnings is using an average daily pay rate
     *
     * @return $this
     */
    public function setIsAverageDailyPayRate($is_average_daily_pay_rate)
    {

        $this->container['is_average_daily_pay_rate'] = $is_average_daily_pay_rate;

        return $this;
    }



    /**
     * Gets is_system_generated
     *
     * @return bool|null
     */
    public function getIsSystemGenerated()
    {
        return $this->container['is_system_generated'];
    }

    /**
     * Sets is_system_generated
     *
     * @param bool|null $is_system_generated Flag to indentify whether the earnings line is system generated or not.
     *
     * @return $this
     */
    public function setIsSystemGenerated($is_system_generated)
    {

        $this->container['is_system_generated'] = $is_system_generated;

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
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


