<?php
/**
 * QuoteLineAmountTypes
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
 * OpenAPI spec version: 2.5.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * QuoteLineAmountTypes Class Doc Comment
 *
 * @category Class
 * @description Line amounts are exclusive of tax by default if you don’t specify this element. See Line Amount Types
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QuoteLineAmountTypes
{
    /**
     * Possible values of this enum
     */
    const EXCLUSIVE = 'EXCLUSIVE';
    const INCLUSIVE = 'INCLUSIVE';
    const NOTAX = 'NOTAX';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXCLUSIVE,
            self::INCLUSIVE,
            self::NOTAX,
        ];
    }
}


