<?php

namespace Rancher\Model;

use \ArrayAccess;

class AllowedFlexVolume implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'driver' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'driver' => 'setDriver',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'driver' => 'getDriver',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
    }

    /**
     * Gets driver
     * @return string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     * @param string $driver
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

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

