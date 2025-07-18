<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/private_auction_deal_messages.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `PrivateAuctionDeal` resource.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.PrivateAuctionDeal</code>
 */
class PrivateAuctionDeal extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the `PrivateAuctionDeal`.
     * Format:
     * `networks/{network_code}/privateAuctionDeals/{private_auction_deal_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. `PrivateAuctionDeal` ID.
     *
     * Generated from protobuf field <code>optional int64 private_auction_deal_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $private_auction_deal_id = null;
    /**
     * Immutable. The ID of the
     * [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *
     * Generated from protobuf field <code>optional int64 private_auction_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $private_auction_id = null;
    /**
     * Output only. The display name of the
     * [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *
     * Generated from protobuf field <code>optional string private_auction_display_name = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $private_auction_display_name = null;
    /**
     * Immutable. The account ID of the buyer of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional int64 buyer_account_id = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $buyer_account_id = null;
    /**
     * Output only. The external ID of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional int64 external_deal_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $external_deal_id = null;
    /**
     * Optional. The targeting of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.Targeting targeting = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $targeting = null;
    /**
     * Optional. The end time of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $end_time = null;
    /**
     * Required. The floor price of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.type.Money floor_price = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $floor_price = null;
    /**
     * Optional. The expected creative sizes of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Size creative_sizes = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $creative_sizes;
    /**
     * Output only. The status of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.PrivateMarketplaceDealStatusEnum.PrivateMarketplaceDealStatus status = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = null;
    /**
     * Optional. Whether the deal is enabled with priority over open auction.
     *
     * Generated from protobuf field <code>optional bool auction_priority_enabled = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $auction_priority_enabled = null;
    /**
     * Optional. Whether the deal has block override enabled.
     *
     * Generated from protobuf field <code>optional bool block_override_enabled = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $block_override_enabled = null;
    /**
     * Optional. The buyer permission model defining how the deal would transact
     * among all buyers under the same bidder.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.DealBuyerPermissionTypeEnum.DealBuyerPermissionType buyer_permission_type = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $buyer_permission_type = null;
    /**
     * Optional. The buyer data required by the Marketplace API.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.PrivateAuctionDeal.BuyerData buyer_data = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $buyer_data = null;
    /**
     * Output only. The instant at which the `PrivateAuctionDeal` was created.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp create_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The instant at which the `PrivateAuctionDeal` was last
     * updated.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the `PrivateAuctionDeal`.
     *           Format:
     *           `networks/{network_code}/privateAuctionDeals/{private_auction_deal_id}`
     *     @type int|string $private_auction_deal_id
     *           Output only. `PrivateAuctionDeal` ID.
     *     @type int|string $private_auction_id
     *           Immutable. The ID of the
     *           [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *     @type string $private_auction_display_name
     *           Output only. The display name of the
     *           [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *     @type int|string $buyer_account_id
     *           Immutable. The account ID of the buyer of the `PrivateAuctionDeal`.
     *     @type int|string $external_deal_id
     *           Output only. The external ID of the `PrivateAuctionDeal`.
     *     @type \Google\Ads\AdManager\V1\Targeting $targeting
     *           Optional. The targeting of the `PrivateAuctionDeal`.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Optional. The end time of the `PrivateAuctionDeal`.
     *     @type \Google\Type\Money $floor_price
     *           Required. The floor price of the `PrivateAuctionDeal`.
     *     @type array<\Google\Ads\AdManager\V1\Size>|\Google\Protobuf\Internal\RepeatedField $creative_sizes
     *           Optional. The expected creative sizes of the `PrivateAuctionDeal`.
     *     @type int $status
     *           Output only. The status of the `PrivateAuctionDeal`.
     *     @type bool $auction_priority_enabled
     *           Optional. Whether the deal is enabled with priority over open auction.
     *     @type bool $block_override_enabled
     *           Optional. Whether the deal has block override enabled.
     *     @type int $buyer_permission_type
     *           Optional. The buyer permission model defining how the deal would transact
     *           among all buyers under the same bidder.
     *     @type \Google\Ads\AdManager\V1\PrivateAuctionDeal\BuyerData $buyer_data
     *           Optional. The buyer data required by the Marketplace API.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The instant at which the `PrivateAuctionDeal` was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The instant at which the `PrivateAuctionDeal` was last
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\PrivateAuctionDealMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the `PrivateAuctionDeal`.
     * Format:
     * `networks/{network_code}/privateAuctionDeals/{private_auction_deal_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the `PrivateAuctionDeal`.
     * Format:
     * `networks/{network_code}/privateAuctionDeals/{private_auction_deal_id}`
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
     * Output only. `PrivateAuctionDeal` ID.
     *
     * Generated from protobuf field <code>optional int64 private_auction_deal_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getPrivateAuctionDealId()
    {
        return isset($this->private_auction_deal_id) ? $this->private_auction_deal_id : 0;
    }

    public function hasPrivateAuctionDealId()
    {
        return isset($this->private_auction_deal_id);
    }

    public function clearPrivateAuctionDealId()
    {
        unset($this->private_auction_deal_id);
    }

    /**
     * Output only. `PrivateAuctionDeal` ID.
     *
     * Generated from protobuf field <code>optional int64 private_auction_deal_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPrivateAuctionDealId($var)
    {
        GPBUtil::checkInt64($var);
        $this->private_auction_deal_id = $var;

        return $this;
    }

    /**
     * Immutable. The ID of the
     * [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *
     * Generated from protobuf field <code>optional int64 private_auction_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getPrivateAuctionId()
    {
        return isset($this->private_auction_id) ? $this->private_auction_id : 0;
    }

    public function hasPrivateAuctionId()
    {
        return isset($this->private_auction_id);
    }

    public function clearPrivateAuctionId()
    {
        unset($this->private_auction_id);
    }

    /**
     * Immutable. The ID of the
     * [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *
     * Generated from protobuf field <code>optional int64 private_auction_id = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPrivateAuctionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->private_auction_id = $var;

        return $this;
    }

    /**
     * Output only. The display name of the
     * [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *
     * Generated from protobuf field <code>optional string private_auction_display_name = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPrivateAuctionDisplayName()
    {
        return isset($this->private_auction_display_name) ? $this->private_auction_display_name : '';
    }

    public function hasPrivateAuctionDisplayName()
    {
        return isset($this->private_auction_display_name);
    }

    public function clearPrivateAuctionDisplayName()
    {
        unset($this->private_auction_display_name);
    }

    /**
     * Output only. The display name of the
     * [PrivateAuction](google.ads.admanager.v1.PrivateAuction).
     *
     * Generated from protobuf field <code>optional string private_auction_display_name = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateAuctionDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_auction_display_name = $var;

        return $this;
    }

    /**
     * Immutable. The account ID of the buyer of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional int64 buyer_account_id = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getBuyerAccountId()
    {
        return isset($this->buyer_account_id) ? $this->buyer_account_id : 0;
    }

    public function hasBuyerAccountId()
    {
        return isset($this->buyer_account_id);
    }

    public function clearBuyerAccountId()
    {
        unset($this->buyer_account_id);
    }

    /**
     * Immutable. The account ID of the buyer of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional int64 buyer_account_id = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBuyerAccountId($var)
    {
        GPBUtil::checkInt64($var);
        $this->buyer_account_id = $var;

        return $this;
    }

    /**
     * Output only. The external ID of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional int64 external_deal_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExternalDealId()
    {
        return isset($this->external_deal_id) ? $this->external_deal_id : 0;
    }

    public function hasExternalDealId()
    {
        return isset($this->external_deal_id);
    }

    public function clearExternalDealId()
    {
        unset($this->external_deal_id);
    }

    /**
     * Output only. The external ID of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional int64 external_deal_id = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExternalDealId($var)
    {
        GPBUtil::checkInt64($var);
        $this->external_deal_id = $var;

        return $this;
    }

    /**
     * Optional. The targeting of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.Targeting targeting = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Ads\AdManager\V1\Targeting|null
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    public function hasTargeting()
    {
        return isset($this->targeting);
    }

    public function clearTargeting()
    {
        unset($this->targeting);
    }

    /**
     * Optional. The targeting of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.Targeting targeting = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Ads\AdManager\V1\Targeting $var
     * @return $this
     */
    public function setTargeting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Targeting::class);
        $this->targeting = $var;

        return $this;
    }

    /**
     * Optional. The end time of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Optional. The end time of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Required. The floor price of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.type.Money floor_price = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\Money|null
     */
    public function getFloorPrice()
    {
        return $this->floor_price;
    }

    public function hasFloorPrice()
    {
        return isset($this->floor_price);
    }

    public function clearFloorPrice()
    {
        unset($this->floor_price);
    }

    /**
     * Required. The floor price of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.type.Money floor_price = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\Money $var
     * @return $this
     */
    public function setFloorPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Money::class);
        $this->floor_price = $var;

        return $this;
    }

    /**
     * Optional. The expected creative sizes of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Size creative_sizes = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreativeSizes()
    {
        return $this->creative_sizes;
    }

    /**
     * Optional. The expected creative sizes of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Size creative_sizes = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Ads\AdManager\V1\Size>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreativeSizes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\Size::class);
        $this->creative_sizes = $arr;

        return $this;
    }

    /**
     * Output only. The status of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.PrivateMarketplaceDealStatusEnum.PrivateMarketplaceDealStatus status = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. The status of the `PrivateAuctionDeal`.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.PrivateMarketplaceDealStatusEnum.PrivateMarketplaceDealStatus status = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\PrivateMarketplaceDealStatusEnum\PrivateMarketplaceDealStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Optional. Whether the deal is enabled with priority over open auction.
     *
     * Generated from protobuf field <code>optional bool auction_priority_enabled = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAuctionPriorityEnabled()
    {
        return isset($this->auction_priority_enabled) ? $this->auction_priority_enabled : false;
    }

    public function hasAuctionPriorityEnabled()
    {
        return isset($this->auction_priority_enabled);
    }

    public function clearAuctionPriorityEnabled()
    {
        unset($this->auction_priority_enabled);
    }

    /**
     * Optional. Whether the deal is enabled with priority over open auction.
     *
     * Generated from protobuf field <code>optional bool auction_priority_enabled = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAuctionPriorityEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->auction_priority_enabled = $var;

        return $this;
    }

    /**
     * Optional. Whether the deal has block override enabled.
     *
     * Generated from protobuf field <code>optional bool block_override_enabled = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getBlockOverrideEnabled()
    {
        return isset($this->block_override_enabled) ? $this->block_override_enabled : false;
    }

    public function hasBlockOverrideEnabled()
    {
        return isset($this->block_override_enabled);
    }

    public function clearBlockOverrideEnabled()
    {
        unset($this->block_override_enabled);
    }

    /**
     * Optional. Whether the deal has block override enabled.
     *
     * Generated from protobuf field <code>optional bool block_override_enabled = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setBlockOverrideEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->block_override_enabled = $var;

        return $this;
    }

    /**
     * Optional. The buyer permission model defining how the deal would transact
     * among all buyers under the same bidder.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.DealBuyerPermissionTypeEnum.DealBuyerPermissionType buyer_permission_type = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getBuyerPermissionType()
    {
        return isset($this->buyer_permission_type) ? $this->buyer_permission_type : 0;
    }

    public function hasBuyerPermissionType()
    {
        return isset($this->buyer_permission_type);
    }

    public function clearBuyerPermissionType()
    {
        unset($this->buyer_permission_type);
    }

    /**
     * Optional. The buyer permission model defining how the deal would transact
     * among all buyers under the same bidder.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.DealBuyerPermissionTypeEnum.DealBuyerPermissionType buyer_permission_type = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setBuyerPermissionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\DealBuyerPermissionTypeEnum\DealBuyerPermissionType::class);
        $this->buyer_permission_type = $var;

        return $this;
    }

    /**
     * Optional. The buyer data required by the Marketplace API.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.PrivateAuctionDeal.BuyerData buyer_data = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Ads\AdManager\V1\PrivateAuctionDeal\BuyerData|null
     */
    public function getBuyerData()
    {
        return $this->buyer_data;
    }

    public function hasBuyerData()
    {
        return isset($this->buyer_data);
    }

    public function clearBuyerData()
    {
        unset($this->buyer_data);
    }

    /**
     * Optional. The buyer data required by the Marketplace API.
     *
     * Generated from protobuf field <code>optional .google.ads.admanager.v1.PrivateAuctionDeal.BuyerData buyer_data = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Ads\AdManager\V1\PrivateAuctionDeal\BuyerData $var
     * @return $this
     */
    public function setBuyerData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\PrivateAuctionDeal\BuyerData::class);
        $this->buyer_data = $var;

        return $this;
    }

    /**
     * Output only. The instant at which the `PrivateAuctionDeal` was created.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp create_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The instant at which the `PrivateAuctionDeal` was created.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp create_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The instant at which the `PrivateAuctionDeal` was last
     * updated.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The instant at which the `PrivateAuctionDeal` was last
     * updated.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

