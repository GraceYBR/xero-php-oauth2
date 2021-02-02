<?php
/**
 * ImportSummaryAccounts
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * ImportSummaryAccounts Class Doc Comment
 *
 * @category Class
 * @description A summary of the accounts changes
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImportSummaryAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportSummaryAccounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'float',
        'new' => 'float',
        'updated' => 'float',
        'deleted' => 'float',
        'locked' => 'float',
        'system' => 'float',
        'errored' => 'float',
        'present' => 'bool',
        'new_or_updated' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total' => 'integer',
        'new' => 'integer',
        'updated' => 'integer',
        'deleted' => 'integer',
        'locked' => 'integer',
        'system' => 'integer',
        'errored' => 'integer',
        'present' => null,
        'new_or_updated' => 'integer'
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
        'total' => 'Total',
        'new' => 'New',
        'updated' => 'Updated',
        'deleted' => 'Deleted',
        'locked' => 'Locked',
        'system' => 'System',
        'errored' => 'Errored',
        'present' => 'Present',
        'new_or_updated' => 'NewOrUpdated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'new' => 'setNew',
        'updated' => 'setUpdated',
        'deleted' => 'setDeleted',
        'locked' => 'setLocked',
        'system' => 'setSystem',
        'errored' => 'setErrored',
        'present' => 'setPresent',
        'new_or_updated' => 'setNewOrUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'new' => 'getNew',
        'updated' => 'getUpdated',
        'deleted' => 'getDeleted',
        'locked' => 'getLocked',
        'system' => 'getSystem',
        'errored' => 'getErrored',
        'present' => 'getPresent',
        'new_or_updated' => 'getNewOrUpdated'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['new'] = isset($data['new']) ? $data['new'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['errored'] = isset($data['errored']) ? $data['errored'] : null;
        $this->container['present'] = isset($data['present']) ? $data['present'] : null;
        $this->container['new_or_updated'] = isset($data['new_or_updated']) ? $data['new_or_updated'] : null;
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
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total The total number of accounts in the org
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

        return $this;
    }



    /**
     * Gets new
     *
     * @return float|null
     */
    public function getNew()
    {
        return $this->container['new'];
    }

    /**
     * Sets new
     *
     * @param float|null $new The number of new accounts created
     *
     * @return $this
     */
    public function setNew($new)
    {

        $this->container['new'] = $new;

        return $this;
    }



    /**
     * Gets updated
     *
     * @return float|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param float|null $updated The number of accounts updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {

        $this->container['updated'] = $updated;

        return $this;
    }



    /**
     * Gets deleted
     *
     * @return float|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param float|null $deleted The number of accounts deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {

        $this->container['deleted'] = $deleted;

        return $this;
    }



    /**
     * Gets locked
     *
     * @return float|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param float|null $locked The number of locked accounts
     *
     * @return $this
     */
    public function setLocked($locked)
    {

        $this->container['locked'] = $locked;

        return $this;
    }



    /**
     * Gets system
     *
     * @return float|null
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param float|null $system The number of system accounts
     *
     * @return $this
     */
    public function setSystem($system)
    {

        $this->container['system'] = $system;

        return $this;
    }



    /**
     * Gets errored
     *
     * @return float|null
     */
    public function getErrored()
    {
        return $this->container['errored'];
    }

    /**
     * Sets errored
     *
     * @param float|null $errored The number of accounts that had an error
     *
     * @return $this
     */
    public function setErrored($errored)
    {

        $this->container['errored'] = $errored;

        return $this;
    }



    /**
     * Gets present
     *
     * @return bool|null
     */
    public function getPresent()
    {
        return $this->container['present'];
    }

    /**
     * Sets present
     *
     * @param bool|null $present present
     *
     * @return $this
     */
    public function setPresent($present)
    {

        $this->container['present'] = $present;

        return $this;
    }



    /**
     * Gets new_or_updated
     *
     * @return float|null
     */
    public function getNewOrUpdated()
    {
        return $this->container['new_or_updated'];
    }

    /**
     * Sets new_or_updated
     *
     * @param float|null $new_or_updated The number of new or updated accounts
     *
     * @return $this
     */
    public function setNewOrUpdated($new_or_updated)
    {

        $this->container['new_or_updated'] = $new_or_updated;

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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

