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
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
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
    const ADDITIONAL_STUDENT_LOAN = 'AdditionalStudentLoan';
    const CHILD_SUPPORT = 'ChildSupport';
    const COURT_FINES = 'CourtFines';
    const CREDITOR = 'Creditor';
    const FEDERAL_LEVY = 'FederalLevy';
    const INLAND_REVENUE_ARREARS = 'InlandRevenueArrears';
    const KIWI_SAVER = 'KiwiSaver';
    const MSD_REPAYMENTS = 'MsdRepayments';
    const NON_PRIORITY_ORDER = 'NonPriorityOrder';
    const PRIORITY_ORDER = 'PriorityOrder';
    const TABLE_BASED = 'TableBased';
    const STUDENT_LOAN = 'StudentLoan';
    const VOLUNTARY_STUDENT_LOAN = 'VoluntaryStudentLoan';
    const US_CHILD_SUPPORT = 'USChildSupport';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADDITIONAL_STUDENT_LOAN,
            self::CHILD_SUPPORT,
            self::COURT_FINES,
            self::CREDITOR,
            self::FEDERAL_LEVY,
            self::INLAND_REVENUE_ARREARS,
            self::KIWI_SAVER,
            self::MSD_REPAYMENTS,
            self::NON_PRIORITY_ORDER,
            self::PRIORITY_ORDER,
            self::TABLE_BASED,
            self::STUDENT_LOAN,
            self::VOLUNTARY_STUDENT_LOAN,
            self::US_CHILD_SUPPORT,
        ];
    }
}


