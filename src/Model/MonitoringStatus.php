<?php

namespace Rancher\Model;

use \ArrayAccess;

class MonitoringStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'conditions' => '\Rancher\Model\MonitoringCondition[]',
        'grafanaEndpoint' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'conditions' => 'setConditions',
        'grafanaEndpoint' => 'setGrafanaEndpoint',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'conditions' => 'getConditions',
        'grafanaEndpoint' => 'getGrafanaEndpoint',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['grafanaEndpoint'] = isset($data['grafanaEndpoint']) ? $data['grafanaEndpoint'] : null;
    }

    /**
     * Gets conditions
     * @return \Rancher\Model\MonitoringCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\MonitoringCondition[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets grafanaEndpoint
     * @return string
     */
    public function getGrafanaEndpoint()
    {
        return $this->container['grafanaEndpoint'];
    }

    /**
     * Sets grafanaEndpoint
     * @param string $grafanaEndpoint
     * @return $this
     */
    public function setGrafanaEndpoint($grafanaEndpoint)
    {
        $this->container['grafanaEndpoint'] = $grafanaEndpoint;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

