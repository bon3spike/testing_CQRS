<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DescribeNamespaceResponse</code>
 */
class DescribeNamespaceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceInfo namespace_info = 1;</code>
     */
    protected $namespace_info = null;
    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceConfig config = 2;</code>
     */
    protected $config = null;
    /**
     * Generated from protobuf field <code>.temporal.api.replication.v1.NamespaceReplicationConfig replication_config = 3;</code>
     */
    protected $replication_config = null;
    /**
     * Generated from protobuf field <code>int64 failover_version = 4;</code>
     */
    protected $failover_version = 0;
    /**
     * Generated from protobuf field <code>bool is_global_namespace = 5;</code>
     */
    protected $is_global_namespace = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\PBNamespace\V1\NamespaceInfo $namespace_info
     *     @type \Temporal\Api\PBNamespace\V1\NamespaceConfig $config
     *     @type \Temporal\Api\Replication\V1\NamespaceReplicationConfig $replication_config
     *     @type int|string $failover_version
     *     @type bool $is_global_namespace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceInfo namespace_info = 1;</code>
     * @return \Temporal\Api\PBNamespace\V1\NamespaceInfo|null
     */
    public function getNamespaceInfo()
    {
        return $this->namespace_info;
    }

    public function hasNamespaceInfo()
    {
        return isset($this->namespace_info);
    }

    public function clearNamespaceInfo()
    {
        unset($this->namespace_info);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceInfo namespace_info = 1;</code>
     * @param \Temporal\Api\PBNamespace\V1\NamespaceInfo $var
     * @return $this
     */
    public function setNamespaceInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\PBNamespace\V1\NamespaceInfo::class);
        $this->namespace_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceConfig config = 2;</code>
     * @return \Temporal\Api\PBNamespace\V1\NamespaceConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceConfig config = 2;</code>
     * @param \Temporal\Api\PBNamespace\V1\NamespaceConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\PBNamespace\V1\NamespaceConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.replication.v1.NamespaceReplicationConfig replication_config = 3;</code>
     * @return \Temporal\Api\Replication\V1\NamespaceReplicationConfig|null
     */
    public function getReplicationConfig()
    {
        return $this->replication_config;
    }

    public function hasReplicationConfig()
    {
        return isset($this->replication_config);
    }

    public function clearReplicationConfig()
    {
        unset($this->replication_config);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.replication.v1.NamespaceReplicationConfig replication_config = 3;</code>
     * @param \Temporal\Api\Replication\V1\NamespaceReplicationConfig $var
     * @return $this
     */
    public function setReplicationConfig($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Replication\V1\NamespaceReplicationConfig::class);
        $this->replication_config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 failover_version = 4;</code>
     * @return int|string
     */
    public function getFailoverVersion()
    {
        return $this->failover_version;
    }

    /**
     * Generated from protobuf field <code>int64 failover_version = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailoverVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->failover_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_global_namespace = 5;</code>
     * @return bool
     */
    public function getIsGlobalNamespace()
    {
        return $this->is_global_namespace;
    }

    /**
     * Generated from protobuf field <code>bool is_global_namespace = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsGlobalNamespace($var)
    {
        GPBUtil::checkBool($var);
        $this->is_global_namespace = $var;

        return $this;
    }

}

