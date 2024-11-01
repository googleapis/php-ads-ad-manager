<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class ReportService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
,google/ads/admanager/v1/report_service.protogoogle.ads.admanager.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/date.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto"��
Report
name (	B�A
	report_id (B�AC

visibility (2*.google.ads.admanager.v1.Report.VisibilityB�AI
report_definition (2).google.ads.admanager.v1.ReportDefinitionB�A
display_name (	B�A4
update_time (2.google.protobuf.TimestampB�A4
create_time (2.google.protobuf.TimestampB�A
locale (	B�AG
schedule_options	 (2(.google.ads.admanager.v1.ScheduleOptionsB�A�
Value
	int_value (H 
double_value (H 
string_value (	H 

bool_value (H G
int_list_value (2-.google.ads.admanager.v1.Report.Value.IntListH M
string_list_value (20.google.ads.admanager.v1.Report.Value.StringListH 
bytes_value (H 
IntList
values (

StringList
values (	B
value�
Sort9
field (2%.google.ads.admanager.v1.Report.FieldB�A

descending (B�A>
slice (2%.google.ads.admanager.v1.Report.SliceB�AH �#
time_period_index (B�AH�T
metric_value_type (2/.google.ads.admanager.v1.Report.MetricValueTypeB�AH�B
_sliceB
_time_period_indexB
_metric_value_type�
	DataTable�
Row?
dimension_values (2%.google.ads.admanager.v1.Report.ValueW
metric_value_groups (2:.google.ads.admanager.v1.Report.DataTable.MetricValueGroup�
MetricValueGroup=
primary_values (2%.google.ads.admanager.v1.Report.ValueN
primary_percent_of_total_values (2%.google.ads.admanager.v1.Report.Value@
comparison_values (2%.google.ads.admanager.v1.Report.ValueQ
"comparison_percent_of_total_values (2%.google.ads.admanager.v1.Report.ValueE
absolute_change_values (2%.google.ads.admanager.v1.Report.ValueE
relative_change_values (2%.google.ads.admanager.v1.Report.Value
flag_values (�
Field>
	dimension (2).google.ads.admanager.v1.Report.DimensionH 8
metric (2&.google.ads.admanager.v1.Report.MetricH B
field�
SliceA
	dimension (2).google.ads.admanager.v1.Report.DimensionB�A9
value (2%.google.ads.admanager.v1.Report.ValueB�A�
FilterJ
field_filter (22.google.ads.admanager.v1.Report.Filter.FieldFilterH <

not_filter (2&.google.ads.admanager.v1.Report.FilterH G

and_filter (21.google.ads.admanager.v1.Report.Filter.FilterListH F
	or_filter (21.google.ads.admanager.v1.Report.Filter.FilterListH �
FieldFilter9
field (2%.google.ads.admanager.v1.Report.FieldB�AH
	operation (20.google.ads.admanager.v1.Report.Filter.OperationB�A:
values (2%.google.ads.admanager.v1.Report.ValueB�A>
slice (2%.google.ads.admanager.v1.Report.SliceB�AH �#
time_period_index (B�AH�T
metric_value_type (2/.google.ads.admanager.v1.Report.MetricValueTypeB�AH�B
_sliceB
_time_period_indexB
_metric_value_typeJ

FilterList<
filters (2&.google.ads.admanager.v1.Report.FilterB�A"�
	Operation
IN 

NOT_IN
CONTAINS
NOT_CONTAINS
	LESS_THAN
LESS_THAN_EQUALS
GREATER_THAN
GREATER_THAN_EQUALS
BETWEEN
MATCHES	
NOT_MATCHES
B
typeW
Flag<
filters (2&.google.ads.admanager.v1.Report.FilterB�A
name (	B�A�
	DateRangeI
fixed (28.google.ads.admanager.v1.Report.DateRange.FixedDateRangeH O
relative (2;.google.ads.admanager.v1.Report.DateRange.RelativeDateRangeH f
FixedDateRange*

start_date (2.google.type.DateB�A(
end_date (2.google.type.DateB�A"�
RelativeDateRange#
RELATIVE_DATE_RANGE_UNSPECIFIED 	
TODAY
	YESTERDAY
	THIS_WEEK
THIS_WEEK_TO_DATE

THIS_MONTH
THIS_MONTH_TO_DATE
THIS_QUARTER
THIS_QUARTER_TO_DATE
	THIS_YEAR
THIS_YEAR_TO_DATE
	LAST_WEEK

LAST_MONTH
LAST_QUARTER	
	LAST_YEAR

LAST_7_DAYS
LAST_30_DAYS
LAST_60_DAYS
LAST_90_DAYS
LAST_180_DAYS
LAST_360_DAYS
LAST_365_DAYS
LAST_3_MONTHS
LAST_6_MONTHS
LAST_12_MONTHS
ALL_AVAILABLE
PREVIOUS_PERIOD
SAME_PERIOD_PREVIOUS_YEARB
date_range_type"�
TimePeriodColumn"
TIME_PERIOD_COLUMN_UNSPECIFIED 
TIME_PERIOD_COLUMN_DATE
TIME_PERIOD_COLUMN_WEEK
TIME_PERIOD_COLUMN_MONTH
TIME_PERIOD_COLUMN_QUARTER"Β
	Dimension
DIMENSION_UNSPECIFIED 
ADVERTISER_DOMAIN_NAME�
ADVERTISER_EXTERNAL_ID�
ADVERTISER_ID�
ADVERTISER_LABELS�
ADVERTISER_LABEL_IDS�
ADVERTISER_NAME�
ADVERTISER_PRIMARY_CONTACT�
AD_LOCATION�
AD_LOCATION_NAME�
AD_UNIT_CODE@
AD_UNIT_CODE_LEVEL_1A
AD_UNIT_CODE_LEVEL_10J
AD_UNIT_CODE_LEVEL_11K
AD_UNIT_CODE_LEVEL_12L
AD_UNIT_CODE_LEVEL_13M
AD_UNIT_CODE_LEVEL_14N
AD_UNIT_CODE_LEVEL_15O
AD_UNIT_CODE_LEVEL_16P
AD_UNIT_CODE_LEVEL_2B
AD_UNIT_CODE_LEVEL_3C
AD_UNIT_CODE_LEVEL_4D
AD_UNIT_CODE_LEVEL_5E
AD_UNIT_CODE_LEVEL_6F
AD_UNIT_CODE_LEVEL_7G
AD_UNIT_CODE_LEVEL_8H
AD_UNIT_CODE_LEVEL_9I
AD_UNIT_DEPTHe

AD_UNIT_ID
AD_UNIT_ID_ALL_LEVEL
AD_UNIT_ID_LEVEL_1
AD_UNIT_ID_LEVEL_100
AD_UNIT_ID_LEVEL_112
AD_UNIT_ID_LEVEL_124
AD_UNIT_ID_LEVEL_136
AD_UNIT_ID_LEVEL_148
AD_UNIT_ID_LEVEL_15:
AD_UNIT_ID_LEVEL_16<
AD_UNIT_ID_LEVEL_2 
AD_UNIT_ID_LEVEL_3"
AD_UNIT_ID_LEVEL_4$
AD_UNIT_ID_LEVEL_5&
AD_UNIT_ID_LEVEL_6(
AD_UNIT_ID_LEVEL_7*
AD_UNIT_ID_LEVEL_8,
AD_UNIT_ID_LEVEL_9.
AD_UNIT_ID_TOP_LEVEL�
AD_UNIT_NAME
AD_UNIT_NAME_ALL_LEVEL
AD_UNIT_NAME_LEVEL_1
AD_UNIT_NAME_LEVEL_101
AD_UNIT_NAME_LEVEL_113
AD_UNIT_NAME_LEVEL_125
AD_UNIT_NAME_LEVEL_137
AD_UNIT_NAME_LEVEL_149
AD_UNIT_NAME_LEVEL_15;
AD_UNIT_NAME_LEVEL_16=
AD_UNIT_NAME_LEVEL_2!
AD_UNIT_NAME_LEVEL_3#
AD_UNIT_NAME_LEVEL_4%
AD_UNIT_NAME_LEVEL_5\'
AD_UNIT_NAME_LEVEL_6)
AD_UNIT_NAME_LEVEL_7+
AD_UNIT_NAME_LEVEL_8-
AD_UNIT_NAME_LEVEL_9/
AD_UNIT_NAME_TOP_LEVEL�
AD_UNIT_REWARD_AMOUNT?
AD_UNIT_REWARD_TYPE>
AD_UNIT_STATUS�
AD_UNIT_STATUS_NAME�
APP_VERSION�$
BACKFILL_ADVERTISER_EXTERNAL_ID�
BACKFILL_ADVERTISER_ID�
BACKFILL_ADVERTISER_LABELS�"
BACKFILL_ADVERTISER_LABEL_IDS�
BACKFILL_ADVERTISER_NAME�(
#BACKFILL_ADVERTISER_PRIMARY_CONTACT�#
BACKFILL_CREATIVE_BILLING_TYPE�(
#BACKFILL_CREATIVE_BILLING_TYPE_NAME�(
#BACKFILL_CREATIVE_CLICK_THROUGH_URL�
BACKFILL_CREATIVE_ID�
BACKFILL_CREATIVE_NAME�)
$BACKFILL_CREATIVE_THIRD_PARTY_VENDOR�
BACKFILL_CREATIVE_TYPE� 
BACKFILL_CREATIVE_TYPE_NAME� 
BACKFILL_LINE_ITEM_ARCHIVED�1
,BACKFILL_LINE_ITEM_COMPANION_DELIVERY_OPTION�6
1BACKFILL_LINE_ITEM_COMPANION_DELIVERY_OPTION_NAME�\'
"BACKFILL_LINE_ITEM_COMPUTED_STATUS�,
\'BACKFILL_LINE_ITEM_COMPUTED_STATUS_NAME�+
&BACKFILL_LINE_ITEM_CONTRACTED_QUANTITY�%
 BACKFILL_LINE_ITEM_COST_PER_UNIT�!
BACKFILL_LINE_ITEM_COST_TYPE�&
!BACKFILL_LINE_ITEM_COST_TYPE_NAME�)
$BACKFILL_LINE_ITEM_CREATIVE_END_DATE�.
)BACKFILL_LINE_ITEM_CREATIVE_ROTATION_TYPE�3
.BACKFILL_LINE_ITEM_CREATIVE_ROTATION_TYPE_NAME�+
&BACKFILL_LINE_ITEM_CREATIVE_START_DATE�%
 BACKFILL_LINE_ITEM_CURRENCY_CODE�*
%BACKFILL_LINE_ITEM_DELIVERY_INDICATOR�*
%BACKFILL_LINE_ITEM_DELIVERY_RATE_TYPE�/
*BACKFILL_LINE_ITEM_DELIVERY_RATE_TYPE_NAME�)
$BACKFILL_LINE_ITEM_DISCOUNT_ABSOLUTE�+
&BACKFILL_LINE_ITEM_DISCOUNT_PERCENTAGE� 
BACKFILL_LINE_ITEM_END_DATE�%
 BACKFILL_LINE_ITEM_END_DATE_TIME�(
#BACKFILL_LINE_ITEM_ENVIRONMENT_TYPE�-
(BACKFILL_LINE_ITEM_ENVIRONMENT_TYPE_NAME�(
#BACKFILL_LINE_ITEM_EXTERNAL_DEAL_ID�#
BACKFILL_LINE_ITEM_EXTERNAL_ID�%
 BACKFILL_LINE_ITEM_FREQUENCY_CAP�
BACKFILL_LINE_ITEM_ID�,
\'BACKFILL_LINE_ITEM_LAST_MODIFIED_BY_APP�\'
"BACKFILL_LINE_ITEM_LIFETIME_CLICKS�,
\'BACKFILL_LINE_ITEM_LIFETIME_IMPRESSIONS�5
0BACKFILL_LINE_ITEM_LIFETIME_VIEWABLE_IMPRESSIONS� 
BACKFILL_LINE_ITEM_MAKEGOOD�
BACKFILL_LINE_ITEM_NAME�.
)BACKFILL_LINE_ITEM_NON_CPD_BOOKED_REVENUE�#
BACKFILL_LINE_ITEM_OPTIMIZABLE�)
$BACKFILL_LINE_ITEM_PRIMARY_GOAL_TYPE�.
)BACKFILL_LINE_ITEM_PRIMARY_GOAL_TYPE_NAME�.
)BACKFILL_LINE_ITEM_PRIMARY_GOAL_UNIT_TYPE�3
.BACKFILL_LINE_ITEM_PRIMARY_GOAL_UNIT_TYPE_NAME� 
BACKFILL_LINE_ITEM_PRIORITY�*
%BACKFILL_LINE_ITEM_RESERVATION_STATUS�/
*BACKFILL_LINE_ITEM_RESERVATION_STATUS_NAME�"
BACKFILL_LINE_ITEM_START_DATE�\'
"BACKFILL_LINE_ITEM_START_DATE_TIME�
BACKFILL_LINE_ITEM_TYPE�!
BACKFILL_LINE_ITEM_TYPE_NAME�%
 BACKFILL_LINE_ITEM_UNLIMITED_END�+
&BACKFILL_LINE_ITEM_VALUE_COST_PER_UNIT�)
$BACKFILL_LINE_ITEM_WEB_PROPERTY_CODE�*
%BACKFILL_MASTER_COMPANION_CREATIVE_ID�,
\'BACKFILL_MASTER_COMPANION_CREATIVE_NAME�
BACKFILL_ORDER_AGENCY�
BACKFILL_ORDER_AGENCY_ID�
BACKFILL_ORDER_BOOKED_CPC�
BACKFILL_ORDER_BOOKED_CPM�#
BACKFILL_ORDER_DELIVERY_STATUS�(
#BACKFILL_ORDER_DELIVERY_STATUS_NAME�
BACKFILL_ORDER_END_DATE�!
BACKFILL_ORDER_END_DATE_TIME�
BACKFILL_ORDER_EXTERNAL_ID�
BACKFILL_ORDER_ID�
BACKFILL_ORDER_LABELS�
BACKFILL_ORDER_LABEL_IDS�#
BACKFILL_ORDER_LIFETIME_CLICKS�(
#BACKFILL_ORDER_LIFETIME_IMPRESSIONS�
BACKFILL_ORDER_NAME�
BACKFILL_ORDER_PO_NUMBER� 
BACKFILL_ORDER_PROGRAMMATIC�
BACKFILL_ORDER_SALESPERSON�)
$BACKFILL_ORDER_SECONDARY_SALESPEOPLE�,
\'BACKFILL_ORDER_SECONDARY_SALESPEOPLE_ID�)
$BACKFILL_ORDER_SECONDARY_TRAFFICKERS�,
\'BACKFILL_ORDER_SECONDARY_TRAFFICKERS_ID�
BACKFILL_ORDER_START_DATE�#
BACKFILL_ORDER_START_DATE_TIME�
BACKFILL_ORDER_TRAFFICKER�!
BACKFILL_ORDER_TRAFFICKER_ID�!
BACKFILL_ORDER_UNLIMITED_END�#
BACKFILL_PROGRAMMATIC_BUYER_ID�%
 BACKFILL_PROGRAMMATIC_BUYER_NAME�
BRANDING_TYPE�
BRANDING_TYPE_NAME�
BROWSER_CATEGORYw
BROWSER_CATEGORY_NAMEx

BROWSER_ID�
BROWSER_NAME�

CARRIER_ID�
CARRIER_NAME�
CLASSIFIED_ADVERTISER_ID�
CLASSIFIED_ADVERTISER_NAME�
CLASSIFIED_BRAND_ID�
CLASSIFIED_BRAND_NAME�

CONTENT_ID�
CONTENT_NAME�

COUNTRY_ID
COUNTRY_NAME
CREATIVE_BILLING_TYPE�
CREATIVE_BILLING_TYPE_NAME�
CREATIVE_CLICK_THROUGH_URL�
CREATIVE_ID�
CREATIVE_NAME�
CREATIVE_TECHNOLOGY�
CREATIVE_TECHNOLOGY_NAME� 
CREATIVE_THIRD_PARTY_VENDOR�
CREATIVE_TYPE�
CREATIVE_TYPE_NAME�
DATE
DAY_OF_WEEK
DEMAND_CHANNEL	
DEMAND_CHANNEL_NAME

DEMAND_SUBCHANNEL
DEMAND_SUBCHANNEL_NAME
DEVICE�
DEVICE_CATEGORY
DEVICE_CATEGORY_NAME
DEVICE_NAME�$
EXCHANGE_THIRD_PARTY_COMPANY_ID�&
!EXCHANGE_THIRD_PARTY_COMPANY_NAME�
FIRST_LOOK_PRICING_RULE_ID�!
FIRST_LOOK_PRICING_RULE_NAME�
HOURd
INTERACTION_TYPE�
INTERACTION_TYPE_NAME�
INVENTORY_FORMAT
INVENTORY_FORMAT_NAME
INVENTORY_TYPE
INVENTORY_TYPE_NAME
IS_ADX_DIRECT�
IS_FIRST_LOOK_DEAL�
KEY_VALUES_ID�
KEY_VALUES_NAME�
LINE_ITEM_ARCHIVED�(
#LINE_ITEM_COMPANION_DELIVERY_OPTION�-
(LINE_ITEM_COMPANION_DELIVERY_OPTION_NAME�
LINE_ITEM_COMPUTED_STATUS�#
LINE_ITEM_COMPUTED_STATUS_NAME�!
LINE_ITEM_CONTRACTED_QUANTITY\\
LINE_ITEM_COST_PER_UNITU
LINE_ITEM_COST_TYPE�
LINE_ITEM_COST_TYPE_NAME� 
LINE_ITEM_CREATIVE_END_DATE�%
 LINE_ITEM_CREATIVE_ROTATION_TYPE�*
%LINE_ITEM_CREATIVE_ROTATION_TYPE_NAME�"
LINE_ITEM_CREATIVE_START_DATE�
LINE_ITEM_CURRENCY_CODE� 
LINE_ITEM_DELIVERY_INDICATORW!
LINE_ITEM_DELIVERY_RATE_TYPE�&
!LINE_ITEM_DELIVERY_RATE_TYPE_NAME� 
LINE_ITEM_DISCOUNT_ABSOLUTE�"
LINE_ITEM_DISCOUNT_PERCENTAGE�
LINE_ITEM_END_DATEQ
LINE_ITEM_END_DATE_TIMES
LINE_ITEM_ENVIRONMENT_TYPE�$
LINE_ITEM_ENVIRONMENT_TYPE_NAME�
LINE_ITEM_EXTERNAL_DEAL_IDa
LINE_ITEM_EXTERNAL_IDV
LINE_ITEM_FREQUENCY_CAP�
LINE_ITEM_ID#
LINE_ITEM_LAST_MODIFIED_BY_APP�
LINE_ITEM_LIFETIME_CLICKS_"
LINE_ITEM_LIFETIME_IMPRESSIONS^+
\'LINE_ITEM_LIFETIME_VIEWABLE_IMPRESSIONS`
LINE_ITEM_MAKEGOODY
LINE_ITEM_NAME$
 LINE_ITEM_NON_CPD_BOOKED_REVENUEb
LINE_ITEM_OPTIMIZABLEZ 
LINE_ITEM_PRIMARY_GOAL_TYPE�%
 LINE_ITEM_PRIMARY_GOAL_TYPE_NAME�)
%LINE_ITEM_PRIMARY_GOAL_UNITS_ABSOLUTE],
\'LINE_ITEM_PRIMARY_GOAL_UNITS_PERCENTAGE�%
 LINE_ITEM_PRIMARY_GOAL_UNIT_TYPE�*
%LINE_ITEM_PRIMARY_GOAL_UNIT_TYPE_NAME�
LINE_ITEM_PRIORITY!
LINE_ITEM_RESERVATION_STATUS�&
!LINE_ITEM_RESERVATION_STATUS_NAME�
LINE_ITEM_START_DATER
LINE_ITEM_START_DATE_TIMET
LINE_ITEM_TYPE�
LINE_ITEM_TYPE_NAME�
LINE_ITEM_UNLIMITED_END�!
LINE_ITEM_VALUE_COST_PER_UNITX 
LINE_ITEM_WEB_PROPERTY_CODE�!
MASTER_COMPANION_CREATIVE_ID�#
MASTER_COMPANION_CREATIVE_NAME�
MOBILE_APP_FREE�
MOBILE_APP_ICON_URL�
MOBILE_APP_ID{
MOBILE_APP_NAME 
MOBILE_APP_OWNERSHIP_STATUS�%
 MOBILE_APP_OWNERSHIP_STATUS_NAME�
MOBILE_APP_STORE}
MOBILE_APP_STORE_NAME�
MOBILE_INVENTORY_TYPEc
MOBILE_INVENTORY_TYPE_NAME
MOBILE_SDK_VERSION_NAME�

MONTH_YEAR
NATIVE_AD_FORMAT_ID�
NATIVE_AD_FORMAT_NAME�
NATIVE_STYLE_ID�
NATIVE_STYLE_NAME�
OPERATING_SYSTEM_CATEGORYu"
OPERATING_SYSTEM_CATEGORY_NAMEv 
OPERATING_SYSTEM_VERSION_ID�"
OPERATING_SYSTEM_VERSION_NAME�
ORDER_AGENCY�
ORDER_AGENCY_ID�
ORDER_BOOKED_CPC�
ORDER_BOOKED_CPM�
ORDER_DELIVERY_STATUS�
ORDER_DELIVERY_STATUS_NAME�
ORDER_END_DATE�
ORDER_END_DATE_TIME�
ORDER_EXTERNAL_ID�
ORDER_ID
ORDER_LABELS�
ORDER_LABEL_IDS�
ORDER_LIFETIME_CLICKS�
ORDER_LIFETIME_IMPRESSIONS�

ORDER_NAME
ORDER_PO_NUMBER�
ORDER_PROGRAMMATIC�
ORDER_SALESPERSON� 
ORDER_SECONDARY_SALESPEOPLE�#
ORDER_SECONDARY_SALESPEOPLE_ID� 
ORDER_SECONDARY_TRAFFICKERS�#
ORDER_SECONDARY_TRAFFICKERS_ID�
ORDER_START_DATE�
ORDER_START_DATE_TIME�
ORDER_TRAFFICKER�
ORDER_TRAFFICKER_ID�
ORDER_UNLIMITED_END�
PLACEMENT_IDq
PLACEMENT_ID_ALL�
PLACEMENT_NAMEr
PLACEMENT_NAME_ALL�
PLACEMENT_STATUS�
PLACEMENT_STATUS_ALL�
PLACEMENT_STATUS_NAME�
PLACEMENT_STATUS_NAME_ALL�
PROGRAMMATIC_BUYER_ID�
PROGRAMMATIC_BUYER_NAME�
PROGRAMMATIC_CHANNEL
PROGRAMMATIC_CHANNEL_NAME
RENDERED_CREATIVE_SIZE�
REQUESTED_AD_SIZES�
REQUEST_TYPE�
REQUEST_TYPE_NAME�	
SITE�
TARGETING_ID�
TARGETING_NAME�
TARGETING_TYPE�
TARGETING_TYPE_NAME�
TRAFFIC_SOURCE�
TRAFFIC_SOURCE_NAME�
UNIFIED_PRICING_RULE_ID�
UNIFIED_PRICING_RULE_NAME�
VIDEO_PLCMT�
VIDEO_PLCMT_NAME�
WEEK
YIELD_GROUP_BUYER_NAME�
YIELD_GROUP_ID�
YIELD_GROUP_NAME�\'
"LINE_ITEM_CUSTOM_FIELD_0_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_1_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_2_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_3_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_4_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_5_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_6_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_7_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_8_OPTION_ID�N\'
"LINE_ITEM_CUSTOM_FIELD_9_OPTION_ID�N(
#LINE_ITEM_CUSTOM_FIELD_10_OPTION_ID�N(
#LINE_ITEM_CUSTOM_FIELD_11_OPTION_ID�N(
#LINE_ITEM_CUSTOM_FIELD_12_OPTION_ID�N(
#LINE_ITEM_CUSTOM_FIELD_13_OPTION_ID�N(
#LINE_ITEM_CUSTOM_FIELD_14_OPTION_ID�N#
LINE_ITEM_CUSTOM_FIELD_0_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_1_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_2_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_3_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_4_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_5_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_6_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_7_VALUE�U#
LINE_ITEM_CUSTOM_FIELD_8_VALUE�V#
LINE_ITEM_CUSTOM_FIELD_9_VALUE�V$
LINE_ITEM_CUSTOM_FIELD_10_VALUE�V$
LINE_ITEM_CUSTOM_FIELD_11_VALUE�V$
LINE_ITEM_CUSTOM_FIELD_12_VALUE�V$
LINE_ITEM_CUSTOM_FIELD_13_VALUE�V$
LINE_ITEM_CUSTOM_FIELD_14_VALUE�V#
ORDER_CUSTOM_FIELD_0_OPTION_ID�]#
ORDER_CUSTOM_FIELD_1_OPTION_ID�]#
ORDER_CUSTOM_FIELD_2_OPTION_ID�]#
ORDER_CUSTOM_FIELD_3_OPTION_ID�]#
ORDER_CUSTOM_FIELD_4_OPTION_ID�]#
ORDER_CUSTOM_FIELD_5_OPTION_ID�]#
ORDER_CUSTOM_FIELD_6_OPTION_ID�]#
ORDER_CUSTOM_FIELD_7_OPTION_ID�]#
ORDER_CUSTOM_FIELD_8_OPTION_ID�]#
ORDER_CUSTOM_FIELD_9_OPTION_ID�]$
ORDER_CUSTOM_FIELD_10_OPTION_ID�]$
ORDER_CUSTOM_FIELD_11_OPTION_ID�]$
ORDER_CUSTOM_FIELD_12_OPTION_ID�]$
ORDER_CUSTOM_FIELD_13_OPTION_ID�]$
ORDER_CUSTOM_FIELD_14_OPTION_ID�]
ORDER_CUSTOM_FIELD_0_VALUE�e
ORDER_CUSTOM_FIELD_1_VALUE�e
ORDER_CUSTOM_FIELD_2_VALUE�e
ORDER_CUSTOM_FIELD_3_VALUE�e
ORDER_CUSTOM_FIELD_4_VALUE�e
ORDER_CUSTOM_FIELD_5_VALUE�e
ORDER_CUSTOM_FIELD_6_VALUE�e
ORDER_CUSTOM_FIELD_7_VALUE�e
ORDER_CUSTOM_FIELD_8_VALUE�e
ORDER_CUSTOM_FIELD_9_VALUE�e 
ORDER_CUSTOM_FIELD_10_VALUE�e 
ORDER_CUSTOM_FIELD_11_VALUE�e 
ORDER_CUSTOM_FIELD_12_VALUE�e 
ORDER_CUSTOM_FIELD_13_VALUE�e 
ORDER_CUSTOM_FIELD_14_VALUE�e&
!CREATIVE_CUSTOM_FIELD_0_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_1_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_2_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_3_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_4_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_5_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_6_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_7_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_8_OPTION_ID�m&
!CREATIVE_CUSTOM_FIELD_9_OPTION_ID�m\'
"CREATIVE_CUSTOM_FIELD_10_OPTION_ID�m\'
"CREATIVE_CUSTOM_FIELD_11_OPTION_ID�m\'
"CREATIVE_CUSTOM_FIELD_12_OPTION_ID�m\'
"CREATIVE_CUSTOM_FIELD_13_OPTION_ID�m\'
"CREATIVE_CUSTOM_FIELD_14_OPTION_ID�m"
CREATIVE_CUSTOM_FIELD_0_VALUE�u"
CREATIVE_CUSTOM_FIELD_1_VALUE�u"
CREATIVE_CUSTOM_FIELD_2_VALUE�u"
CREATIVE_CUSTOM_FIELD_3_VALUE�u"
CREATIVE_CUSTOM_FIELD_4_VALUE�u"
CREATIVE_CUSTOM_FIELD_5_VALUE�u"
CREATIVE_CUSTOM_FIELD_6_VALUE�u"
CREATIVE_CUSTOM_FIELD_7_VALUE�u"
CREATIVE_CUSTOM_FIELD_8_VALUE�u"
CREATIVE_CUSTOM_FIELD_9_VALUE�u#
CREATIVE_CUSTOM_FIELD_10_VALUE�u#
CREATIVE_CUSTOM_FIELD_11_VALUE�u#
CREATIVE_CUSTOM_FIELD_12_VALUE�u#
CREATIVE_CUSTOM_FIELD_13_VALUE�u#
CREATIVE_CUSTOM_FIELD_14_VALUE�u0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_0_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_1_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_2_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_3_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_4_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_5_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_6_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_7_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_8_OPTION_ID�}0
+BACKFILL_LINE_ITEM_CUSTOM_FIELD_9_OPTION_ID�}1
,BACKFILL_LINE_ITEM_CUSTOM_FIELD_10_OPTION_ID�}1
,BACKFILL_LINE_ITEM_CUSTOM_FIELD_11_OPTION_ID�}1
,BACKFILL_LINE_ITEM_CUSTOM_FIELD_12_OPTION_ID�}1
,BACKFILL_LINE_ITEM_CUSTOM_FIELD_13_OPTION_ID�}1
,BACKFILL_LINE_ITEM_CUSTOM_FIELD_14_OPTION_ID�}-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_0_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_1_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_2_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_3_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_4_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_5_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_6_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_7_VALUE�-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_8_VALUE��-
\'BACKFILL_LINE_ITEM_CUSTOM_FIELD_9_VALUE�.
(BACKFILL_LINE_ITEM_CUSTOM_FIELD_10_VALUE�.
(BACKFILL_LINE_ITEM_CUSTOM_FIELD_11_VALUE�.
(BACKFILL_LINE_ITEM_CUSTOM_FIELD_12_VALUE�.
(BACKFILL_LINE_ITEM_CUSTOM_FIELD_13_VALUE��.
(BACKFILL_LINE_ITEM_CUSTOM_FIELD_14_VALUE��-
\'BACKFILL_ORDER_CUSTOM_FIELD_0_OPTION_IDЌ-
\'BACKFILL_ORDER_CUSTOM_FIELD_1_OPTION_IDь-
\'BACKFILL_ORDER_CUSTOM_FIELD_2_OPTION_IDҌ-
\'BACKFILL_ORDER_CUSTOM_FIELD_3_OPTION_IDӌ-
\'BACKFILL_ORDER_CUSTOM_FIELD_4_OPTION_IDԌ-
\'BACKFILL_ORDER_CUSTOM_FIELD_5_OPTION_IDՌ-
\'BACKFILL_ORDER_CUSTOM_FIELD_6_OPTION_ID֌-
\'BACKFILL_ORDER_CUSTOM_FIELD_7_OPTION_ID׌-
\'BACKFILL_ORDER_CUSTOM_FIELD_8_OPTION_ID،-
\'BACKFILL_ORDER_CUSTOM_FIELD_9_OPTION_IDٌ.
(BACKFILL_ORDER_CUSTOM_FIELD_10_OPTION_IDڌ.
(BACKFILL_ORDER_CUSTOM_FIELD_11_OPTION_IDی.
(BACKFILL_ORDER_CUSTOM_FIELD_12_OPTION_ID܌.
(BACKFILL_ORDER_CUSTOM_FIELD_13_OPTION_ID݌.
(BACKFILL_ORDER_CUSTOM_FIELD_14_OPTION_IDތ)
#BACKFILL_ORDER_CUSTOM_FIELD_0_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_1_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_2_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_3_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_4_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_5_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_6_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_7_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_8_VALUE��)
#BACKFILL_ORDER_CUSTOM_FIELD_9_VALUE��*
$BACKFILL_ORDER_CUSTOM_FIELD_10_VALUE*
$BACKFILL_ORDER_CUSTOM_FIELD_11_VALUEÔ*
$BACKFILL_ORDER_CUSTOM_FIELD_12_VALUEĔ*
$BACKFILL_ORDER_CUSTOM_FIELD_13_VALUEŔ*
$BACKFILL_ORDER_CUSTOM_FIELD_14_VALUEƔ0
*BACKFILL_CREATIVE_CUSTOM_FIELD_0_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_1_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_2_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_3_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_4_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_5_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_6_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_7_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_8_OPTION_ID��0
*BACKFILL_CREATIVE_CUSTOM_FIELD_9_OPTION_ID��1
+BACKFILL_CREATIVE_CUSTOM_FIELD_10_OPTION_ID��1
+BACKFILL_CREATIVE_CUSTOM_FIELD_11_OPTION_ID��1
+BACKFILL_CREATIVE_CUSTOM_FIELD_12_OPTION_ID��1
+BACKFILL_CREATIVE_CUSTOM_FIELD_13_OPTION_ID��1
+BACKFILL_CREATIVE_CUSTOM_FIELD_14_OPTION_ID��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_0_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_1_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_2_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_3_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_4_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_5_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_6_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_7_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_8_VALUE��,
&BACKFILL_CREATIVE_CUSTOM_FIELD_9_VALUE��-
\'BACKFILL_CREATIVE_CUSTOM_FIELD_10_VALUE��-
\'BACKFILL_CREATIVE_CUSTOM_FIELD_11_VALUE��-
\'BACKFILL_CREATIVE_CUSTOM_FIELD_12_VALUE��-
\'BACKFILL_CREATIVE_CUSTOM_FIELD_13_VALUE��-
\'BACKFILL_CREATIVE_CUSTOM_FIELD_14_VALUE��!
CUSTOM_DIMENSION_0_VALUE_ID��!
CUSTOM_DIMENSION_1_VALUE_ID��!
CUSTOM_DIMENSION_2_VALUE_ID��!
CUSTOM_DIMENSION_3_VALUE_ID��!
CUSTOM_DIMENSION_4_VALUE_ID��!
CUSTOM_DIMENSION_5_VALUE_ID��!
CUSTOM_DIMENSION_6_VALUE_ID��!
CUSTOM_DIMENSION_7_VALUE_ID��!
CUSTOM_DIMENSION_8_VALUE_ID��!
CUSTOM_DIMENSION_9_VALUE_ID��
CUSTOM_DIMENSION_0_VALUE��
CUSTOM_DIMENSION_1_VALUE��
CUSTOM_DIMENSION_2_VALUE��
CUSTOM_DIMENSION_3_VALUE��
CUSTOM_DIMENSION_4_VALUE��
CUSTOM_DIMENSION_5_VALUE��
CUSTOM_DIMENSION_6_VALUE��
CUSTOM_DIMENSION_7_VALUE��
CUSTOM_DIMENSION_8_VALUE��
CUSTOM_DIMENSION_9_VALUE��"�-
Metric
METRIC_UNSPECIFIED %
!ACTIVE_VIEW_AVERAGE_VIEWABLE_TIME=$
 ACTIVE_VIEW_ELIGIBLE_IMPRESSIONS:&
"ACTIVE_VIEW_MEASURABLE_IMPRESSIONS9+
\'ACTIVE_VIEW_MEASURABLE_IMPRESSIONS_RATE<$
 ACTIVE_VIEW_VIEWABLE_IMPRESSIONS8)
%ACTIVE_VIEW_VIEWABLE_IMPRESSIONS_RATE;-
)ADSENSE_ACTIVE_VIEW_AVERAGE_VIEWABLE_TIMEI,
(ADSENSE_ACTIVE_VIEW_ELIGIBLE_IMPRESSIONSF.
*ADSENSE_ACTIVE_VIEW_MEASURABLE_IMPRESSIONSE3
/ADSENSE_ACTIVE_VIEW_MEASURABLE_IMPRESSIONS_RATEH,
(ADSENSE_ACTIVE_VIEW_VIEWABLE_IMPRESSIONSD1
-ADSENSE_ACTIVE_VIEW_VIEWABLE_IMPRESSIONS_RATEG
ADSENSE_AVERAGE_ECPM
ADSENSE_CLICKS
ADSENSE_CTR
ADSENSE_IMPRESSIONS
ADSENSE_PERCENT_CLICKS
ADSENSE_PERCENT_IMPRESSIONS
ADSENSE_PERCENT_REVENUE\'
#ADSENSE_PERCENT_REVENUE_WITHOUT_CPD
ADSENSE_RESPONSES_SERVED)
ADSENSE_REVENUE1
-AD_EXCHANGE_ACTIVE_VIEW_AVERAGE_VIEWABLE_TIMEO0
,AD_EXCHANGE_ACTIVE_VIEW_ELIGIBLE_IMPRESSIONSL2
.AD_EXCHANGE_ACTIVE_VIEW_MEASURABLE_IMPRESSIONSK7
3AD_EXCHANGE_ACTIVE_VIEW_MEASURABLE_IMPRESSIONS_RATEN0
,AD_EXCHANGE_ACTIVE_VIEW_VIEWABLE_IMPRESSIONSJ5
1AD_EXCHANGE_ACTIVE_VIEW_VIEWABLE_IMPRESSIONS_RATEM
AD_EXCHANGE_AVERAGE_ECPM
AD_EXCHANGE_CLICKS
AD_EXCHANGE_CTR
AD_EXCHANGE_IMPRESSIONS
AD_EXCHANGE_PERCENT_CLICKS#
AD_EXCHANGE_PERCENT_IMPRESSIONS
AD_EXCHANGE_PERCENT_REVENUE+
\'AD_EXCHANGE_PERCENT_REVENUE_WITHOUT_CPD 
AD_EXCHANGE_RESPONSES_SERVED*
AD_EXCHANGE_REVENUE
AD_REQUESTS&/
+AD_SERVER_ACTIVE_VIEW_AVERAGE_VIEWABLE_TIMEC.
*AD_SERVER_ACTIVE_VIEW_ELIGIBLE_IMPRESSIONS@0
,AD_SERVER_ACTIVE_VIEW_MEASURABLE_IMPRESSIONS?5
1AD_SERVER_ACTIVE_VIEW_MEASURABLE_IMPRESSIONS_RATEB.
*AD_SERVER_ACTIVE_VIEW_VIEWABLE_IMPRESSIONS>3
/AD_SERVER_ACTIVE_VIEW_VIEWABLE_IMPRESSIONS_RATEA
AD_SERVER_AVERAGE_ECPM"&
"AD_SERVER_AVERAGE_ECPM_WITHOUT_CPD

AD_SERVER_CLICKS
AD_SERVER_CPD_REVENUE 
AD_SERVER_CTR
AD_SERVER_IMPRESSIONS
AD_SERVER_PERCENT_CLICKS!
AD_SERVER_PERCENT_IMPRESSIONS
AD_SERVER_PERCENT_REVENUE#)
%AD_SERVER_PERCENT_REVENUE_WITHOUT_CPD
AD_SERVER_RESPONSES_SERVED(
AD_SERVER_REVENUE!!
AD_SERVER_REVENUE_WITHOUT_CPD	
AUCTIONS_WONP
AVERAGE_ECPM%
AVERAGE_ECPM_WITHOUT_CPD
BIDSQ
BIDS_IN_AUCTIONR
CALLOUTSS

CLICKS
CODE_SERVED_COUNT,
CTR-
(GOOGLE_SOLD_AUCTION_COVIEWED_IMPRESSIONS�$
GOOGLE_SOLD_AUCTION_IMPRESSIONS�%
 GOOGLE_SOLD_COVIEWED_IMPRESSIONS�
GOOGLE_SOLD_IMPRESSIONS�0
,GOOGLE_SOLD_RESERVATION_COVIEWED_IMPRESSIONS\'
#GOOGLE_SOLD_RESERVATION_IMPRESSIONS~
IMPRESSIONS&
!PARTNER_SALES_FILLED_POD_REQUESTS�
PARTNER_SALES_FILL_RATE�%
 PARTNER_SALES_PARTNER_MATCH_RATE�
PARTNER_SALES_QUERIES�\'
"PARTNER_SALES_UNFILLED_IMPRESSIONS�$
PARTNER_SALES_UNMATCHED_QUERIES�
PARTNER_SOLD_CODE_SERVED}%
!PARTNER_SOLD_COVIEWED_IMPRESSIONS|
PARTNER_SOLD_IMPRESSIONS{&
!PROGRAMMATIC_ELIGIBLE_AD_REQUESTS�
PROGRAMMATIC_MATCH_RATE�"
PROGRAMMATIC_RESPONSES_SERVED�
RESPONSES_SERVED\'
REVENUE$
REVENUE_WITHOUT_CPD
SUCCESSFUL_RESPONSEST
UNFILLED_IMPRESSIONS-
UNMATCHED_AD_REQUESTS+*
&USER_MESSAGES_OFFERWALL_MESSAGES_SHOWNy2
.USER_MESSAGES_OFFERWALL_SUCCESSFUL_ENGAGEMENTSz.
*VIDEO_INTERACTION_AVERAGE_INTERACTION_RATE\\
VIDEO_INTERACTION_COLLAPSES]
VIDEO_INTERACTION_EXPANDS_"
VIDEO_INTERACTION_FULL_SCREENS`
VIDEO_INTERACTION_MUTESa
VIDEO_INTERACTION_PAUSESb
VIDEO_INTERACTION_RESUMESc
VIDEO_INTERACTION_REWINDSd
VIDEO_INTERACTION_UNMUTESe!
VIDEO_INTERACTION_VIDEO_SKIPSf$
VIDEO_REAL_TIME_CREATIVE_SERVES�$
VIDEO_REAL_TIME_ERROR_100_COUNT�$
VIDEO_REAL_TIME_ERROR_101_COUNT�$
VIDEO_REAL_TIME_ERROR_102_COUNT�$
VIDEO_REAL_TIME_ERROR_200_COUNT�$
VIDEO_REAL_TIME_ERROR_201_COUNT�$
VIDEO_REAL_TIME_ERROR_202_COUNT�$
VIDEO_REAL_TIME_ERROR_203_COUNT�$
VIDEO_REAL_TIME_ERROR_300_COUNT�$
VIDEO_REAL_TIME_ERROR_301_COUNT�$
VIDEO_REAL_TIME_ERROR_302_COUNT�$
VIDEO_REAL_TIME_ERROR_303_COUNT�$
VIDEO_REAL_TIME_ERROR_400_COUNT�$
VIDEO_REAL_TIME_ERROR_401_COUNT�$
VIDEO_REAL_TIME_ERROR_402_COUNT�$
VIDEO_REAL_TIME_ERROR_403_COUNT�$
VIDEO_REAL_TIME_ERROR_405_COUNT�$
VIDEO_REAL_TIME_ERROR_406_COUNT�$
VIDEO_REAL_TIME_ERROR_407_COUNT�$
VIDEO_REAL_TIME_ERROR_408_COUNT�$
VIDEO_REAL_TIME_ERROR_409_COUNT�$
VIDEO_REAL_TIME_ERROR_410_COUNT�$
VIDEO_REAL_TIME_ERROR_500_COUNT�$
VIDEO_REAL_TIME_ERROR_501_COUNT�$
VIDEO_REAL_TIME_ERROR_502_COUNT�$
VIDEO_REAL_TIME_ERROR_503_COUNT�$
VIDEO_REAL_TIME_ERROR_600_COUNT�$
VIDEO_REAL_TIME_ERROR_601_COUNT�$
VIDEO_REAL_TIME_ERROR_602_COUNT�$
VIDEO_REAL_TIME_ERROR_603_COUNT�$
VIDEO_REAL_TIME_ERROR_604_COUNT�$
VIDEO_REAL_TIME_ERROR_900_COUNT�$
VIDEO_REAL_TIME_ERROR_901_COUNT� 
VIDEO_REAL_TIME_IMPRESSIONS�$
VIDEO_REAL_TIME_MATCHED_QUERIES�&
!VIDEO_REAL_TIME_TOTAL_ERROR_COUNT�"
VIDEO_REAL_TIME_TOTAL_QUERIES�&
!VIDEO_REAL_TIME_UNMATCHED_QUERIES�
VIDEO_VIEWERSHIP_AUTO_PLAYSg&
"VIDEO_VIEWERSHIP_AVERAGE_VIEW_RATEh&
"VIDEO_VIEWERSHIP_AVERAGE_VIEW_TIMEi#
VIDEO_VIEWERSHIP_CLICK_TO_PLAYSj
VIDEO_VIEWERSHIP_COMPLETESk$
 VIDEO_VIEWERSHIP_COMPLETION_RATEl"
VIDEO_VIEWERSHIP_ENGAGED_VIEWSm$
 VIDEO_VIEWERSHIP_FIRST_QUARTILESn
VIDEO_VIEWERSHIP_MIDPOINTSo\'
#VIDEO_VIEWERSHIP_SKIP_BUTTONS_SHOWNp
VIDEO_VIEWERSHIP_STARTSq$
 VIDEO_VIEWERSHIP_THIRD_QUARTILESr&
"VIDEO_VIEWERSHIP_TOTAL_ERROR_COUNTs%
!VIDEO_VIEWERSHIP_TOTAL_ERROR_RATE^!
VIDEO_VIEWERSHIP_VIDEO_LENGTHt&
"VIDEO_VIEWERSHIP_VIEW_THROUGH_RATEu
YIELD_GROUP_ESTIMATED_CPMX!
YIELD_GROUP_ESTIMATED_REVENUEW
YIELD_GROUP_IMPRESSIONSU#
YIELD_GROUP_MEDIATION_FILL_RATEY)
%YIELD_GROUP_MEDIATION_MATCHED_QUERIESV#
YIELD_GROUP_MEDIATION_PASSBACKSv*
&YIELD_GROUP_MEDIATION_THIRD_PARTY_ECPMZ"�
MetricValueType
PRIMARY 
PRIMARY_PERCENT_OF_TOTAL

COMPARISON
COMPARISON_PERCENT_OF_TOTAL
ABSOLUTE_CHANGE
RELATIVE_CHANGE"9

ReportType
REPORT_TYPE_UNSPECIFIED 

HISTORICAL".

Visibility

HIDDEN 	
DRAFT	
SAVED:_�A\\
admanager.googleapis.com/Report(networks/{network_code}/reports/{report}*reports2report"I
RunReportRequest5
name (	B\'�A�A!
admanager.googleapis.com/Report"c
RunReportMetadata
percent_complete (4
report (	B$�A!
admanager.googleapis.com/Report"*
RunReportResponse
report_result (	"I
GetReportRequest5
name (	B\'�A�A!
admanager.googleapis.com/Report"�
ListReportsRequest8
parent (	B(�A�A"
 admanager.googleapis.com/Network
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A
skip (B�A"t
ListReportsResponse0
reports (2.google.ads.admanager.v1.Report
next_page_token (	

total_size ("�
CreateReportRequest7
parent (	B\'�A�A!admanager.googleapis.com/Report4
report (2.google.ads.admanager.v1.ReportB�A"�
UpdateReportRequest4
report (2.google.ads.admanager.v1.ReportB�A4
update_mask (2.google.protobuf.FieldMaskB�A"]
FetchReportResultRowsRequest
name (	
	page_size (B�A

page_token (	B�A"�
FetchReportResultRowsResponse;
rows (2-.google.ads.admanager.v1.Report.DataTable.Row,
run_time (2.google.protobuf.TimestampM
date_ranges (28.google.ads.admanager.v1.Report.DateRange.FixedDateRangeX
comparison_date_ranges (28.google.ads.admanager.v1.Report.DateRange.FixedDateRange
total_row_count (
next_page_token (	"�
ReportDefinitionB

dimensions (2).google.ads.admanager.v1.Report.DimensionB�A<
metrics (2&.google.ads.admanager.v1.Report.MetricB�A<
filters (2&.google.ads.admanager.v1.Report.FilterB�A
	time_zone (	B�A
currency_code (	B�AB

date_range (2).google.ads.admanager.v1.Report.DateRangeB�AR
comparison_date_range	 (2).google.ads.admanager.v1.Report.DateRangeB�AH �%
custom_dimension_key_ids (B�A\'
line_item_custom_field_ids (B�A#
order_custom_field_ids (B�A&
creative_custom_field_ids (B�AD
report_type (2*.google.ads.admanager.v1.Report.ReportTypeB�AQ
time_period_column
 (20.google.ads.admanager.v1.Report.TimePeriodColumnB�A8
flags (2$.google.ads.admanager.v1.Report.FlagB�A8
sorts (2$.google.ads.admanager.v1.Report.SortB�AB
_comparison_date_range"�
ScheduleOptions3
schedule (2!.google.ads.admanager.v1.ScheduleV
delivery_condition (2:.google.ads.admanager.v1.ScheduleOptions.DeliveryCondition8
flags (2$.google.ads.admanager.v1.Report.FlagB�A"H
DeliveryCondition	
NEVER 

ALWAYS
WHEN_FLAG_CONDITIONS_MET"�
ScheduleK
weekly_schedule (20.google.ads.admanager.v1.Schedule.WeeklyScheduleH M
monthly_schedule (21.google.ads.admanager.v1.Schedule.MonthlyScheduleH %

start_date (2.google.type.Date#
end_date (2.google.type.Date>
	frequency (2+.google.ads.admanager.v1.Schedule.Frequency*

start_time (2.google.type.TimeOfDayG
WeeklySchedule5
weekly_scheduled_days (2.google.type.DayOfWeek1
MonthlySchedule
monthly_scheduled_days ("�
	Frequency
FREQUENCY_UNSPECIFIED 

HOURLY
TWO_TIMES_DAILY
THREE_TIMES_DAILY
FOUR_TIMES_DAILY	
DAILY

WEEKLY
MONTHLYB
frequency_schedule2�
ReportService�
	GetReport).google.ads.admanager.v1.GetReportRequest.google.ads.admanager.v1.Report".�Aname���!/v1/{name=networks/*/reports/*}�
ListReports+.google.ads.admanager.v1.ListReportsRequest,.google.ads.admanager.v1.ListReportsResponse"0�Aparent���!/v1/{parent=networks/*}/reports�
CreateReport,.google.ads.admanager.v1.CreateReportRequest.google.ads.admanager.v1.Report"?�Aparent,report���)"/v1/{parent=networks/*}/reports:report�
UpdateReport,.google.ads.admanager.v1.UpdateReportRequest.google.ads.admanager.v1.Report"K�Areport,update_mask���02&/v1/{report.name=networks/*/reports/*}:report�
	RunReport).google.ads.admanager.v1.RunReportRequest.google.longrunning.Operation"^�A&
RunReportResponseRunReportMetadata�Aname���("#/v1/{name=networks/*/reports/*}:run:*�
FetchReportResultRows5.google.ads.admanager.v1.FetchReportResultRowsRequest6.google.ads.admanager.v1.FetchReportResultRowsResponse"B�Aname���53/v1/{name=networks/*/reports/*/results/*}:fetchRows�Aadmanager.googleapis.comB�
com.google.ads.admanager.v1BReportServiceProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

