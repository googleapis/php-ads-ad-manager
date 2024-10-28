<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/team_messages.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Team defines a grouping of users and what entities they have access to.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.Team</code>
 */
class Team extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the `Team`.
     * Format: `networks/{network_code}/teams/{team_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. The unique ID of the Team. This value is assigned by Google.
     * Teams that are created by Google will have negative IDs.
     *
     * Generated from protobuf field <code>int64 team_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $team_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the `Team`.
     *           Format: `networks/{network_code}/teams/{team_id}`
     *     @type int|string $team_id
     *           Output only. The unique ID of the Team. This value is assigned by Google.
     *           Teams that are created by Google will have negative IDs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\TeamMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the `Team`.
     * Format: `networks/{network_code}/teams/{team_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the `Team`.
     * Format: `networks/{network_code}/teams/{team_id}`
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
     * Output only. The unique ID of the Team. This value is assigned by Google.
     * Teams that are created by Google will have negative IDs.
     *
     * Generated from protobuf field <code>int64 team_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * Output only. The unique ID of the Team. This value is assigned by Google.
     * Teams that are created by Google will have negative IDs.
     *
     * Generated from protobuf field <code>int64 team_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTeamId($var)
    {
        GPBUtil::checkInt64($var);
        $this->team_id = $var;

        return $this;
    }

}
