<?php

namespace Rancher\Model;

use \ArrayAccess;

class SecretProjection implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'items' => '\Rancher\Model\KeyToPath[]',
        'name' => 'string',
        'optional' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'items' => 'setItems',
        'name' => 'setName',
        'optional' => 'setOptional',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'items' => 'getItems',
        'name' => 'getName',
        'optional' => 'getOptional',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
    }

    /**
     * Gets items
     * @return \Rancher\Model\KeyToPath[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Rancher\Model\KeyToPath[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets optional
     * @return boolean
     */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
     * Sets optional
     * @param boolean $optional
     * @return $this
     */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;

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

