<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protocol.proto

namespace Temporal\Roadrunner\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Single communication message.
 *
 * Generated from protobuf message <code>temporal.roadrunner.internal.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * command name (if any)
     *
     * Generated from protobuf field <code>string command = 2;</code>
     */
    protected $command = '';
    /**
     * command options in json format.
     *
     * Generated from protobuf field <code>bytes options = 3;</code>
     */
    protected $options = '';
    /**
     * error response.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 4;</code>
     */
    protected $failure = null;
    /**
     * invocation or result payloads.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads payloads = 5;</code>
     */
    protected $payloads = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $command
     *           command name (if any)
     *     @type string $options
     *           command options in json format.
     *     @type \Temporal\Api\Failure\V1\Failure $failure
     *           error response.
     *     @type \Temporal\Api\Common\V1\Payloads $payloads
     *           invocation or result payloads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protocol::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * command name (if any)
     *
     * Generated from protobuf field <code>string command = 2;</code>
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * command name (if any)
     *
     * Generated from protobuf field <code>string command = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkString($var, True);
        $this->command = $var;

        return $this;
    }

    /**
     * command options in json format.
     *
     * Generated from protobuf field <code>bytes options = 3;</code>
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * command options in json format.
     *
     * Generated from protobuf field <code>bytes options = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkString($var, False);
        $this->options = $var;

        return $this;
    }

    /**
     * error response.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 4;</code>
     * @return \Temporal\Api\Failure\V1\Failure|null
     */
    public function getFailure()
    {
        return $this->failure;
    }

    public function hasFailure()
    {
        return isset($this->failure);
    }

    public function clearFailure()
    {
        unset($this->failure);
    }

    /**
     * error response.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 4;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->failure = $var;

        return $this;
    }

    /**
     * invocation or result payloads.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads payloads = 5;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    public function hasPayloads()
    {
        return isset($this->payloads);
    }

    public function clearPayloads()
    {
        unset($this->payloads);
    }

    /**
     * invocation or result payloads.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads payloads = 5;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setPayloads($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->payloads = $var;

        return $this;
    }

}

