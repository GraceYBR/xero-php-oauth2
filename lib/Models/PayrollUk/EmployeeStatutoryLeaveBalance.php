<?php
/**
 * EmployeeStatutoryLeaveBalance
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
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

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EmployeeStatutoryLeaveBalance Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeStatutoryLeaveBalance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeStatutoryLeaveBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_type' => 'string',
        'balance_remaining' => 'double',
        'units' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'leave_type' => null,
        'balance_remaining' => 'double',
        'units' => null
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
        'leave_type' => 'leaveType',
        'balance_remaining' => 'balanceRemaining',
        'units' => 'units'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_type' => 'setLeaveType',
        'balance_remaining' => 'setBalanceRemaining',
        'units' => 'setUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_type' => 'getLeaveType',
        'balance_remaining' => 'getBalanceRemaining',
        'units' => 'getUnits'
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

    const LEAVE_TYPE_SICK = 'Sick';
    const LEAVE_TYPE_ADOPTION = 'Adoption';
    const LEAVE_TYPE_MATERNITY = 'Maternity';
    const LEAVE_TYPE_PATERNITY = 'Paternity';
    const LEAVE_TYPE_SHAREDPARENTAL = 'Sharedparental';
    const UNITS_HOURS = 'Hours';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveTypeAllowableValues()
    {
        return [
            self::LEAVE_TYPE_SICK,
            self::LEAVE_TYPE_ADOPTION,
            self::LEAVE_TYPE_MATERNITY,
            self::LEAVE_TYPE_PATERNITY,
            self::LEAVE_TYPE_SHAREDPARENTAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitsAllowableValues()
    {
        return [
            self::UNITS_HOURS,
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
        $this->container['leave_type'] = isset($data['leave_type']) ? $data['leave_type'] : null;
        $this->container['balance_remaining'] = isset($data['balance_remaining']) ? $data['balance_remaining'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLeaveTypeAllowableValues();
        if (!is_null($this->container['leave_type']) && !in_array($this->container['leave_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUnitsAllowableValues();
        if (!is_null($this->container['units']) && !in_array($this->container['units'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'units', must be one of '%s'",
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
     * Gets leave_type
     *
     * @return string|null
     */
    public function getLeaveType()
    {
        return $this->container['leave_type'];
    }

    /**
     * Sets leave_type
     *
     * @param string|null $leave_type The type of statutory leave
     *
     * @return $this
     */
    public function setLeaveType($leave_type)
    {
        $allowedValues = $this->getLeaveTypeAllowableValues();
        if (!is_null($leave_type) && !in_array($leave_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['leave_type'] = $leave_type;

        return $this;
    }



    /**
     * Gets balance_remaining
     *
     * @return double|null
     */
    public function getBalanceRemaining()
    {
        return $this->container['balance_remaining'];
    }

    /**
     * Sets balance_remaining
     *
     * @param double|null $balance_remaining The balance remaining for the corresponding leave type as of specified date.
     *
     * @return $this
     */
    public function setBalanceRemaining($balance_remaining)
    {

        $this->container['balance_remaining'] = $balance_remaining;

        return $this;
    }



    /**
     * Gets units
     *
     * @return string|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string|null $units The units will be \"Hours\"
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $allowedValues = $this->getUnitsAllowableValues();
        if (!is_null($units) && !in_array($units, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'units', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['units'] = $units;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


