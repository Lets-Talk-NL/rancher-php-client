<?php

namespace Rancher\Model;

use \ArrayAccess;

class Vmwarevsphereconfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'boot2dockerUrl' => 'string',
        'cfgparam' => 'string[]',
        'cloudinit' => 'string',
        'cpuCount' => 'string',
        'datacenter' => 'string',
        'datastore' => 'string',
        'diskSize' => 'string',
        'folder' => 'string',
        'hostsystem' => 'string',
        'memorySize' => 'string',
        'network' => 'string[]',
        'password' => '\Rancher\Model\Password',
        'pool' => 'string',
        'username' => 'string',
        'vappIpallocationpolicy' => 'string',
        'vappIpprotocol' => 'string',
        'vappProperty' => 'string[]',
        'vappTransport' => 'string',
        'vcenter' => 'string',
        'vcenterPort' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'boot2dockerUrl' => 'setBoot2dockerUrl',
        'cfgparam' => 'setCfgparam',
        'cloudinit' => 'setCloudinit',
        'cpuCount' => 'setCpuCount',
        'datacenter' => 'setDatacenter',
        'datastore' => 'setDatastore',
        'diskSize' => 'setDiskSize',
        'folder' => 'setFolder',
        'hostsystem' => 'setHostsystem',
        'memorySize' => 'setMemorySize',
        'network' => 'setNetwork',
        'password' => 'setPassword',
        'pool' => 'setPool',
        'username' => 'setUsername',
        'vappIpallocationpolicy' => 'setVappIpallocationpolicy',
        'vappIpprotocol' => 'setVappIpprotocol',
        'vappProperty' => 'setVappProperty',
        'vappTransport' => 'setVappTransport',
        'vcenter' => 'setVcenter',
        'vcenterPort' => 'setVcenterPort',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'boot2dockerUrl' => 'getBoot2dockerUrl',
        'cfgparam' => 'getCfgparam',
        'cloudinit' => 'getCloudinit',
        'cpuCount' => 'getCpuCount',
        'datacenter' => 'getDatacenter',
        'datastore' => 'getDatastore',
        'diskSize' => 'getDiskSize',
        'folder' => 'getFolder',
        'hostsystem' => 'getHostsystem',
        'memorySize' => 'getMemorySize',
        'network' => 'getNetwork',
        'password' => 'getPassword',
        'pool' => 'getPool',
        'username' => 'getUsername',
        'vappIpallocationpolicy' => 'getVappIpallocationpolicy',
        'vappIpprotocol' => 'getVappIpprotocol',
        'vappProperty' => 'getVappProperty',
        'vappTransport' => 'getVappTransport',
        'vcenter' => 'getVcenter',
        'vcenterPort' => 'getVcenterPort',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['boot2dockerUrl'] = isset($data['boot2dockerUrl']) ? $data['boot2dockerUrl'] : null;
        $this->container['cfgparam'] = isset($data['cfgparam']) ? $data['cfgparam'] : null;
        $this->container['cloudinit'] = isset($data['cloudinit']) ? $data['cloudinit'] : null;
        $this->container['cpuCount'] = isset($data['cpuCount']) ? $data['cpuCount'] : null;
        $this->container['datacenter'] = isset($data['datacenter']) ? $data['datacenter'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['hostsystem'] = isset($data['hostsystem']) ? $data['hostsystem'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['vappIpallocationpolicy'] = isset($data['vappIpallocationpolicy']) ? $data['vappIpallocationpolicy'] : null;
        $this->container['vappIpprotocol'] = isset($data['vappIpprotocol']) ? $data['vappIpprotocol'] : null;
        $this->container['vappProperty'] = isset($data['vappProperty']) ? $data['vappProperty'] : null;
        $this->container['vappTransport'] = isset($data['vappTransport']) ? $data['vappTransport'] : null;
        $this->container['vcenter'] = isset($data['vcenter']) ? $data['vcenter'] : null;
        $this->container['vcenterPort'] = isset($data['vcenterPort']) ? $data['vcenterPort'] : null;
    }

    /**
     * Gets boot2dockerUrl
     * @return string
     */
    public function getBoot2dockerUrl()
    {
        return $this->container['boot2dockerUrl'];
    }

    /**
     * Sets boot2dockerUrl
     * @param string $boot2dockerUrl
     * @return $this
     */
    public function setBoot2dockerUrl($boot2dockerUrl)
    {
        $this->container['boot2dockerUrl'] = $boot2dockerUrl;

        return $this;
    }


    /**
     * Gets cfgparam
     * @return string[]
     */
    public function getCfgparam()
    {
        return $this->container['cfgparam'];
    }

    /**
     * Sets cfgparam
     * @param string[] $cfgparam
     * @return $this
     */
    public function setCfgparam($cfgparam)
    {
        $this->container['cfgparam'] = $cfgparam;

        return $this;
    }


    /**
     * Gets cloudinit
     * @return string
     */
    public function getCloudinit()
    {
        return $this->container['cloudinit'];
    }

    /**
     * Sets cloudinit
     * @param string $cloudinit
     * @return $this
     */
    public function setCloudinit($cloudinit)
    {
        $this->container['cloudinit'] = $cloudinit;

        return $this;
    }


    /**
     * Gets cpuCount
     * @return string
     */
    public function getCpuCount()
    {
        return $this->container['cpuCount'];
    }

    /**
     * Sets cpuCount
     * @param string $cpuCount
     * @return $this
     */
    public function setCpuCount($cpuCount)
    {
        $this->container['cpuCount'] = $cpuCount;

        return $this;
    }


    /**
     * Gets datacenter
     * @return string
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     * @param string $datacenter
     * @return $this
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
    }


    /**
     * Gets datastore
     * @return string
     */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
     * Sets datastore
     * @param string $datastore
     * @return $this
     */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;

        return $this;
    }


    /**
     * Gets diskSize
     * @return string
     */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
     * Sets diskSize
     * @param string $diskSize
     * @return $this
     */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;

        return $this;
    }


    /**
     * Gets folder
     * @return string
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param string $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }


    /**
     * Gets hostsystem
     * @return string
     */
    public function getHostsystem()
    {
        return $this->container['hostsystem'];
    }

    /**
     * Sets hostsystem
     * @param string $hostsystem
     * @return $this
     */
    public function setHostsystem($hostsystem)
    {
        $this->container['hostsystem'] = $hostsystem;

        return $this;
    }


    /**
     * Gets memorySize
     * @return string
     */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
     * Sets memorySize
     * @param string $memorySize
     * @return $this
     */
    public function setMemorySize($memorySize)
    {
        $this->container['memorySize'] = $memorySize;

        return $this;
    }


    /**
     * Gets network
     * @return string[]
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param string[] $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }


    /**
     * Gets password
     * @return \Rancher\Model\Password
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param \Rancher\Model\Password $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }


    /**
     * Gets pool
     * @return string
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     * @param string $pool
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

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
     * Gets vappIpallocationpolicy
     * @return string
     */
    public function getVappIpallocationpolicy()
    {
        return $this->container['vappIpallocationpolicy'];
    }

    /**
     * Sets vappIpallocationpolicy
     * @param string $vappIpallocationpolicy
     * @return $this
     */
    public function setVappIpallocationpolicy($vappIpallocationpolicy)
    {
        $this->container['vappIpallocationpolicy'] = $vappIpallocationpolicy;

        return $this;
    }


    /**
     * Gets vappIpprotocol
     * @return string
     */
    public function getVappIpprotocol()
    {
        return $this->container['vappIpprotocol'];
    }

    /**
     * Sets vappIpprotocol
     * @param string $vappIpprotocol
     * @return $this
     */
    public function setVappIpprotocol($vappIpprotocol)
    {
        $this->container['vappIpprotocol'] = $vappIpprotocol;

        return $this;
    }


    /**
     * Gets vappProperty
     * @return string[]
     */
    public function getVappProperty()
    {
        return $this->container['vappProperty'];
    }

    /**
     * Sets vappProperty
     * @param string[] $vappProperty
     * @return $this
     */
    public function setVappProperty($vappProperty)
    {
        $this->container['vappProperty'] = $vappProperty;

        return $this;
    }


    /**
     * Gets vappTransport
     * @return string
     */
    public function getVappTransport()
    {
        return $this->container['vappTransport'];
    }

    /**
     * Sets vappTransport
     * @param string $vappTransport
     * @return $this
     */
    public function setVappTransport($vappTransport)
    {
        $this->container['vappTransport'] = $vappTransport;

        return $this;
    }


    /**
     * Gets vcenter
     * @return string
     */
    public function getVcenter()
    {
        return $this->container['vcenter'];
    }

    /**
     * Sets vcenter
     * @param string $vcenter
     * @return $this
     */
    public function setVcenter($vcenter)
    {
        $this->container['vcenter'] = $vcenter;

        return $this;
    }


    /**
     * Gets vcenterPort
     * @return string
     */
    public function getVcenterPort()
    {
        return $this->container['vcenterPort'];
    }

    /**
     * Sets vcenterPort
     * @param string $vcenterPort
     * @return $this
     */
    public function setVcenterPort($vcenterPort)
    {
        $this->container['vcenterPort'] = $vcenterPort;

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

