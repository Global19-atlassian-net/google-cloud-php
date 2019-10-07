<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A YARN application created by a job. Application information is a subset of
 * <code>org.apache.hadoop.yarn.proto.YarnProtos.ApplicationReportProto</code>.
 * **Beta Feature**: This report is available for testing purposes only. It may
 * be changed before final release.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.YarnApplication</code>
 */
class YarnApplication extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The application name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. The application state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.YarnApplication.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $state = 0;
    /**
     * Required. The numerical progress of the application, from 1 to 100.
     *
     * Generated from protobuf field <code>float progress = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $progress = 0.0;
    /**
     * Optional. The HTTP URL of the ApplicationMaster, HistoryServer, or
     * TimelineServer that provides application-specific information. The URL uses
     * the internal hostname, and requires a proxy server for resolution and,
     * possibly, access.
     *
     * Generated from protobuf field <code>string tracking_url = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tracking_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The application name.
     *     @type int $state
     *           Required. The application state.
     *     @type float $progress
     *           Required. The numerical progress of the application, from 1 to 100.
     *     @type string $tracking_url
     *           Optional. The HTTP URL of the ApplicationMaster, HistoryServer, or
     *           TimelineServer that provides application-specific information. The URL uses
     *           the internal hostname, and requires a proxy server for resolution and,
     *           possibly, access.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The application name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The application name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The application state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.YarnApplication.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Required. The application state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.YarnApplication.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\YarnApplication_State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. The numerical progress of the application, from 1 to 100.
     *
     * Generated from protobuf field <code>float progress = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Required. The numerical progress of the application, from 1 to 100.
     *
     * Generated from protobuf field <code>float progress = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkFloat($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * Optional. The HTTP URL of the ApplicationMaster, HistoryServer, or
     * TimelineServer that provides application-specific information. The URL uses
     * the internal hostname, and requires a proxy server for resolution and,
     * possibly, access.
     *
     * Generated from protobuf field <code>string tracking_url = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->tracking_url;
    }

    /**
     * Optional. The HTTP URL of the ApplicationMaster, HistoryServer, or
     * TimelineServer that provides application-specific information. The URL uses
     * the internal hostname, and requires a proxy server for resolution and,
     * possibly, access.
     *
     * Generated from protobuf field <code>string tracking_url = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url = $var;

        return $this;
    }

}

