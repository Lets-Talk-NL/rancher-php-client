<?php

namespace Rancher\Model;

use \ArrayAccess;

class Node implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'allocatable' => 'map[string]',
        'amazonec2Config' => '\Rancher\Model\Amazonec2config',
        'annotations' => 'map[string]',
        'azureConfig' => '\Rancher\Model\Azureconfig',
        'capacity' => 'map[string]',
        'clusterId' => 'string',
        'conditions' => '\Rancher\Model\NodeCondition[]',
        'controlPlane' => 'boolean',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'customConfig' => '\Rancher\Model\CustomConfig',
        'description' => 'string',
        'digitaloceanConfig' => '\Rancher\Model\Digitaloceanconfig',
        'dockerInfo' => '\Rancher\Model\DockerInfo',
        'etcd' => 'boolean',
        'externalIpAddress' => 'string',
        'hostname' => 'string',
        'id' => 'string',
        'imported' => 'boolean',
        'info' => '\Rancher\Model\NodeInfo',
        'ipAddress' => 'string',
        'labels' => 'map[string]',
        'limits' => 'map[string]',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeName' => 'string',
        'nodePoolId' => 'string',
        'nodeTaints' => '\Rancher\Model\Taint[]',
        'nodeTemplateId' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'podCidr' => 'string',
        'providerId' => 'string',
        'publicEndpoints' => '\Rancher\Model\PublicEndpoint[]',
        'removed' => '\DateTime',
        'requested' => 'map[string]',
        'requestedHostname' => '\Rancher\Model\Hostname',
        'sshUser' => 'string',
        'state' => 'string',
        'taints' => '\Rancher\Model\Taint[]',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'unschedulable' => 'boolean',
        'uuid' => 'string',
        'vmwarevsphereConfig' => '\Rancher\Model\Vmwarevsphereconfig',
        'volumesAttached' => 'map[\Rancher\Model\AttachedVolume]',
        'volumesInUse' => 'string[]',
        'worker' => 'boolean',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allocatable' => 'setAllocatable',
        'amazonec2Config' => 'setAmazonec2Config',
        'annotations' => 'setAnnotations',
        'azureConfig' => 'setAzureConfig',
        'capacity' => 'setCapacity',
        'clusterId' => 'setClusterId',
        'conditions' => 'setConditions',
        'controlPlane' => 'setControlPlane',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'customConfig' => 'setCustomConfig',
        'description' => 'setDescription',
        'digitaloceanConfig' => 'setDigitaloceanConfig',
        'dockerInfo' => 'setDockerInfo',
        'etcd' => 'setEtcd',
        'externalIpAddress' => 'setExternalIpAddress',
        'hostname' => 'setHostname',
        'id' => 'setId',
        'imported' => 'setImported',
        'info' => 'setInfo',
        'ipAddress' => 'setIpAddress',
        'labels' => 'setLabels',
        'limits' => 'setLimits',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeName' => 'setNodeName',
        'nodePoolId' => 'setNodePoolId',
        'nodeTaints' => 'setNodeTaints',
        'nodeTemplateId' => 'setNodeTemplateId',
        'ownerReferences' => 'setOwnerReferences',
        'podCidr' => 'setPodCidr',
        'providerId' => 'setProviderId',
        'publicEndpoints' => 'setPublicEndpoints',
        'removed' => 'setRemoved',
        'requested' => 'setRequested',
        'requestedHostname' => 'setRequestedHostname',
        'sshUser' => 'setSshUser',
        'state' => 'setState',
        'taints' => 'setTaints',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'unschedulable' => 'setUnschedulable',
        'uuid' => 'setUuid',
        'vmwarevsphereConfig' => 'setVmwarevsphereConfig',
        'volumesAttached' => 'setVolumesAttached',
        'volumesInUse' => 'setVolumesInUse',
        'worker' => 'setWorker',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allocatable' => 'getAllocatable',
        'amazonec2Config' => 'getAmazonec2Config',
        'annotations' => 'getAnnotations',
        'azureConfig' => 'getAzureConfig',
        'capacity' => 'getCapacity',
        'clusterId' => 'getClusterId',
        'conditions' => 'getConditions',
        'controlPlane' => 'getControlPlane',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'customConfig' => 'getCustomConfig',
        'description' => 'getDescription',
        'digitaloceanConfig' => 'getDigitaloceanConfig',
        'dockerInfo' => 'getDockerInfo',
        'etcd' => 'getEtcd',
        'externalIpAddress' => 'getExternalIpAddress',
        'hostname' => 'getHostname',
        'id' => 'getId',
        'imported' => 'getImported',
        'info' => 'getInfo',
        'ipAddress' => 'getIpAddress',
        'labels' => 'getLabels',
        'limits' => 'getLimits',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeName' => 'getNodeName',
        'nodePoolId' => 'getNodePoolId',
        'nodeTaints' => 'getNodeTaints',
        'nodeTemplateId' => 'getNodeTemplateId',
        'ownerReferences' => 'getOwnerReferences',
        'podCidr' => 'getPodCidr',
        'providerId' => 'getProviderId',
        'publicEndpoints' => 'getPublicEndpoints',
        'removed' => 'getRemoved',
        'requested' => 'getRequested',
        'requestedHostname' => 'getRequestedHostname',
        'sshUser' => 'getSshUser',
        'state' => 'getState',
        'taints' => 'getTaints',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'unschedulable' => 'getUnschedulable',
        'uuid' => 'getUuid',
        'vmwarevsphereConfig' => 'getVmwarevsphereConfig',
        'volumesAttached' => 'getVolumesAttached',
        'volumesInUse' => 'getVolumesInUse',
        'worker' => 'getWorker',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['amazonec2Config'] = isset($data['amazonec2Config']) ? $data['amazonec2Config'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['azureConfig'] = isset($data['azureConfig']) ? $data['azureConfig'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['controlPlane'] = isset($data['controlPlane']) ? $data['controlPlane'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['customConfig'] = isset($data['customConfig']) ? $data['customConfig'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['digitaloceanConfig'] = isset($data['digitaloceanConfig']) ? $data['digitaloceanConfig'] : null;
        $this->container['dockerInfo'] = isset($data['dockerInfo']) ? $data['dockerInfo'] : null;
        $this->container['etcd'] = isset($data['etcd']) ? $data['etcd'] : null;
        $this->container['externalIpAddress'] = isset($data['externalIpAddress']) ? $data['externalIpAddress'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodePoolId'] = isset($data['nodePoolId']) ? $data['nodePoolId'] : null;
        $this->container['nodeTaints'] = isset($data['nodeTaints']) ? $data['nodeTaints'] : null;
        $this->container['nodeTemplateId'] = isset($data['nodeTemplateId']) ? $data['nodeTemplateId'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podCidr'] = isset($data['podCidr']) ? $data['podCidr'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['requested'] = isset($data['requested']) ? $data['requested'] : null;
        $this->container['requestedHostname'] = isset($data['requestedHostname']) ? $data['requestedHostname'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['unschedulable'] = isset($data['unschedulable']) ? $data['unschedulable'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['vmwarevsphereConfig'] = isset($data['vmwarevsphereConfig']) ? $data['vmwarevsphereConfig'] : null;
        $this->container['volumesAttached'] = isset($data['volumesAttached']) ? $data['volumesAttached'] : null;
        $this->container['volumesInUse'] = isset($data['volumesInUse']) ? $data['volumesInUse'] : null;
        $this->container['worker'] = isset($data['worker']) ? $data['worker'] : null;
    }

    /**
     * Gets allocatable
     * @return string[]
     */
    public function getAllocatable()
    {
        return $this->container['allocatable'];
    }

    /**
     * Sets allocatable
     * @param string[] $allocatable
     * @return $this
     */
    public function setAllocatable($allocatable)
    {
        $this->container['allocatable'] = $allocatable;

        return $this;
    }


    /**
     * Gets amazonec2Config
     * @return \Rancher\Model\Amazonec2config
     */
    public function getAmazonec2Config()
    {
        return $this->container['amazonec2Config'];
    }

    /**
     * Sets amazonec2Config
     * @param \Rancher\Model\Amazonec2config $amazonec2Config
     * @return $this
     */
    public function setAmazonec2Config($amazonec2Config)
    {
        $this->container['amazonec2Config'] = $amazonec2Config;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }


    /**
     * Gets azureConfig
     * @return \Rancher\Model\Azureconfig
     */
    public function getAzureConfig()
    {
        return $this->container['azureConfig'];
    }

    /**
     * Sets azureConfig
     * @param \Rancher\Model\Azureconfig $azureConfig
     * @return $this
     */
    public function setAzureConfig($azureConfig)
    {
        $this->container['azureConfig'] = $azureConfig;

        return $this;
    }


    /**
     * Gets capacity
     * @return string[]
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param string[] $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }


    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

        return $this;
    }


    /**
     * Gets conditions
     * @return \Rancher\Model\NodeCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\NodeCondition[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets controlPlane
     * @return boolean
     */
    public function getControlPlane()
    {
        return $this->container['controlPlane'];
    }

    /**
     * Sets controlPlane
     * @param boolean $controlPlane
     * @return $this
     */
    public function setControlPlane($controlPlane)
    {
        $this->container['controlPlane'] = $controlPlane;

        return $this;
    }


    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }


    /**
     * Gets creatorId
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     * @param string $creatorId
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }


    /**
     * Gets customConfig
     * @return \Rancher\Model\CustomConfig
     */
    public function getCustomConfig()
    {
        return $this->container['customConfig'];
    }

    /**
     * Sets customConfig
     * @param \Rancher\Model\CustomConfig $customConfig
     * @return $this
     */
    public function setCustomConfig($customConfig)
    {
        $this->container['customConfig'] = $customConfig;

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
     * Gets digitaloceanConfig
     * @return \Rancher\Model\Digitaloceanconfig
     */
    public function getDigitaloceanConfig()
    {
        return $this->container['digitaloceanConfig'];
    }

    /**
     * Sets digitaloceanConfig
     * @param \Rancher\Model\Digitaloceanconfig $digitaloceanConfig
     * @return $this
     */
    public function setDigitaloceanConfig($digitaloceanConfig)
    {
        $this->container['digitaloceanConfig'] = $digitaloceanConfig;

        return $this;
    }


    /**
     * Gets dockerInfo
     * @return \Rancher\Model\DockerInfo
     */
    public function getDockerInfo()
    {
        return $this->container['dockerInfo'];
    }

    /**
     * Sets dockerInfo
     * @param \Rancher\Model\DockerInfo $dockerInfo
     * @return $this
     */
    public function setDockerInfo($dockerInfo)
    {
        $this->container['dockerInfo'] = $dockerInfo;

        return $this;
    }


    /**
     * Gets etcd
     * @return boolean
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param boolean $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets externalIpAddress
     * @return string
     */
    public function getExternalIpAddress()
    {
        return $this->container['externalIpAddress'];
    }

    /**
     * Sets externalIpAddress
     * @param string $externalIpAddress
     * @return $this
     */
    public function setExternalIpAddress($externalIpAddress)
    {
        $this->container['externalIpAddress'] = $externalIpAddress;

        return $this;
    }


    /**
     * Gets hostname
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     * @param string $hostname
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets imported
     * @return boolean
     */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
     * Sets imported
     * @param boolean $imported
     * @return $this
     */
    public function setImported($imported)
    {
        $this->container['imported'] = $imported;

        return $this;
    }


    /**
     * Gets info
     * @return \Rancher\Model\NodeInfo
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Rancher\Model\NodeInfo $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }


    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets limits
     * @return string[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     * @param string[] $limits
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }


    /**
     * Gets nodeName
     * @return string
     */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
     * Sets nodeName
     * @param string $nodeName
     * @return $this
     */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;

        return $this;
    }


    /**
     * Gets nodePoolId
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->container['nodePoolId'];
    }

    /**
     * Sets nodePoolId
     * @param string $nodePoolId
     * @return $this
     */
    public function setNodePoolId($nodePoolId)
    {
        $this->container['nodePoolId'] = $nodePoolId;

        return $this;
    }


    /**
     * Gets nodeTaints
     * @return \Rancher\Model\Taint[]
     */
    public function getNodeTaints()
    {
        return $this->container['nodeTaints'];
    }

    /**
     * Sets nodeTaints
     * @param \Rancher\Model\Taint[] $nodeTaints
     * @return $this
     */
    public function setNodeTaints($nodeTaints)
    {
        $this->container['nodeTaints'] = $nodeTaints;

        return $this;
    }


    /**
     * Gets nodeTemplateId
     * @return string
     */
    public function getNodeTemplateId()
    {
        return $this->container['nodeTemplateId'];
    }

    /**
     * Sets nodeTemplateId
     * @param string $nodeTemplateId
     * @return $this
     */
    public function setNodeTemplateId($nodeTemplateId)
    {
        $this->container['nodeTemplateId'] = $nodeTemplateId;

        return $this;
    }


    /**
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReference[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets podCidr
     * @return string
     */
    public function getPodCidr()
    {
        return $this->container['podCidr'];
    }

    /**
     * Sets podCidr
     * @param string $podCidr
     * @return $this
     */
    public function setPodCidr($podCidr)
    {
        $this->container['podCidr'] = $podCidr;

        return $this;
    }


    /**
     * Gets providerId
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     * @param string $providerId
     * @return $this
     */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;

        return $this;
    }


    /**
     * Gets publicEndpoints
     * @return \Rancher\Model\PublicEndpoint[]
     */
    public function getPublicEndpoints()
    {
        return $this->container['publicEndpoints'];
    }

    /**
     * Sets publicEndpoints
     * @param \Rancher\Model\PublicEndpoint[] $publicEndpoints
     * @return $this
     */
    public function setPublicEndpoints($publicEndpoints)
    {
        $this->container['publicEndpoints'] = $publicEndpoints;

        return $this;
    }


    /**
     * Gets removed
     * @return \DateTime
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param \DateTime $removed
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }


    /**
     * Gets requested
     * @return string[]
     */
    public function getRequested()
    {
        return $this->container['requested'];
    }

    /**
     * Sets requested
     * @param string[] $requested
     * @return $this
     */
    public function setRequested($requested)
    {
        $this->container['requested'] = $requested;

        return $this;
    }


    /**
     * Gets requestedHostname
     * @return \Rancher\Model\Hostname
     */
    public function getRequestedHostname()
    {
        return $this->container['requestedHostname'];
    }

    /**
     * Sets requestedHostname
     * @param \Rancher\Model\Hostname $requestedHostname
     * @return $this
     */
    public function setRequestedHostname($requestedHostname)
    {
        $this->container['requestedHostname'] = $requestedHostname;

        return $this;
    }


    /**
     * Gets sshUser
     * @return string
     */
    public function getSshUser()
    {
        return $this->container['sshUser'];
    }

    /**
     * Sets sshUser
     * @param string $sshUser
     * @return $this
     */
    public function setSshUser($sshUser)
    {
        $this->container['sshUser'] = $sshUser;

        return $this;
    }


    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets taints
     * @return \Rancher\Model\Taint[]
     */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
     * Sets taints
     * @param \Rancher\Model\Taint[] $taints
     * @return $this
     */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;

        return $this;
    }


    /**
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @return $this
     */
    public function setTransitioning($transitioning)
    {
        $this->container['transitioning'] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage)
    {
        $this->container['transitioningMessage'] = $transitioningMessage;

        return $this;
    }


    /**
     * Gets unschedulable
     * @return boolean
     */
    public function getUnschedulable()
    {
        return $this->container['unschedulable'];
    }

    /**
     * Sets unschedulable
     * @param boolean $unschedulable
     * @return $this
     */
    public function setUnschedulable($unschedulable)
    {
        $this->container['unschedulable'] = $unschedulable;

        return $this;
    }


    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }


    /**
     * Gets vmwarevsphereConfig
     * @return \Rancher\Model\Vmwarevsphereconfig
     */
    public function getVmwarevsphereConfig()
    {
        return $this->container['vmwarevsphereConfig'];
    }

    /**
     * Sets vmwarevsphereConfig
     * @param \Rancher\Model\Vmwarevsphereconfig $vmwarevsphereConfig
     * @return $this
     */
    public function setVmwarevsphereConfig($vmwarevsphereConfig)
    {
        $this->container['vmwarevsphereConfig'] = $vmwarevsphereConfig;

        return $this;
    }


    /**
     * Gets volumesAttached
     * @return \Rancher\Model\AttachedVolume[]
     */
    public function getVolumesAttached()
    {
        return $this->container['volumesAttached'];
    }

    /**
     * Sets volumesAttached
     * @param \Rancher\Model\AttachedVolume[] $volumesAttached
     * @return $this
     */
    public function setVolumesAttached($volumesAttached)
    {
        $this->container['volumesAttached'] = $volumesAttached;

        return $this;
    }


    /**
     * Gets volumesInUse
     * @return string[]
     */
    public function getVolumesInUse()
    {
        return $this->container['volumesInUse'];
    }

    /**
     * Sets volumesInUse
     * @param string[] $volumesInUse
     * @return $this
     */
    public function setVolumesInUse($volumesInUse)
    {
        $this->container['volumesInUse'] = $volumesInUse;

        return $this;
    }


    /**
     * Gets worker
     * @return boolean
     */
    public function getWorker()
    {
        return $this->container['worker'];
    }

    /**
     * Sets worker
     * @param boolean $worker
     * @return $this
     */
    public function setWorker($worker)
    {
        $this->container['worker'] = $worker;

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

