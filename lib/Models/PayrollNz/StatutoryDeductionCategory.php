<?php
/**
 * StatutoryDeductionCategory
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
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * StatutoryDeductionCategory Class Doc Comment
 *
 * @category Class
 * @description Statutory Deduction Category
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatutoryDeductionCategory
{
    /**
     * Possible values of this enum
     */
    const PRIORITY_ORDER = 'PriorityOrder';
    const NON_PRIORITY_ORDER = 'NonPriorityOrder';
    const TABLE_BASED = 'TableBased';
    const CHILD_SUPPORT = 'ChildSupport';
    const COURT_FINES = 'CourtFines';
    const INLAND_REVENUE_ARREARS = 'InlandRevenueArrears';
    const MSD_REPAYMENTS = 'MsdRepayments';
    const STUDENT_LOAN = 'StudentLoan';
    const ADDITIONAL_STUDENT_LOAN = 'AdditionalStudentLoan';
    const VOLUNTARY_STUDENT_LOAN = 'VoluntaryStudentLoan';
    const KIWI_SAVER = 'KiwiSaver';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRIORITY_ORDER,
            self::NON_PRIORITY_ORDER,
            self::TABLE_BASED,
            self::CHILD_SUPPORT,
            self::COURT_FINES,
            self::INLAND_REVENUE_ARREARS,
            self::MSD_REPAYMENTS,
            self::STUDENT_LOAN,
            self::ADDITIONAL_STUDENT_LOAN,
            self::VOLUNTARY_STUDENT_LOAN,
            self::KIWI_SAVER,
        ];
    }
}


