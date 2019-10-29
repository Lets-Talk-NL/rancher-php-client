<?php

namespace Rancher\Model;

use \ArrayAccess;

class RouteOpenstackOpts implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'router-id' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'router-id' => 'setRouter-id',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'router-id' => 'getRouter-id',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['router-id'] = isset($data['router-id']) ? $data['router-id'] : null;
    }

    /**
     * Gets router-id
     * @return string
     */
    public function getRouter-id()
    {
        return $this->container['router-id'];
    }

    /**
     * Sets router-id
     * @param string $router-id
     * @return $this
     */
    public function setRouter-id($router-id)
    {
        $this->container['router-id'] = $router-id;

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

