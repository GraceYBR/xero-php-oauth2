<?php
/**
 * EmployeeOpeningBalancesObject
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
 * OpenAPI spec version: 2.3.0
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
 * EmployeeOpeningBalancesObject Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeOpeningBalancesObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeOpeningBalancesObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pagination' => '\XeroAPI\XeroPHP\Models\PayrollUk\Pagination',
        'problem' => '\XeroAPI\XeroPHP\Models\PayrollUk\Problem',
        'opening_balances' => '\XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pagination' => null,
        'problem' => null,
        'opening_balances' => null
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
        'pagination' => 'pagination',
        'problem' => 'problem',
        'opening_balances' => 'openingBalances'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination' => 'setPagination',
        'problem' => 'setProblem',
        'opening_balances' => 'setOpeningBalances'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination' => 'getPagination',
        'problem' => 'getProblem',
        'opening_balances' => 'getOpeningBalances'
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
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['problem'] = isset($data['problem']) ? $data['problem'] : null;
        $this->container['opening_balances'] = isset($data['opening_balances']) ? $data['opening_balances'] : null;
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
     * Gets pagination
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\Pagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\Pagination|null $pagination pagination
     *
     * @return $this
     */
    public function setPagination($pagination)
    {

        $this->container['pagination'] = $pagination;

        return $this;
    }



    /**
     * Gets problem
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\Problem|null
     */
    public function getProblem()
    {
        return $this->container['problem'];
    }

    /**
     * Sets problem
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\Problem|null $problem problem
     *
     * @return $this
     */
    public function setProblem($problem)
    {

        $this->container['problem'] = $problem;

        return $this;
    }



    /**
     * Gets opening_balances
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances|null
     */
    public function getOpeningBalances()
    {
        return $this->container['opening_balances'];
    }

    /**
     * Sets opening_balances
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\EmployeeOpeningBalances|null $opening_balances opening_balances
     *
     * @return $this
     */
    public function setOpeningBalances($opening_balances)
    {

        $this->container['opening_balances'] = $opening_balances;

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


