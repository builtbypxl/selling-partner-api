<?php
/**
 * LabelFormat
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * LabelFormat Class Doc Comment
 *
 * @category Class
 * @description The file format in which the shipping label will be created.
 * @package  SellingPartnerApi
 * @group 
 */
class LabelFormat
{
    public $value;

    /**
     * Possible values of this enum
     */
    const PDF = 'PDF';
    const ZPL = 'ZPL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::PDF,
            self::ZPL,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'LabelFormat', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


