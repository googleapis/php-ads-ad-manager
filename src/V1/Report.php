<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `Report` resource.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.Report</code>
 */
class Report extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the report.
     * Report resource name have the form:
     * `networks/{network_code}/reports/{report_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Report ID.
     *
     * Generated from protobuf field <code>int64 report_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $report_id = 0;
    /**
     * Optional. The visibility of a report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Visibility visibility = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $visibility = 0;
    /**
     * Required. The report definition of the report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.ReportDefinition report_definition = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $report_definition = null;
    /**
     * Optional. Display name for the report.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Output only. The instant this report was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The instant this report was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The locale of this report. Locale is set from the user's
     * locale at the time of the request. Locale can not be modified.
     *
     * Generated from protobuf field <code>string locale = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $locale = '';
    /**
     * Optional. The schedule options of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.ScheduleOptions schedule_options = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $schedule_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the report.
     *           Report resource name have the form:
     *           `networks/{network_code}/reports/{report_id}`
     *     @type int|string $report_id
     *           Output only. Report ID.
     *     @type int $visibility
     *           Optional. The visibility of a report.
     *     @type \Google\Ads\AdManager\V1\ReportDefinition $report_definition
     *           Required. The report definition of the report.
     *     @type string $display_name
     *           Optional. Display name for the report.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The instant this report was last modified.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The instant this report was created.
     *     @type string $locale
     *           Output only. The locale of this report. Locale is set from the user's
     *           locale at the time of the request. Locale can not be modified.
     *     @type \Google\Ads\AdManager\V1\ScheduleOptions $schedule_options
     *           Optional. The schedule options of this report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportService::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the report.
     * Report resource name have the form:
     * `networks/{network_code}/reports/{report_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the report.
     * Report resource name have the form:
     * `networks/{network_code}/reports/{report_id}`
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
     * Output only. Report ID.
     *
     * Generated from protobuf field <code>int64 report_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getReportId()
    {
        return $this->report_id;
    }

    /**
     * Output only. Report ID.
     *
     * Generated from protobuf field <code>int64 report_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setReportId($var)
    {
        GPBUtil::checkInt64($var);
        $this->report_id = $var;

        return $this;
    }

    /**
     * Optional. The visibility of a report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Visibility visibility = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Optional. The visibility of a report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Report.Visibility visibility = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\Report\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * Required. The report definition of the report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.ReportDefinition report_definition = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\AdManager\V1\ReportDefinition|null
     */
    public function getReportDefinition()
    {
        return $this->report_definition;
    }

    public function hasReportDefinition()
    {
        return isset($this->report_definition);
    }

    public function clearReportDefinition()
    {
        unset($this->report_definition);
    }

    /**
     * Required. The report definition of the report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.ReportDefinition report_definition = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\AdManager\V1\ReportDefinition $var
     * @return $this
     */
    public function setReportDefinition($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\ReportDefinition::class);
        $this->report_definition = $var;

        return $this;
    }

    /**
     * Optional. Display name for the report.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. Display name for the report.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. The instant this report was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The instant this report was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The instant this report was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The instant this report was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The locale of this report. Locale is set from the user's
     * locale at the time of the request. Locale can not be modified.
     *
     * Generated from protobuf field <code>string locale = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Output only. The locale of this report. Locale is set from the user's
     * locale at the time of the request. Locale can not be modified.
     *
     * Generated from protobuf field <code>string locale = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Optional. The schedule options of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.ScheduleOptions schedule_options = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Ads\AdManager\V1\ScheduleOptions|null
     */
    public function getScheduleOptions()
    {
        return $this->schedule_options;
    }

    public function hasScheduleOptions()
    {
        return isset($this->schedule_options);
    }

    public function clearScheduleOptions()
    {
        unset($this->schedule_options);
    }

    /**
     * Optional. The schedule options of this report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.ScheduleOptions schedule_options = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Ads\AdManager\V1\ScheduleOptions $var
     * @return $this
     */
    public function setScheduleOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\ScheduleOptions::class);
        $this->schedule_options = $var;

        return $this;
    }

}
