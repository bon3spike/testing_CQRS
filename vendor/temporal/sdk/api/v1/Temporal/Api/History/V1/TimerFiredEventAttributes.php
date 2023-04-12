<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.TimerFiredEventAttributes</code>
 */
class TimerFiredEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Will match the `timer_id` from `TIMER_STARTED` event for this timer
     *
     * Generated from protobuf field <code>string timer_id = 1;</code>
     */
    protected $timer_id = '';
    /**
     * The id of the `TIMER_STARTED` event itself
     *
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     */
    protected $started_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $timer_id
     *           Will match the `timer_id` from `TIMER_STARTED` event for this timer
     *     @type int|string $started_event_id
     *           The id of the `TIMER_STARTED` event itself
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Will match the `timer_id` from `TIMER_STARTED` event for this timer
     *
     * Generated from protobuf field <code>string timer_id = 1;</code>
     * @return string
     */
    public function getTimerId()
    {
        return $this->timer_id;
    }

    /**
     * Will match the `timer_id` from `TIMER_STARTED` event for this timer
     *
     * Generated from protobuf field <code>string timer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTimerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->timer_id = $var;

        return $this;
    }

    /**
     * The id of the `TIMER_STARTED` event itself
     *
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     * @return int|string
     */
    public function getStartedEventId()
    {
        return $this->started_event_id;
    }

    /**
     * The id of the `TIMER_STARTED` event itself
     *
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_event_id = $var;

        return $this;
    }

}

