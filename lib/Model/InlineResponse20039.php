<?php
/**
 * InlineResponse20039
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * App Center Client
 *
 * Microsoft Visual Studio App Center API
 *
 * OpenAPI spec version: v0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse20039 Class Doc Comment
 *
 * @category Class
 * @description Export configuration result
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20039 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_39';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'export_type' => 'string',
        'creation_time' => 'string',
        'last_run_time' => 'string',
        'export_entities' => 'string[]',
        'state' => 'string',
        'state_info' => 'string',
        'resource_group' => 'string',
        'resource_name' => 'string',
        'export_configuration' => '\Swagger\Client\Model\InlineResponse20039ExportConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'export_type' => null,
        'creation_time' => null,
        'last_run_time' => null,
        'export_entities' => null,
        'state' => null,
        'state_info' => null,
        'resource_group' => null,
        'resource_name' => null,
        'export_configuration' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'export_type' => 'export_type',
        'creation_time' => 'creation_time',
        'last_run_time' => 'last_run_time',
        'export_entities' => 'export_entities',
        'state' => 'state',
        'state_info' => 'state_info',
        'resource_group' => 'resource_group',
        'resource_name' => 'resource_name',
        'export_configuration' => 'export_configuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'export_type' => 'setExportType',
        'creation_time' => 'setCreationTime',
        'last_run_time' => 'setLastRunTime',
        'export_entities' => 'setExportEntities',
        'state' => 'setState',
        'state_info' => 'setStateInfo',
        'resource_group' => 'setResourceGroup',
        'resource_name' => 'setResourceName',
        'export_configuration' => 'setExportConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'export_type' => 'getExportType',
        'creation_time' => 'getCreationTime',
        'last_run_time' => 'getLastRunTime',
        'export_entities' => 'getExportEntities',
        'state' => 'getState',
        'state_info' => 'getStateInfo',
        'resource_group' => 'getResourceGroup',
        'resource_name' => 'getResourceName',
        'export_configuration' => 'getExportConfiguration'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const EXPORT_TYPE_BLOB_STORAGE = 'BlobStorage';
    const EXPORT_TYPE_APP_INSIGHTS = 'AppInsights';
    const EXPORT_ENTITIES_CRASHES = 'crashes';
    const EXPORT_ENTITIES_ERRORS = 'errors';
    const EXPORT_ENTITIES_ATTACHMENTS = 'attachments';
    const EXPORT_ENTITIES_NO_LOGS = 'no_logs';
    const STATE_ENABLED = 'Enabled';
    const STATE_DISABLED = 'Disabled';
    const STATE_PENDING = 'Pending';
    const STATE_DELETED = 'Deleted';
    const STATE_INVALID = 'Invalid';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportTypeAllowableValues()
    {
        return [
            self::EXPORT_TYPE_BLOB_STORAGE,
            self::EXPORT_TYPE_APP_INSIGHTS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportEntitiesAllowableValues()
    {
        return [
            self::EXPORT_ENTITIES_CRASHES,
            self::EXPORT_ENTITIES_ERRORS,
            self::EXPORT_ENTITIES_ATTACHMENTS,
            self::EXPORT_ENTITIES_NO_LOGS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ENABLED,
            self::STATE_DISABLED,
            self::STATE_PENDING,
            self::STATE_DELETED,
            self::STATE_INVALID,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['export_type'] = isset($data['export_type']) ? $data['export_type'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['last_run_time'] = isset($data['last_run_time']) ? $data['last_run_time'] : null;
        $this->container['export_entities'] = isset($data['export_entities']) ? $data['export_entities'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_info'] = isset($data['state_info']) ? $data['state_info'] : null;
        $this->container['resource_group'] = isset($data['resource_group']) ? $data['resource_group'] : null;
        $this->container['resource_name'] = isset($data['resource_name']) ? $data['resource_name'] : null;
        $this->container['export_configuration'] = isset($data['export_configuration']) ? $data['export_configuration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['export_type'] === null) {
            $invalidProperties[] = "'export_type' can't be null";
        }
        $allowedValues = $this->getExportTypeAllowableValues();
        if (!is_null($this->container['export_type']) && !in_array($this->container['export_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'export_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['creation_time'] === null) {
            $invalidProperties[] = "'creation_time' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Export configuration id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets export_type
     *
     * @return string
     */
    public function getExportType()
    {
        return $this->container['export_type'];
    }

    /**
     * Sets export_type
     *
     * @param string $export_type Target resource type of export configuration
     *
     * @return $this
     */
    public function setExportType($export_type)
    {
        $allowedValues = $this->getExportTypeAllowableValues();
        if (!in_array($export_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'export_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['export_type'] = $export_type;

        return $this;
    }

    /**
     * Gets creation_time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param string $creation_time Creation time in ISO 8601 format
     *
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets last_run_time
     *
     * @return string
     */
    public function getLastRunTime()
    {
        return $this->container['last_run_time'];
    }

    /**
     * Sets last_run_time
     *
     * @param string $last_run_time Latest time in ISO 8601 format when export completed successfully
     *
     * @return $this
     */
    public function setLastRunTime($last_run_time)
    {
        $this->container['last_run_time'] = $last_run_time;

        return $this;
    }

    /**
     * Gets export_entities
     *
     * @return string[]
     */
    public function getExportEntities()
    {
        return $this->container['export_entities'];
    }

    /**
     * Sets export_entities
     *
     * @param string[] $export_entities export_entities
     *
     * @return $this
     */
    public function setExportEntities($export_entities)
    {
        $allowedValues = $this->getExportEntitiesAllowableValues();
        if (!is_null($export_entities) && array_diff($export_entities, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'export_entities', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['export_entities'] = $export_entities;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the export job
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_info
     *
     * @return string
     */
    public function getStateInfo()
    {
        return $this->container['state_info'];
    }

    /**
     * Sets state_info
     *
     * @param string $state_info Additional information about export configuration state
     *
     * @return $this
     */
    public function setStateInfo($state_info)
    {
        $this->container['state_info'] = $state_info;

        return $this;
    }

    /**
     * Gets resource_group
     *
     * @return string
     */
    public function getResourceGroup()
    {
        return $this->container['resource_group'];
    }

    /**
     * Sets resource_group
     *
     * @param string $resource_group resource group for the storage account/App Insights resource
     *
     * @return $this
     */
    public function setResourceGroup($resource_group)
    {
        $this->container['resource_group'] = $resource_group;

        return $this;
    }

    /**
     * Gets resource_name
     *
     * @return string
     */
    public function getResourceName()
    {
        return $this->container['resource_name'];
    }

    /**
     * Sets resource_name
     *
     * @param string $resource_name Storage accout or Appinsights resource name
     *
     * @return $this
     */
    public function setResourceName($resource_name)
    {
        $this->container['resource_name'] = $resource_name;

        return $this;
    }

    /**
     * Gets export_configuration
     *
     * @return \Swagger\Client\Model\InlineResponse20039ExportConfiguration
     */
    public function getExportConfiguration()
    {
        return $this->container['export_configuration'];
    }

    /**
     * Sets export_configuration
     *
     * @param \Swagger\Client\Model\InlineResponse20039ExportConfiguration $export_configuration export_configuration
     *
     * @return $this
     */
    public function setExportConfiguration($export_configuration)
    {
        $this->container['export_configuration'] = $export_configuration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

