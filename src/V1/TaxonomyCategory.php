<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/taxonomy_category_messages.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `TaxonomyCategory` resource.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.TaxonomyCategory</code>
 */
class TaxonomyCategory extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the `TaxonomyCategory`.
     * Format: `networks/{network_code}/taxonomyCategories/{taxonomy_category_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. `TaxonomyCategory` ID.
     *
     * Generated from protobuf field <code>int64 taxonomy_category_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $taxonomy_category_id = 0;
    /**
     * Output only. Display name of the `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Whether this `TaxonomyCategory` only serves to group its
     * children.
     *
     * Generated from protobuf field <code>bool grouping_only = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $grouping_only = false;
    /**
     * Output only. The ID of the parent category this `TaxonomyCategory` descends
     * from.
     *
     * Generated from protobuf field <code>int64 parent_taxonomy_category_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $parent_taxonomy_category_id = 0;
    /**
     * Output only. The taxonomy that this `TaxonomyCategory` belongs to.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.TaxonomyTypeEnum.TaxonomyType taxonomy_type = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $taxonomy_type = 0;
    /**
     * Output only. The list of names of the ancestors of this `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>repeated string ancestor_names = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $ancestor_names;
    /**
     * Output only. The list of IDs of the ancestors of this `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>repeated int64 ancestor_taxonomy_category_ids = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $ancestor_taxonomy_category_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the `TaxonomyCategory`.
     *           Format: `networks/{network_code}/taxonomyCategories/{taxonomy_category_id}`
     *     @type int|string $taxonomy_category_id
     *           Output only. `TaxonomyCategory` ID.
     *     @type string $display_name
     *           Output only. Display name of the `TaxonomyCategory`.
     *     @type bool $grouping_only
     *           Output only. Whether this `TaxonomyCategory` only serves to group its
     *           children.
     *     @type int|string $parent_taxonomy_category_id
     *           Output only. The ID of the parent category this `TaxonomyCategory` descends
     *           from.
     *     @type int $taxonomy_type
     *           Output only. The taxonomy that this `TaxonomyCategory` belongs to.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ancestor_names
     *           Output only. The list of names of the ancestors of this `TaxonomyCategory`.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $ancestor_taxonomy_category_ids
     *           Output only. The list of IDs of the ancestors of this `TaxonomyCategory`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\TaxonomyCategoryMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the `TaxonomyCategory`.
     * Format: `networks/{network_code}/taxonomyCategories/{taxonomy_category_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the `TaxonomyCategory`.
     * Format: `networks/{network_code}/taxonomyCategories/{taxonomy_category_id}`
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
     * Output only. `TaxonomyCategory` ID.
     *
     * Generated from protobuf field <code>int64 taxonomy_category_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTaxonomyCategoryId()
    {
        return $this->taxonomy_category_id;
    }

    /**
     * Output only. `TaxonomyCategory` ID.
     *
     * Generated from protobuf field <code>int64 taxonomy_category_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTaxonomyCategoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->taxonomy_category_id = $var;

        return $this;
    }

    /**
     * Output only. Display name of the `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. Display name of the `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Whether this `TaxonomyCategory` only serves to group its
     * children.
     *
     * Generated from protobuf field <code>bool grouping_only = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getGroupingOnly()
    {
        return $this->grouping_only;
    }

    /**
     * Output only. Whether this `TaxonomyCategory` only serves to group its
     * children.
     *
     * Generated from protobuf field <code>bool grouping_only = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setGroupingOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->grouping_only = $var;

        return $this;
    }

    /**
     * Output only. The ID of the parent category this `TaxonomyCategory` descends
     * from.
     *
     * Generated from protobuf field <code>int64 parent_taxonomy_category_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getParentTaxonomyCategoryId()
    {
        return $this->parent_taxonomy_category_id;
    }

    /**
     * Output only. The ID of the parent category this `TaxonomyCategory` descends
     * from.
     *
     * Generated from protobuf field <code>int64 parent_taxonomy_category_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentTaxonomyCategoryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->parent_taxonomy_category_id = $var;

        return $this;
    }

    /**
     * Output only. The taxonomy that this `TaxonomyCategory` belongs to.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.TaxonomyTypeEnum.TaxonomyType taxonomy_type = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTaxonomyType()
    {
        return $this->taxonomy_type;
    }

    /**
     * Output only. The taxonomy that this `TaxonomyCategory` belongs to.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.TaxonomyTypeEnum.TaxonomyType taxonomy_type = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTaxonomyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\TaxonomyTypeEnum\TaxonomyType::class);
        $this->taxonomy_type = $var;

        return $this;
    }

    /**
     * Output only. The list of names of the ancestors of this `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>repeated string ancestor_names = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAncestorNames()
    {
        return $this->ancestor_names;
    }

    /**
     * Output only. The list of names of the ancestors of this `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>repeated string ancestor_names = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAncestorNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ancestor_names = $arr;

        return $this;
    }

    /**
     * Output only. The list of IDs of the ancestors of this `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>repeated int64 ancestor_taxonomy_category_ids = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAncestorTaxonomyCategoryIds()
    {
        return $this->ancestor_taxonomy_category_ids;
    }

    /**
     * Output only. The list of IDs of the ancestors of this `TaxonomyCategory`.
     *
     * Generated from protobuf field <code>repeated int64 ancestor_taxonomy_category_ids = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAncestorTaxonomyCategoryIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->ancestor_taxonomy_category_ids = $arr;

        return $this;
    }

}
