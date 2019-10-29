<?php

namespace Rancher\Model;

use \ArrayAccess;

class AzureADConfigTestOutput implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'redirectUrl' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'redirectUrl' => 'setRedirectUrl',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'redirectUrl' => 'getRedirectUrl',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
    }

    /**
     * Gets redirectUrl
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     * @param string $redirectUrl
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;

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

