<?php

namespace Rancher\Model;

use \ArrayAccess;

class RegistryCredential implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'auth' => 'string',
        'description' => 'string',
        'password' => 'string',
        'username' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'auth' => 'setAuth',
        'description' => 'setDescription',
        'password' => 'setPassword',
        'username' => 'setUsername',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'auth' => 'getAuth',
        'description' => 'getDescription',
        'password' => 'getPassword',
        'username' => 'getUsername',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Gets auth
     * @return string
     */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth
     * @param string $auth
     * @return $this
     */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }


    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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

