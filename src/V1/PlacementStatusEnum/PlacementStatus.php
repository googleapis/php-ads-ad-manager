<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/placement_enums.proto

namespace Google\Ads\AdManager\V1\PlacementStatusEnum;

use UnexpectedValueException;

/**
 * Status of the placement.
 *
 * Protobuf type <code>google.ads.admanager.v1.PlacementStatusEnum.PlacementStatus</code>
 */
class PlacementStatus
{
    /**
     * Not specified value.
     *
     * Generated from protobuf enum <code>PLACEMENT_STATUS_UNSPECIFIED = 0;</code>
     */
    const PLACEMENT_STATUS_UNSPECIFIED = 0;
    /**
     * Stats are collected, user-visible.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * No stats collected, not user-visible.
     *
     * Generated from protobuf enum <code>INACTIVE = 2;</code>
     */
    const INACTIVE = 2;
    /**
     * No stats collected, user-visible.
     *
     * Generated from protobuf enum <code>ARCHIVED = 3;</code>
     */
    const ARCHIVED = 3;

    private static $valueToName = [
        self::PLACEMENT_STATUS_UNSPECIFIED => 'PLACEMENT_STATUS_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::INACTIVE => 'INACTIVE',
        self::ARCHIVED => 'ARCHIVED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

