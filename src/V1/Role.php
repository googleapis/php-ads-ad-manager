<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/role_messages.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `Role` resource.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.Role</code>
 */
class Role extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the `Role`.
     * Format: `networks/{network_code}/roles/{role_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. `Role` ID.
     *
     * Generated from protobuf field <code>int64 role_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $role_id = 0;
    /**
     * Required. The display name of the `Role`.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The description of the `Role`.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Whether the `Role` is a built-in or custom user role.
     *
     * Generated from protobuf field <code>bool built_in = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $built_in = false;
    /**
     * Output only. The status of the `Role`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.RoleStatusEnum.RoleStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the `Role`.
     *           Format: `networks/{network_code}/roles/{role_id}`
     *     @type int|string $role_id
     *           Output only. `Role` ID.
     *     @type string $display_name
     *           Required. The display name of the `Role`.
     *     @type string $description
     *           Optional. The description of the `Role`.
     *     @type bool $built_in
     *           Output only. Whether the `Role` is a built-in or custom user role.
     *     @type int $status
     *           Output only. The status of the `Role`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\RoleMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the `Role`.
     * Format: `networks/{network_code}/roles/{role_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the `Role`.
     * Format: `networks/{network_code}/roles/{role_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. `Role` ID.
     *
     * Generated from protobuf field <code>int64 role_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * Output only. `Role` ID.
     *
     * Generated from protobuf field <code>int64 role_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoleId($var)
    {
        GPBUtil::checkInt64($var);
        $this->role_id = $var;

        return $this;
    }

    /**
     * Required. The display name of the `Role`.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the `Role`.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. The description of the `Role`.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the `Role`.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Whether the `Role` is a built-in or custom user role.
     *
     * Generated from protobuf field <code>bool built_in = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getBuiltIn()
    {
        return $this->built_in;
    }

    /**
     * Output only. Whether the `Role` is a built-in or custom user role.
     *
     * Generated from protobuf field <code>bool built_in = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setBuiltIn($var)
    {
        GPBUtil::checkBool($var);
        $this->built_in = $var;

        return $this;
    }

    /**
     * Output only. The status of the `Role`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.RoleStatusEnum.RoleStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the `Role`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.RoleStatusEnum.RoleStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\RoleStatusEnum\RoleStatus::class);
        $this->status = $var;

        return $this;
    }

}

