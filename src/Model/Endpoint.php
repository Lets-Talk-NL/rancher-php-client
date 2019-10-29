<?php

namespace Rancher\Model;

use \ArrayAccess;

class Endpoint implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'interval' => 'string',
        'params' => 'map[\Rancher\Model\Array[string]]',
        'path' => 'string',
        'relabelings' => '\Rancher\Model\RelabelConfig[]',
        'scheme' => 'string',
        'scrapeTimeout' => 'string',
        'targetPort' => '\Rancher\Model\IntOrString',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'interval' => 'setInterval',
        'params' => 'setParams',
        'path' => 'setPath',
        'relabelings' => 'setRelabelings',
        'scheme' => 'setScheme',
        'scrapeTimeout' => 'setScrapeTimeout',
        'targetPort' => 'setTargetPort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'interval' => 'getInterval',
        'params' => 'getParams',
        'path' => 'getPath',
        'relabelings' => 'getRelabelings',
        'scheme' => 'getScheme',
        'scrapeTimeout' => 'getScrapeTimeout',
        'targetPort' => 'getTargetPort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['relabelings'] = isset($data['relabelings']) ? $data['relabelings'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['scrapeTimeout'] = isset($data['scrapeTimeout']) ? $data['scrapeTimeout'] : null;
        $this->container['targetPort'] = isset($data['targetPort']) ? $data['targetPort'] : null;
    }

    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }


    /**
     * Gets params
     * @return \Rancher\Model\Array[string][]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     * @param \Rancher\Model\Array[string][] $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets relabelings
     * @return \Rancher\Model\RelabelConfig[]
     */
    public function getRelabelings()
    {
        return $this->container['relabelings'];
    }

    /**
     * Sets relabelings
     * @param \Rancher\Model\RelabelConfig[] $relabelings
     * @return $this
     */
    public function setRelabelings($relabelings)
    {
        $this->container['relabelings'] = $relabelings;

        return $this;
    }


    /**
     * Gets scheme
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     * @param string $scheme
     * @return $this
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }


    /**
     * Gets scrapeTimeout
     * @return string
     */
    public function getScrapeTimeout()
    {
        return $this->container['scrapeTimeout'];
    }

    /**
     * Sets scrapeTimeout
     * @param string $scrapeTimeout
     * @return $this
     */
    public function setScrapeTimeout($scrapeTimeout)
    {
        $this->container['scrapeTimeout'] = $scrapeTimeout;

        return $this;
    }


    /**
     * Gets targetPort
     * @return \Rancher\Model\IntOrString
     */
    public function getTargetPort()
    {
        return $this->container['targetPort'];
    }

    /**
     * Sets targetPort
     * @param \Rancher\Model\IntOrString $targetPort
     * @return $this
     */
    public function setTargetPort($targetPort)
    {
        $this->container['targetPort'] = $targetPort;

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

